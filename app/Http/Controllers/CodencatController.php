<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class CodencatController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function graphicsDesign(){
        return view('graphics');
    }
    public function development(){
        return view('development');
    }
    public function portfolio(){
        $portfolio = Portfolio::all();
        return view('portfolio', ['portfolio' => $portfolio]);
        // return view('portfolio');
    }
    public function project(){
        return view('project');
    }
    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('contact');
    }
}
