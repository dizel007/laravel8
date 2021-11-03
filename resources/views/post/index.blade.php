@extends('layouts.main')
@section('content')
<div>
    <div class="btn btn-success mb-3">
    <a href ="{{ route('post.create')}}">Add</a>
    </div>
  
  
  @foreach ($posts as $post)
 <div>
   <a href="{{route('post.show', $post->id)}}">
   {{ $post ->id}}.
   {{ $post->title}}
  </a>
 </div>
  
  @endforeach

</div>
@endsection



 