<?php

namespace App\Http\Controllers\admin\menu\menuTwo;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;





class myWordController extends Controller
{
              
   public function supper_admin_login_auth_check() {
        session_start();
        $supper_admin_code = Session::get('admin_s_code');
        $supper_admin_role=Session::get('admin_s_role_id');
        
        if ($supper_admin_code == NUll  && $supper_admin_role !='Super-Admin-!@#$-greensoFt') {
            redirect::to('wp-admin/master/login')->send();
        }
       
   }
    
    
    
    
    
    
    
    public function createMyWord(){
        $this->supper_admin_login_auth_check();
        
        
        $createWord = view('admin.content.menu_2.createMyWord');    
        return view('admin.master')
                        ->with('x', $createWord);
    }
      
    
    
    
    
}
