<?php namespace App\Http\Controllers\Counselor;

use App\Eloquent\Coupon;
use App\Eloquent\User;
use App\Eloquent\UserStudents;
use App\Generators\CouponGenerator;
use App\Generators\DefaultAvatarGenerator;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{
    use CouponGenerator;
    use DefaultAvatarGenerator
    {
        CouponGenerator::generate insteadof DefaultAvatarGenerator;
        DefaultAvatarGenerator::generate as generateAvatar;
    }

    //var_dump(Session::get('cbk_msg', null));

    public function index()
    {
        $coupons = Coupon::with(['users' => function ($query) {
            $query->get(['id', 'name']);
        }])->get();

        $students = User::with(['student' => function ($query) {
            $query->get(['school', 'grade', 'active']);
        }])->where('role', 'student')->get();

        return view(" layout.counselor.dashboard.index.counselor_dashboard_index_$this->theme", compact('students', 'coupons'));
    }

    public function couponGenerator($usage)
    {
        /** @noinspection PhpUndefinedMethodInspection */
        /** @var User $user */
        $user = \Illuminate\Support\Facades\Auth::user();
        $code = $this->generate();
        while (1)
        {
            try
            {
                $coupon = new Coupon(['coupon' => $code]);
                $coupon->setAttribute('usage', $usage);
                $user->coupon()->save($coupon);
                break;
            }
            catch (QueryException $ignored)
            {
            }
            $code = $this->generate();
        }

        return redirect()->back()->with('cbk_msg', ['message' => ["Kode : $code"], 'notify' => ['Kode Berhasil Ditambahkan']]);
    }

    public function uploadStudent(Request $request)
    {
        $invalidRes = redirect()->back()->with('cbk_msg', ['message' => [], 'notify' => ['Format Salah']]);

        $this->validate($request, [
            'students' => 'required',
        ]);

        if ($request->file('students')->isValid())
        {
            $inputFileType = 'Xlsx';
            $inputFileName = $request->file('students')->getRealPath();
            $reader        = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputFileType);
            $reader->setReadDataOnly(true);
            $spreadsheet = $reader->load($inputFileName);
            $spreadsheet->setActiveSheetIndex(0);

            $students = [];
            $row      = 1;
            while (true)
            {
                ++$row;
                $nisn     = $spreadsheet->getActiveSheet()->getCellByColumnAndRow(1, $row)->getValue();
                $name     = $spreadsheet->getActiveSheet()->getCellByColumnAndRow(2, $row)->getValue();
                $gender   = $spreadsheet->getActiveSheet()->getCellByColumnAndRow(3, $row)->getValue();
                $password = $spreadsheet->getActiveSheet()->getCellByColumnAndRow(4, $row)->getValue();
                if (strlen($nisn) <= 0 || strlen($name) <= 0 || strlen($gender) <= 0 || strlen($password) <= 0)
                {
                    break;
                }
                try
                {
                    $password = bcrypt(Carbon::createFromFormat('d-m-Y', $password)->format('d-m-Y'));
                }
                catch (\Exception $e)
                {
                    return $invalidRes;
                }
                if (($gender = strtolower($gender)) != 'l' && $gender != 'p')
                {
                    return $invalidRes;
                }
                $gender = $gender == 'l' ? 'male' : 'female';

                $students[$nisn] = [
                    'credential' => $nisn,
                    'name' => $name,
                    'password' => $password,
                    'gender' => $gender
                ];
            }

            $skipped = User::whereIn('credential', array_keys($students))->get();
            foreach ($skipped as $s)
            {
                unset($students[$s->getAttribute('credential')]);
            }
            if (count($students) <= 0)
            {
                return redirect()->back()->with('cbk_msg', ['message' => [], 'notify' => ['Data kosong / Data Sudah diisikan sebalumnya']]);
            }

            DB::transaction(function () use ($students) {
                foreach ($students as $ss)
                {
                    $user = new User();
                    $user->setAttribute('credential', $ss['credential']);
                    $user->setAttribute('name', $ss['name']);
                    $user->setAttribute('password', $ss['password']);
                    $user->setAttribute('gender', $ss['gender']);
                    $user->setAttribute('avatar', $this->generateAvatar($ss['gender']));
                    $user->setAttribute('role', 'student');
                    $user->save();
                    $user->student()->save(new UserStudents());
                }
            });

            return redirect()->back()->with('cbk_msg', ['message' => [], 'notify' => ['Data Berhasil ditambahkan']]);
        }

        return $invalidRes;
    }

    public function downloadTemplate()
    {
        return response()->download(storage_path('/app/template/Template.xlsx'), 'Template.xlsx');
    }
}
