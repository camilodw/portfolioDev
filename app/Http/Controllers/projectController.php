<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;
class projectController extends Controller
{
    public function index(){
    $projects=$this->getAllProjects();
    return view('projects.projects',['projects'=>$projects]);    
    }

    private function getAllProjects(){
     $projects=Projects::paginate(4);
     return $projects;
    }

    public function getTwoProjects(){
        $projects=Projects::limit(2)->get();
        return $projects;
    }

}
