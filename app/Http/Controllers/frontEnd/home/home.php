<?php

namespace App\Http\Controllers\frontEnd\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class home extends Controller
{
    
    
    public function index() {
         
        $crateHome=view('frontEnd.home.home');

        return view('frontEnd.master')
                ->with('mainContent',$crateHome);
        
        
    }
    
    
    
       public function result() {
        $createResult=view('frontEnd.home.result');
        return view('frontEnd.master')
                ->with('mainContent',$createResult);
    }

    
    
    
    
    public function event() {
        $createEvent=view('frontEnd.home.event');
        return view('frontEnd.master')
                ->with('mainContent',$createEvent);
    }

    
    public function notice() {
        $createNotice=view('frontEnd.home.notice');
        return view('frontEnd.master')
                ->with('mainContent',$createNotice);
    }
    
    
    public function gallery () {
        $createGallery=view('frontEnd.home.gallery');
        return view('frontEnd.master')
                ->with('mainContent',$createGallery);
    }
   
    
    
    
    
        public function contact_us() {
        $createContact=view('frontEnd.home.contact');
        return view('frontEnd.master')
                ->with('mainContent',$createContact);
    }
    
    
    
    
    
 /*home*/   
}
