<?php

namespace App\Http\Controllers\admin\login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;



class adminLogin extends Controller
{
    
    
    
       public function supper_admin_login_auth_check() {
        session_start();
        $supper_admin_code = Session::get('admin_s_code');
        $supper_admin_role=Session::get('admin_s_role_id');
        
 
        if ($supper_admin_code != NUll  && $supper_admin_role =='Super-Admin-!@#$-greensoFt') {
            redirect::to('/wp-admin/supper/master/dashboard')->send();
        }
       
       
 
   }
    
    
    
   
    public function showLoginForm() {
        $this->supper_admin_login_auth_check();
        
        return view('admin.login.login');
    }
    
    

    
        public function checkLogin(Request $request) {
       //   return  $request ->all();

        $this->validate($request, [

            'email' => 'required',
            'password' => 'required'
        ]);

        $My_email = $request->email;
        $My_password = $request->password;
         

        $admin_password = $this->password_check($My_password);

        $admin_info = DB::table('tbl_super_admin')
                ->where('super_admin_email', $My_email)
                ->where('super_admin_password', $admin_password)
                ->first();

         $section_check= $admin_info->super_admin_section;
         $section= $this->checkSection($section_check);
       
//        echo '<pre>';
//        //print_r($admin_info);
//        echo $section;
//        exit();
    
        
        if ($admin_info) {
      
                Session::put('admin_s_code', $admin_info->super_admin_code);
                Session::put('admin_s_username', $admin_info->super_admin_username);
                Session::put('admin_s_role_id', $admin_info->super_admin_role_id);
                Session::put('admin_s_con', $section);
             
                return redirect('/wp-admin/supper/master/dashboard');
           
        } else {
            return redirect('/wp-admin/master/login')->with('exception', 'Invalid');
        }
        
        
        
        
    }///end of checkLogin

    
    
    
    
        protected function password_check($param) {

        $My_password = $param;

        $salted_1 = "a6ds1jm@#2$%yk7fhs.kazd3nhfs4jkdx8fds!^&*)(}rgaV5Y9hwtb2sMHjGwR";
        $salted_2 = "!@ktfjdr-kj#sgcefgfb%j^pjl+&kojk*j(g)hZzFoQXEVYCtIQCD7U28p56QS";
        $admin_pass_salted = $salted_2 . $My_password . $salted_1;
        $hashed_password = hash('whirlpool', $admin_pass_salted);
        $dobul_hashed_password = hash('gost', $hashed_password);


        $iteration = 1000;
        $salt_admin = "d!n#qv%krys^flhb&fj-sweqafzgkdsa+(RoBin+AhMed+CSE)oghx+ijdkm-vlktycq@mv.oKrdf*jgp>sij;vl<dkvp";
        $admin_password = hash_pbkdf2("haval256,5", $dobul_hashed_password, $salt_admin, $iteration, 199);

        return $admin_password;
    }
    
    
    
    protected function checkSection($section) {
        
        
        
          if ($section == 'Content') {
            return $section;
        } elseif ($section == 'Office') {
                return $section;
        } elseif ($section == 'NUll') {
            return redirect::to('/wp-admin/master/login')
                            ->with('exception', 'You ar Not Authorized');
        } else {
            return redirect::to('/wp-admin/master/login')
                            ->with('exception', 'Sory');
        }
        
        
        
    }// end of checkSection
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
