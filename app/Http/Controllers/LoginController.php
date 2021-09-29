<?php

namespace App\Http\Controllers;
use App\Models\LoginModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;

class LoginController extends Controller
{
    //
    public function userLogin(Request $req){
        $data = $req->input();
        $validatedData = $req->validate([
            'username' => ['required','min:5'],
            'password' => ['required','min:8']
      
        ]);
        
        //return $req->input();

        if(Auth::attempt($validatedData)){
            $req->session()->put('cacheUser',$data['username']);
            $req->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->with('loginError','The provided credentials do not match our records.');

                
    }

    public function userRegister(Request $request)
    {
        $data = $request->input();
        $validatedData = $request->validate([
            'FullName' => ['required'],
            'Email' => ['required','email:dns','unique:users,email'],
            'Username' => ['required','min:5','unique:users,username'],
            'Password' => ['required','min:8'],
            'RPassword' => ['required','min:8'],
        ]);

        //return $request->input();
        $User = new LoginModel;
        $User -> name = $request->FullName;
        $User -> email = $request->Email;
        $User -> username = $request->Username;
        $User -> user_pass = $request->Password;
        $User -> password = bcrypt($request->Password);
        $User -> user_level = "staff";
        $User -> user_admin = "N";
        $User -> user_finger = "0";
        
        $User -> save();

        //AuthModel::create($req->all());
        $request->session()->flash('success','Registration Successfull, Please Login');
        return redirect('/');
        
    // The blog post is valid...


    }

    function espCekUser(Request $req){
        $data = $req->input();
        $namanya =  $data['Username'];

        $countUser = DB::table('users')->where('username', $namanya)->count();
        if($countUser>0){
            echo "NO";
        }
          //echo $countUser;
    }

    
    function espCekEmail(Request $req){
        $data = $req->input();
        $emailnya =  $data['reg_email'];

        $countEmail = DB::table('users')->where('email', $emailnya)->count();
        if($countEmail>0){
            echo "NO";
        }
        //  echo $count;
    }

    public function userLogout(Request $req){
        Auth::logout();

        $req->session()->invalidate();
    
        $req->session()->regenerateToken();
    
        return redirect('/');
    }
}
