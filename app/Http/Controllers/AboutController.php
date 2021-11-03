<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use PhpParser\Node\Stmt\Foreach_;

class AboutController extends Controller
{
  public function index()
  {
    $posts = Post::All();
    
    return view('about', compact('posts'));
  
  }

}
