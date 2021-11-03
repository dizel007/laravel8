<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use PhpParser\Node\Stmt\Foreach_;
use App\Models\Tag;
class PostController extends Controller
{
  // public function index()
  // {
  //   $posts = Post::All();
  //     return view('post.index', compact('posts'));
  // }
  
    public function index()
  {
    $post = Post::find(1);
    $tag = Tag::find(1);
    dd($tag->posts)  ;
    // return view('post.index', compact('posts'));
  }
  
  
  public function create()
  {
      return view('post.create');
  }

  public function store()
  {
    $data = request()->validate([
      'title' => 'string',
      'content' => 'string',
      'image' => 'string',
    ]);
    Post::create ($data); // метод заносит массив в базу с заданными ключами 
    return redirect()->route('post.index');
  }

  public function show(Post $post)
  {
   return view('post.show' , compact('post'));
  }

  public function edit(Post $post)
  {
    return view('post.edit', compact('post'));
  }

public function update(Post $post) {
  $data = request()->validate([
    'title' => 'string',
    'content' => 'string',
    'image' => 'string',
  ]);
  
$post->update($data);
return redirect()->route('post.show',$post->id);
  
}

public function destroy(Post $post)
  {
    $post->delete();
   return redirect()->route('post.index');
  }




  public function restore()
  {
    $post = Post::withTrashed()->find(2);
    $post->restore();
    dd($post);
  }
  // firstOrCreate
  //updateOrCreate     
  public function firstOrCreate()
  {
    $anotherPost = [
      'title' => 'some post',
      'content' => 'some content',
      'image' => 'imagebla111.jpg',
      'likes' => 50,
      'is_published' => 1,
    ];
 
    $post = Post::firstOrCreate([
      'title' => 'some_post', // массив ключевых значений
    ],[
      'title' => 'some_post',
      'content' => 'some content',
      'image' => 'imagebla111.jpg',
      'likes' => 50,
      'is_published' => 1,
    ]);

dump($post->content);
    
    dd('finished');
  } 

  public function updateOrCreate()
  {
    $post = Post::updateOrCreate([
      'title' => 'some_post333_update',   // массив ключевых значений
    ],[
      'title' => 'some_post333_update',
      'content' => 'some content66666666666666',
      'image' => 'imagebla111.jpg',
      'likes' => 5770,
      'is_published' => 1,
    ]);

dump($post->content);
    
    dd('updateOrCreate');
  }
}
