<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(){
      $peoples = [
        'Лена', 'Никита', 'Диана'
      ];
    	return view('pages.about', compact('peoples'));
    }
    public function contacts(){
    	return view('pages.contacts');
    }
}
