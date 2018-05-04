<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Food;
class UIController extends Controller
{
    public function getHome(){  
        return view('home');
    }

    public function getProduct($id){
        $food = Food::find($id);
        
        
        return view('product', compact('food'));
    }
}
