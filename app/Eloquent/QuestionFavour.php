<?php namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class QuestionFavour extends Model
{
    /**
     * @var bool
     */
    public $timestamps = false;
    public $incrementing = false;
    /**
     * @var string
     */
    protected $table = 'question_favours';
    /**
     * @var array
     */
    protected $dates = [];
    /**
     * @var array
     */
    protected $guarded = ['id'];
    /**
     * @var array
     */
    protected $fillable = ['name', 'description'];
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
     * @return string
     */
    public function getDateFormat()
    {
        return 'Y-m-d H:i:s';
    }
}
