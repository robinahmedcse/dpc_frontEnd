<?php

namespace App\Http\Controllers\admin\login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;



class adminReg extends Controller
{
  
    
       public function showRegForm() {
        return view('admin.login.regContent');
    }
    
    
    
           public function checkReg(Request $request) {
              //  return $request->all();
               
                    $this->validate($request, [
            'admin_f_name' => 'required',
            'admin_l_name' => 'required',
            'admin_username' => 'required',
            'admin_phone' => 'required',
            'admin_email' => 'required',
            'admin_password' => 'required',
            'my_publication_status' => 'required'
                        
        ]);
                    
                    $check=$request->my_publication_status;
                    
                    if ($check == 1) {
            $my_section_role = 'Content';
        } elseif ($check == 2) {
            $my_section_role = 'Office';
        } elseif ($check == 'NUll') {
            return redirect::to('/wp-admin/master/login')
                            ->with('exception', 'Please Select Status');
        } else {
            $my_section_role = 'fake';
        }


        $param=$request->admin_password;
              $password_encry =$this->password_check($param);
               
         $randomString =  $this->generateRandomString();
              
              
        $data=array();
        $data['super_admin_f_name'] = $request->admin_f_name;
        $data['super_admin_l_name'] = $request->admin_l_name;
        $data['super_admin_username'] = $request->admin_username;
        $data['super_admin_email']=$request->admin_email;
        $data['super_admin_password']=$password_encry;
        $data['super_admin_phone']=$request->admin_phone;
        $data['super_admin_photo']='Nai';
        $data['super_admin_code']=$randomString;
        $data['super_admin_role_id']='Super-Admin-!@#$-greensoFt';
        $data['super_admin_section']=$my_section_role;
              
        
         DB::table('tbl_super_admin')->insert($data);
         
         return redirect::to('/wp-admin/master/login')->with('exception', 'Please Login');
              
            //  echo $password_encry;
              
               
    }
    
    
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
    
    
    
      protected function generateRandomString($length = 8) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

    
    
    
    
    
    
    
}
//adminReg end 