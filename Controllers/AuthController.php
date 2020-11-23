<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class AuthController extends Controller
{
    public function loginAuth(Request $request){
        
        $user = User::where('email', $request->email)->where('password', $request->password)->first();
        
        if($user == null){
            $role = 'Guest';
        }

        else if($user !=null){
            
            if($user->role == 'User'){
                $role = 'User';
            }
            elseif($user->role == 'Manager'){
                $role = 'Manager';
            }
            
            dd($user);
            
            // return redirect()->action('FlowerController@viewAllCategories')->with('role', $role);
            return redirect()->action('HeaderController@categoryHeader')->with('role', $role);

        }
        else{
            return view('/login');
        }
    
    }

    public function registerAuth(Request $request){
        
            $request->validate([
            'name' => 'required|min:5',
            'email' => 'required',
            'password' => 'required|min:8',
            'confirmpassword' => 'required|same:inputPassword',
            'address' => 'required|min:10',
            'dob' => 'required',
            'gender' => 'required'
            ]);

            DB::table('users')->insert([
                'name' => $request->name,
                'password' => $request->password,
                'gender' => $request->gender,
                'email' => $request->email,
                'address' => $request->address,
                'dob' => $request->dob,
                'role' => 'User'
            ]);
         
            return view('/login');
    }
}
