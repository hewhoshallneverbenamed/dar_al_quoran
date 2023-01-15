<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 *
 * @property $id
 * @property $user_id
 * @property $is_ring
 * @property $first_name
 * @property $middle_name
 * @property $last_name
 * @property $mother_name
 * @property $gender
 * @property $nationality
 * @property $birth_date
 * @property $martial_status
 * @property $school_uni
 * @property $current_job
 * @property $mobile_number
 * @property $work_number
 * @property $home_number
 * @property $sheiks_name
 * @property $address
 * @property $level
 * @property $suitable_times_days
 * @property $female_question
 * @property $has_ijaza
 * @property $father_number
 * @property $mother_number
 * @property $skills
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Student extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','is_ring','first_name','middle_name','last_name','mother_name','gender','nationality','birth_date','martial_status','school_uni','current_job','mobile_number','work_number','home_number','sheiks_name','address','level','suitable_times_days','female_question','has_ijaza','father_number','mother_number','skills'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\
     */
    // public function ()
    // {
    //     return $this->('App\CenterTeacherStudent', 'student_id', 'id');
    // }
        

}
