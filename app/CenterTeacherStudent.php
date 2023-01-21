<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CenterTeacherStudent
 *
 * @property $id
 * @property $teacher_id
 * @property $center_id
 * @property $student_id
 * @property $start_date
 * @property $mobile_number
 * @property $created_at
 * @property $updated_at
 *
 * @property Center $center
 * @property Exam[] $exams
 * @property QuranSession[] $quranSessions
 * @property Student $student
 * @property Teacher $teacher
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CenterTeacherStudent extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['teacher_id','center_id','student_id','start_date','mobile_number'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function center()
    {
        return $this->hasOne('App\Center', 'id', 'center_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function exams()
    {
        return $this->hasMany('App\Exam', 'center_teacher_student_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quranSessions()
    {
        return $this->hasMany('App\QuranSession', 'center_teacher_student_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function student()
    {
        return $this->hasOne('App\Student', 'id', 'student_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function teacher()
    {
        return $this->hasOne('App\Teacher', 'id', 'teacher_id');
    }
    

}
