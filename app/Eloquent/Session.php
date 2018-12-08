<?php
/**
 * This <konseling-003-backend> project created by :
 * Name         : syafiq
 * Date / Time  : 15 November 2018, 4:59 AM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

namespace App\Eloquent;


use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    /**
     * @var bool
     */
    public $timestamps = false;
    public $incrementing = false;
    /**
     * @var string
     */
    protected $table = 'sessions';
    /**
     * @var array
     */
    protected $dates = [''];
    /**
     * @var array
     */
    protected $guarded = ['id', 'issuer'];
    /**
     * @var array
     */
    protected $fillable = ['session'];
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    protected $casts = ['id' => 'string'];

    /**
     * @return mixed
     */
    public function getRouteKey()
    {
        return $this->{'id'};
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users()
    {
        return $this->belongsTo('\App\Eloquent\User', 'issuer', 'id');
    }

    /**
     * @return string
     */
    public function getDateFormat()
    {
        return 'Y-m-d H:i:s';
    }
}

?>
