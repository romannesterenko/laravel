<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;
class PostsController extends Controller
{
    public function index(){
      $articles = DB::table('articles')->get();
      return view('index', compact('articles'));
    }
    public function show_post($id){
      $articles = DB::table('articles')->get();
      $post = DB::table('articles')->find($id);
      return view('show', compact('post', 'articles'));
    }
}
