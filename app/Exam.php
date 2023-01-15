<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Exam
 *
 * @property $id
 * @property $teacher_id1
 * @property $teacher_id2
 * @property $teacher_id3
 * @property $center_teacher_student_id
 * @property $b
 * @property $tarik
 * @property $grade
 * @property $jizie_from
 * @property $jizie_to
 * @property $descision
 * @property $note
 *
 * @property CenterTeacherStudent $centerTeacherStudent
 * @property Teacher $teacher
 * @property Teacher $teacher
 * @property Teacher $teacher
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Exam extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['teacher_id1','teacher_id2','teacher_id3','center_teacher_student_id','b','tarik','grade','jizie_from','jizie_to','descision','note'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function centerTeacherStudent()
    {
        return $this->hasOne('App\CenterTeacherStudent', 'id', 'center_teacher_student_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function teacher()
    {
        return $this->hasOne('App\Teacher', 'id', 'teacher_id3');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function teacher()
    {
        return $this->hasOne('App\Teacher', 'id', 'teacher_id1');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function teacher()
    {
        return $this->hasOne('App\Teacher', 'id', 'teacher_id2');
    }
    

}
