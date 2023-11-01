<?php

namespace App\Http\Controllers;
use App\Models\food;


use Illuminate\Http\Request;

class PublicFoodController extends Controller
{
    public function productList()
    {
        //return view('foods.index');
        return view('/catalogoBD.menu_BD')
        ->with('productos',Food::where('status','1')->get());
    }

}

