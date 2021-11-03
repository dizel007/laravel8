<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use PhpParser\Node\Stmt\Foreach_;

class ContactController extends Controller
{
  public function index()
  {
    $posts = Post::All();
    
    return view('contacts', compact('posts'));
  
  }

}
