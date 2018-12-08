<?php namespace App\Eloquent;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Model implements AuthenticatableContract, AuthorizableContract, JWTSubject
{
    use Authenticatable;

    const roles = ['student', 'counselor'];
    /**
     * @var bool
     */
    public $timestamps = true;
    public $incrementing = false;
    /**
     * @var string
     */
    protected $table = 'users';
    /**
     * @var array
     */
    protected $dates = [];
    /**
     * @var array
     */
    protected $guarded = ['id', 'credential', 'role', 'password', 'remember_token', 'created_at', 'updated_at'];
    /**
     * @var array
     */
    protected $fillable = ['name', 'gender', 'avatar'];
    /**
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
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
     * @return null|string
     */
    public function getGenderTranslation()
    {
        switch ($this->{'gender'})
        {
            case 'male' :
                $translatedGender = 'Laki - Laki';
            break;
            case 'female' :
                $translatedGender = 'Wanita';
            break;
            default :
                $translatedGender = null;
            break;
        }

        return $translatedGender;
    }

    public function coupon()
    {
        return $this->hasMany('App\Eloquent\Coupon', 'assignee', 'id');
    }

    public function counselor()
    {
        return $this->hasOne('App\Eloquent\UserCounselors', 'user', 'id');
    }

    public function student()
    {
        return $this->hasOne('App\Eloquent\UserStudents', 'user', 'id');
    }

    /**
     * @return bool
     */
    public function isDetailReportValid()
    {
        return $this->answer()->whereNotNull('finished_at')->count() > 0;
    }

    public function answer()
    {
        return $this->hasMany('App\Eloquent\Answer', 'user', 'id');
    }

    public function session()
    {
        return $this->hasMany('App\Eloquent\Session', 'issuer', 'id');
    }

    public function hasOpenedCourse()
    {
        $answer = $this->{'answer'}->where('finished_at', null)->count();

        if ($answer > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->{'password'};
    }

    /**
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken()
    {
        return $this->{$this->getRememberTokenName()};
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return 'remember_token';
    }

    /**
     * Set the token value for the "remember me" session.
     *
     * @param  string $value
     * @return void
     */
    public function setRememberToken($value)
    {
        $this->{$this->getRememberTokenName()} = $value;
    }

    /**
     * @return User
     * @throws \Exception
     */
    public function generateRecoveryCode()
    {

        $this->{'lost_password'} = Uuid::uuid4()->toString();

        return $this;
    }

    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return 'id';
    }

    /**
     * @return string
     */
    public function getDateFormat()
    {
        return 'Y-m-d H:i:s';
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function GetAnswerDetail(int $question)
    {
        return $this->{'answer'}->where('finished_at', null)->first()->answer_detail()->where('order', $question)->first();
    }

    public function getUnfinishedQuestion()
    {
        $questions = $this->{'answer'}->where('finished_at', null)->first()->answer_detail()->pluck('answer');
        $qArr      = [];
        foreach ($questions as $k => &$v)
        {
            if (is_null($v))
            {
                array_push($qArr, $k + 1);
            }
        }

        return $qArr;
    }

    /**
     * Determine if the entity has a given ability.
     *
     * @param  string $ability
     * @param  array|mixed $arguments
     * @return bool
     */
    public function can($ability, $arguments = [])
    {
        return true;
    }
}
