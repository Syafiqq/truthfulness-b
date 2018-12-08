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

        $analytics['1']['rendah']['guard']          = ['min' => -0.1, 'max' => 33.3];
        $analytics['1']['rendah']['interval']       = '0 - 33%';
        $analytics['1']['rendah']['class']          = 'Rendah';
        $analytics['1']['rendah']['recommendation'] = 'Tingkat kejujuran <strong>%s</strong> masih kurang, perlu diperbaiki dan ditingkatkan dengan melakukan tindakan yang mendukung.';
        $analytics['1']['rendah']['description']    = ['key' => 'Siswa masih kurang memiliki keterampilan dalam  : ', 'value' => '(1) Menentukan pencapaian target akademik (2) menentukan tujuan akademik secara objektif (3) menentukan metode/strategi pencapaian tujuan akademik (4) mengelola waktu pelaksanaan akademik (5) mencari sumber yang dibutuhkan untuk mendukung pencapaian tujuan akademik (6) melaksaanakan tanggung jawab akademik'];
        $analytics['1']['sedang']['guard']          = ['min' => 33.3, 'max' => 66.6];
        $analytics['1']['sedang']['interval']       = '34 - 66%';
        $analytics['1']['sedang']['class']          = 'Sedang';
        $analytics['1']['sedang']['recommendation'] = 'Tingkat kejujuran <strong>%s</strong> sudah cukup, perlu ditingkatkan dengan melakukan tindakan yang mendukung.';
        $analytics['1']['sedang']['description']    = ['key' => 'Siswa sudah memiliki keterampilan yang cukup dalam : ', 'value' => '(1) Menentukan pencapaian target akademik (2) menentukan tujuan akademik secara objektif (3) menentukan metode/ strategi pencapaian tujuan akademik (4) mengelola waktu pelaksanaan akademik (5) mencari sumber yang dibutuhkan untuk mendukung pencapaian tujuan akademik (6) melaksaanakan tanggung jawab akademik'];
        $analytics['1']['tinggi']['guard']          = ['min' => 66.6, 'max' => 100.1];
        $analytics['1']['tinggi']['interval']       = '67 - 100%';
        $analytics['1']['tinggi']['class']          = 'Tinggi';
        $analytics['1']['tinggi']['recommendation'] = 'Tingkat kejujuran <strong>%s</strong> sudah tinggi, perlu dipertahankan dan ditingkatkan dengan melakukan tindakan yang mendukung.';
        $analytics['1']['tinggi']['description']    = ['key' => 'Siswa sudah memiliki keterampilan yang baik untuk : ', 'value' => '(1) Menentukan pencapaian target akademik (2) menentukan tujuan akademik secara objektif (3) menentukan metode/ strategi pencapaian tujuan akademik (4) mengelola waktu pelaksanaan akademik (5) mencari sumber yang dibutuhkan untuk mendukung pencapaian tujuan akademik (6) melaksaanakan tanggung jawab akademik'];

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
