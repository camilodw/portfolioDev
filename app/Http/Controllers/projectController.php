<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;
class projectController extends Controller
{
    public function index(){
    $projects = Projects::getAllProjects();
    return view('projects.projects', ['projects' => $projects]);    
    }

}
