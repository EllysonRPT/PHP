<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $produtos = Produto::take(5)->get();
        return view("home",compact("produtos"));
    }
}
