<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\coursesController;
use App\Models\Projects;
use App\Models\Courses;
class homeController extends Controller
{
  public function index(){
  $courses = Courses::getTwoCourses();
  $projects = Projects::getTwoProjects();
  return view('home.home', ['projects' => $projects, 'courses' => $courses]);
}

}
