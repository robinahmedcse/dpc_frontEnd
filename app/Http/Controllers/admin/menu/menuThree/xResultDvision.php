<?php

namespace App\Http\Controllers\admin\menu\menuThree;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;




class xResultDvision extends Controller
{
           public function supper_admin_login_auth_check() {
        session_start();
        $supper_admin_code = Session::get('admin_s_code');
        $supper_admin_role=Session::get('admin_s_role_id');
        
        if ($supper_admin_code == NUll  && $supper_admin_role !='Super-Admin-!@#$-greensoFt') {
            redirect::to('wp-admin/master/login')->send();
        }
       
   }
   
      public function createXResult(){
        $this->supper_admin_login_auth_check();
        
        
        $createWord = view('admin.content.menu_3.xResukt.createResult');    
        return view('admin.master')
                        ->with('x', $createWord);
    }
   
   
   
   
   
   
   
}
