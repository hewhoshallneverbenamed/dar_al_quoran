<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Center
 *
 * @property $id
 * @property $name
 * @property $location
 *
 * @property CenterTeacherStudent[] $centerTeacherStudents
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Center extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','location'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function centerTeacherStudents()
    {
        return $this->hasMany('App\CenterTeacherStudent', 'center_id', 'id');
    }
    

}
