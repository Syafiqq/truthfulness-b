<?php
/**
 * This <konseling-003-backend> project created by :
 * Name         : syafiq
 * Date / Time  : 19 September 2018, 5:03 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    /**
     * @var bool
     */
    public $timestamps = false;
    public $incrementing = false;
    /**
     * @var string
     */
    protected $table = 'coupons';
    /**
     * @var array
     */
    protected $dates = ['created_at'];
    /**
     * @var array
     */
    protected $guarded = ['id', 'usage', 'assignee', 'created_at'];
    /**
     * @var array
     */
    protected $fillable = ['coupon'];
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    protected $casts = ['id' => 'string', 'assignee' => 'string'];

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
        return $this->belongsTo('\App\Eloquent\User', 'assignee', 'id');
    }

    public function getHumanReadableUsage()
    {
        if (empty($this->{'usage'}))
        {
            return null;
        }
        else
        {
            switch ($this->{'usage'})
            {
                case 'counselor':
                    return 'Konselor';
                case 'student':
                    return 'Siswa';
            }
        }
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
