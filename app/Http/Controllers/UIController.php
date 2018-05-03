<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
class UIController extends Controller
{
    public function getHome(){
        // $data = Category::all();
            return view('product');
            // , compact('data')
    }
}
