<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $link
 * @property string $name
 */
class Courses extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['link', 'name'];

    public static function getAllCourses(){
        $courses = Courses::paginate(2);
        return $courses;
    }
    
    public static function getTwoCourses(){
        $courses = Courses::limit(2)->get();
        return $courses; 
    }
}
