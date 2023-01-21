<?php

namespace Tests\Unit;
use App\Center;
// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * 
     */
    public function test_teacheRelation(){
        // return $this->belongsToMany(Teacher::class)->withPivot('CenterTeacherStudents', 'center_id');
        $response = $this->get('welcome');
        $response->assertStatus(200);
    }
    
}
