<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\coursesController;
class homeController extends Controller
{
  public function index(){
  $coursesClass= new coursesController();
  $projectClass=new projectController();
  $courses=$coursesClass->getTwoCourses();
  $projects=$projectClass->getTwoProjects();
  return view('home.home',['projects'=>$projects,'courses'=>$courses]);
}

}
