<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){

        $rproducts = Product::inRandomOrder()->take(3)->get();
        $xproducts = Product::inRandomOrder()->take(3)->get();
        return view('index', compact('rproducts','xproducts'));



    }







}
