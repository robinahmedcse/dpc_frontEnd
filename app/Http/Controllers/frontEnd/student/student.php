<?php

namespace App\Http\Controllers\frontEnd\student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class student extends Controller
{
   public function stu_info() {
          $crate =view('frontEnd.student.stu_info ');

        return view('frontEnd.master')
                ->with('mainContent',$crate );
    }
    
   
     public function class_routine() {
          $crate =view('frontEnd.student.class_routine');

        return view('frontEnd.master')
                ->with('mainContent',$crate );
    }
     public function syllabus() {
          $crate =view('frontEnd.student.syllabus');

        return view('frontEnd.master')
                ->with('mainContent',$crate );
    }
    
      public function dress_code() {
          $crate =view('frontEnd.student.dress_code');

        return view('frontEnd.master')
                ->with('mainContent',$crate );
    }
   
    
    
    
/*student*/
    
}
