<?php

namespace App\Http\Controllers\Api;

use App\Models\Food;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComidaController extends Controller
{
    public function llevar(Request $request)
    {
        
        $request->validate([
            'category'=> 'required',
            'name'=> 'required',
            'description'=> 'required',
             'status'=> 'required',
             'price'=> 'required',
             'img1'=> 'required',
            ]);
    
        $food = new food();
        $food->category = $request->category;
        $food->name = $request->name;
        $food->description = $request->description;
        $food->price = $request->price;
        $food->img1 = $request->img1;
        $food->save();


        return response()->json([
            "message" => "Metodo llevar si jalo"]);
    }
}
