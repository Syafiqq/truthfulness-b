<?php namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public static $exerciseWindow = 7;
    /**
     * @var bool
     */
    public $timestamps = false;
    public $incrementing = false;
    /**
     * @var string
     */
    protected $table = 'answers';
    /**
     * @var array
     */
    protected $dates = ['started_at', 'finished_at'];
    /**
     * @var array
     */
    protected $guarded = ['id', 'user', 'started_at', 'finished_at'];
    /**
     * @var array
     */
    protected $fillable = [];
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    protected $casts = ['id' => 'string', 'user' => 'string'];

    /**
     * @return mixed
     */
    public function getRouteKey()
    {
        return $this->{'id'};
    }

    public function answer_result()
    {
        return $this->hasMany('App\Eloquent\AnswerResult', 'answer_code', 'id');
    }

    public function answer_detail()
    {
        return $this->hasMany('App\Eloquent\AnswerDetail', 'answer_code', 'id');
    }

    public function getResultAnalytics()
    {
        $analytics = [];

        $analytics['1']['rendah']['guard']          = ['min' => -0.1, 'max' => 50];
        $analytics['1']['rendah']['interval']       = '0 - 50%';
        $analytics['1']['rendah']['class']          = 'Rendah';
        $analytics['1']['rendah']['recommendation'] = 'Nilai Moral <i>Truthfulness</i> <strong>$$0</strong> berda dalam kategori rendah. Dianjurkan untuk melakukan tindakan-tindakan untuk meningkatkan nilai moral <i>Truthfulness</i> anda. Hasil interpretasi tidak mutlak. Anda dapat mengunjungi guru BK apabila ada hal-hal yang tidak dipahami atau hal-hal yang ingin di konsultasikan';
        $analytics['1']['rendah']['description']    = ['key' => 'saat ini berada dalam kondisi kurang: ', 'value' => '(1) memiliki nilai kebenaran; (2) menerapkan nilai kejujuran; (3) menerapkan nilai yang diyakini dalam diri'];
        $analytics['1']['sedang']['guard']          = ['min' => 50, 'max' => 75];
        $analytics['1']['sedang']['interval']       = '50.01 - 75%';
        $analytics['1']['sedang']['class']          = 'Sedang';
        $analytics['1']['sedang']['recommendation'] = 'Nilai Moral <i>Truthfulness</i> <strong>$$0</strong> berda dalam kategori sedang. Sehingga perlu melakukan peningkatan nilai moral <i>Truthfulness</i> anda. Hasil interpretasi tidak mutlak. Anda dapat mengunjungi guru BK apabila ada hal-hal yang tidak dipahami atau hal-hal yang ingin di konsultasikan';
        $analytics['1']['sedang']['description']    = ['key' => 'saat ini berada dalam kondisi sudah belum sepenuhnya: ', 'value' => '(1) memiliki nilai kebenaran; (2) menerapkan nilai kejujuran; (3) menerapkan nilai yang diyakini dalam diri'];
        $analytics['1']['tinggi']['guard']          = ['min' => 75, 'max' => 100.1];
        $analytics['1']['tinggi']['interval']       = '75.01 - 100%';
        $analytics['1']['tinggi']['class']          = 'Tinggi';
        $analytics['1']['tinggi']['recommendation'] = 'Nilai Moral <i>Truthfulness</i> <strong>$$0</strong> berada dalam kategori tinggi. Sehingga perlu mempertahankannya dan melakukan tindakan yang mendukung akan hal itu. Hasil interpretasi tidak mutlak. Anda dapat mengunjungi guru BK apabila ada hal-hal yang tidak dipahami atau hal-hal yang ingin di konsultasikan';
        $analytics['1']['tinggi']['description']    = ['key' => 'saat ini berada dalam kondisi sudah: ', 'value' => '(1) memiliki nilai kebenaran; (2) menerapkan nilai kejujuran; (3) menerapkan nilai yang diyakini dalam diri'];

        return $analytics;
    }
    /**
     * @return string
     */
    public function getDateFormat()
    {
        return 'Y-m-d H:i:s';
    }

}
