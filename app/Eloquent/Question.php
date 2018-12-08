<?php namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * @var bool
     */
    public $timestamps = true;
    public $incrementing = false;
    /**
     * @var string
     */
    protected $table = 'questions';
    /**
     * @var array
     */
    protected $dates = [];
    /**
     * @var array
     */
    protected $guarded = ['id', 'active', 'created_at', 'update_at'];
    /**
     * @var array
     */
    protected $fillable = ['question', 'category', 'favour'];
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    protected $casts = ['id' => 'string', 'category' => 'string', 'favour' => 'string'];

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
