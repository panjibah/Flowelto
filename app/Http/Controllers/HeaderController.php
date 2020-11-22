<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class HeaderController extends Controller
{
    public function categoryHeader(){
        
        $category = Category::all();

        return view('headerGuest')->with('category', $category);
    }
}
