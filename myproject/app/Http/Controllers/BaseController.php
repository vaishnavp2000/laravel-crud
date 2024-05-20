<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function base(){
      return view('base2');  
    }
    public function home(){
        return view('home');  
      }
      public function about(){
        return view('about');  
      }
      public function contact(){
        return view('contact');  
      }
}
