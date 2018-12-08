<?php namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class AnswerDetail extends Model
{

    /**
     * @var bool
     */
    public $timestamps = false;
    public $incrementing = false;
    /**
     * @var string
     */
    protected $table = 'answer_details';
    /**
     * @var array
     */
    protected $dates = ['answered_at', 'updated_at'];
    /**
     * @var array
     */
    protected $guarded = ['id', 'answer_code', 'favour', 'scale', 'answered_at', 'updated_at'];
    /**
     * @var array
     */
    protected $fillable = ['question', 'answer'];
    /**
     * @var string
     */
    protected $primaryKey = 'id';
    protected $casts = ['id' => 'string', 'answer_code' => 'string', 'question' => 'string', 'answer' => 'string', 'favour' => 'string'];

    /**
     * @return mixed
     */
    public function getRouteKey()
    {
        return $this->{'id'};
    }

    public function question()
    {
        return $this->belongsTo('App\Eloquent\Question', 'question', 'id');
    }

    /**
     * @return string
     */
    public function getDateFormat()
    {
        return 'Y-m-d H:i:s';
    }
}
