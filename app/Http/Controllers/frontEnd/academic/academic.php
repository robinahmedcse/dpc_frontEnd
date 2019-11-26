<?php

namespace App\Http\Controllers\frontEnd\academic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class academic extends Controller
{
 public function tc_info() {
          $crate =view('frontEnd.academic.tc_info');

        return view('frontEnd.master')
                ->with('mainContent',$crate );
    }
   
            
        
 public function staff_info() {
          $crate =view('frontEnd.academic.staff_info');

        return view('frontEnd.master')
                ->with('mainContent',$crate );
    }
    
     public function rules_info() {
          $crate =view('frontEnd.academic.rules_info');

        return view('frontEnd.master')
                ->with('mainContent',$crate );
    }
   
    
     
     public function committee_info() {
          $crate =view('frontEnd.academic.committee');

        return view('frontEnd.master')
                ->with('mainContent',$crate );
    }
       
            
            
            
            
            
  /*
academic
   *    */          
}
