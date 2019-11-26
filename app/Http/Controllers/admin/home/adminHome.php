<?php

namespace App\Http\Controllers\admin\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;



class adminHome extends Controller
{
   
            
   public function supper_admin_login_auth_check() {
        session_start();
        $supper_admin_code = Session::get('admin_s_code');
        $supper_admin_role=Session::get('admin_s_role_id');
        
        if ($supper_admin_code == NUll  && $supper_admin_role !='Super-Admin-!@#$-greensoFt') {
            redirect::to('wp-admin/master/login')->send();
        }
       
       
 
   }
    
    
    
    
    
    
    
    public function dashboard(){
        $this->supper_admin_login_auth_check();
        $createProduct = view('admin.home.homeContent');    
        return view('admin.master')
                        ->with('x', $createProduct);
    }
       
    
    
    
    public function logout(){
          Session::put('admin_s_code', NULL);
         Session::put('admin_s_username', NULL);
         Session::put('admin_s_role_id', NULL);
        

        return redirect('/wp-admin/master/login')->with('exception','You are Logout successfully');
   
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    }//adminHome
    
    
 
