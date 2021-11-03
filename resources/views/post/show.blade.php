@extends('layouts.main')
@section('content')
<div>
 <div>
   {{ $post ->id}}. Заголовок
   {{ $post->title}}
 </div>
 <div>
  
  Статья {{ $post->content}}
</div>   
</div>  

<div class="btn btn-success mb-3">
<a href="{{ route('post.edit', $post->id)}}">EDIT</a>
</div>  

<div>
  <form action="{{route('post.delete', $post->id)}}" method="post">
  @csrf
  @method('delete')
<input class="btn btn-danger mb-3" type="submit" value="Delete">
</form>
  </div> 

<div>
  <a href="{{ route('post.index')}}">Back</a>
</div>

@endsection



 