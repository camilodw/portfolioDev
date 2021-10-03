<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
class coursesController extends Controller
{
public function index()
{
   $courses=$this->getAllCourses();
   return view('knowledge.courses',['courses'=>$courses]);
}
private function getAllCourses(){
    $courses=Courses::all();
    return $courses;
}

}
