<?php

namespace App\Http\Controllers\frontEnd\about_us;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class aboutUs extends Controller
{
      
    public function welcome_note() {
         
        $crateWelcome=view('frontEnd.about_us.welcome');

        return view('frontEnd.master')
                ->with('mainContent',$crateWelcome);
        
        
    }
    
    
    
    public function history() {
      $crateHistory=view('frontEnd.about_us.history');

        return view('frontEnd.master')
                ->with('mainContent',$crateHistory);
        
    }

    public function glance() {
        $crateGlance=view('frontEnd.about_us.glance');

        return view('frontEnd.master')
                ->with('mainContent',$crateGlance);
    }
    
    public function principal_word() {
        $cratePrincipal=view('frontEnd.about_us.principal');

        return view('frontEnd.master')
                ->with('mainContent',$cratePrincipal);
    }
    
    public function facilities() {
         $crateFacilities=view('frontEnd.about_us.facilities');

        return view('frontEnd.master')
                ->with('mainContent',$crateFacilities);
    }

   public function achievement() {
        $crateAchievement=view('frontEnd.about_us.achievement');

        return view('frontEnd.master')
                ->with('mainContent',$crateAchievement);
    }

      public function governing_body() {
        $crateGoverning=view('frontEnd.about_us.governing');

        return view('frontEnd.master')
                ->with('mainContent',$crateGoverning);
    }




    /*aboutUs*/
}
