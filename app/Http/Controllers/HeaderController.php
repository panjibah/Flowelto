<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Carbon\Carbon;


class HeaderController extends Controller
{
    public function categoryHeader(){
        
        $role = session('role');
        if(!$role){
            $role = 'Guest';
        }
        $category = Category::all();
        $date = Carbon::now();

        return view('/header')->with('category', $category)->with('date', $date)->with('role',$role);
    }
}
