<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Teacher
 *
 * @property $id
 * @property $user_id
 * @property $first_name
 * @property $middle_name
 * @property $last_name
 * @property $mobile_number
 *
 * @property CenterTeacherStudent[] $centerTeacherStudents
 * @property Exam[] $exams
 * @property Exam[] $exams
 * @property Exam[] $exams
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Teacher extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','first_name','middle_name','last_name','mobile_number'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function centerTeacherStudents()
    {
        return $this->hasMany('App\CenterTeacherStudent', 'teacher_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
    

}
?>