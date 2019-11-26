<?php

namespace App\Http\Controllers\frontEnd\administration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class administration extends Controller
{

    public function calender() {
          $crateCalender =view('frontEnd.administration.calender');

        return view('frontEnd.master')
                ->with('mainContent',$crateCalender );
    }
    
     public function job() {
          $crateJob =view('frontEnd.administration.job');

        return view('frontEnd.master')
                ->with('mainContent',$crateJob );
    }
    
    
    
     public function teacher_login() {
          $crateTeacherLogin =view('frontEnd.administration.tc_login');

        return view('frontEnd.master')
                ->with('mainContent',$crateTeacherLogin );
    }
    
        
    
     public function staff_login() {
          $crateStaffLogin =view('frontEnd.administration.staff_login');

        return view('frontEnd.master')
                ->with('mainContent',$crateStaffLogin );
    }
    
    
       public function account_login() {
          $crateAcOfficerLogin =view('frontEnd.administration.account_officer_login');

        return view('frontEnd.master')
                ->with('mainContent',$crateAcOfficerLogin );
    }
    
    
    
    
    
    
    
 /*
  * administration
  */   
}
