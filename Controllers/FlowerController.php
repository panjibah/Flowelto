<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flower;
use App\Category;
use App\User;

class FlowerController extends Controller
{
    public function viewAllCategories(){

        $role = session('role');
        if(!$role){
            $role = 'Guest';
        }
        
        $category = Category::all();

        return view('home')->with('category', $category)->with('role',$role);
    }

    public function viewCategories($category_id){
        

        if($category_id == 1){
            $result = Flower::where('categories_id', 1)->paginate(8);
            $title = Category::where('id', 1)->first();
        }
        else if($category_id == 2){
            $result = Flower::where('categories_id', 2)->paginate(8);
            $title = Category::where('id', 2)->first();  
        }
        else if($category_id == 3){
            $result = Flower::where('categories_id', 3)->paginate(8);
            $title = Category::where('id', 3)->first();
        }


        return view('viewCategories')->with('result', $result)->with('title', $title);
    }

    
    public function detailFlowers($flower_id){

        $detail = Flower::where('id', $flower_id)->first();
        
        return view('flowerDetail')->with('detail', $detail);
    }
}
