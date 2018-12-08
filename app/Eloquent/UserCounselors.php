<?php namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class UserCounselors extends Model
{
    /**
     * @var bool
     */
    public $timestamps = false;
    public $incrementing = false;
    /**
     * @var string
     */
    protected $table = 'user_counselors';
    /**
     * @var array
     */
    protected $dates = [];
    /**
     * @var array
     */
    protected $guarded = ['id', 'user'];
    /**
     * @var array
     */
    protected $fillable = ['school', 'school_head', 'school_head_credential'];
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

    /**
     * @return string
     */
    public function getDateFormat()
    {
        return 'Y-m-d H:i:s';
    }
}
