<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class QuranSession
 *
 * @property $id
 * @property $center_teacher_student_id
 * @property $session_time
 * @property $weekday
 *
 * @property CenterTeacherStudent $centerTeacherStudent
 * @property Revision[] $revisions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class QuranSession extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['center_teacher_student_id','session_time','weekday'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function centerTeacherStudent()
    {
        return $this->hasMany('App\CenterTeacherStudent', 'id', 'center_teacher_student_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function revision()
    {
        return $this->hasOne('App\Revision', 'session_id', 'id');
    }
    

}
