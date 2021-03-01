<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Employee;
use Illuminate\Support\Facades\DB;
use Validator;
//use App\Http\Requests\UserRequest;
use App\Http\Requests\RegisterRequest;


class loginController extends Controller
{
    public function index(Request $req){
        if($req->session()->has('name')){
            return redirect('/home');
            } 
        return view('login.index');
    }
    public function verify(Request $req){



        $userlogin = DB::table('employees')
                            ->where('Password',$req->password)
                            ->where('Email',$req->username)
                            ->get();

       if($req->username==""  || $req->password==""){
        // echo "Null Submission";
        $req->session()->flash('msg', 'Null Submission');
        return redirect('/login');

      }elseif(count($userlogin) > 0){
           
        $req->session()->put('name', $req->username);
        
        
        return redirect('/home'); 
        
       }else{
        $req->session()->flash('msg', 'invalid username and password');
        return redirect('/login');
       }
    }
    
    public function register(){
        return view('registration.register');
    }

    public function successreg(RegisterRequest $requ){
        
        $reg = new Employee ();
        $reg->Name  =  $requ->name;
        $reg->Username  =  $requ->username;
        $reg->Email      =  $requ->email;
        $reg->Password       =  $requ->password;
        $reg->CompanyName     =  $requ->cname;
        //$reg->Quantity   =  $requ->quantity;
        $reg->Country     =  $requ->country;
        $reg->City      =  $requ->city;
        $reg->Phone   =  $requ->phone;

        $reg->save();
        return  redirect('/login');
    }
    

}
