<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $link
 */
class Projects extends Model
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
    protected $fillable = ['name', 'description', 'link'];
    
    public static function getAllProjects()
    {
        $projects = Projects::paginate(4);
        return $projects;
    }
   
    public static function getTwoProjects(){
        $projects = Projects::limit(2)->get();
        return $projects;
    }

}
