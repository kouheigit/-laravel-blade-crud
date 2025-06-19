@extends('layouts.app')
@section('content')
　　　<h1>新規投稿</h1>
　　　
　　　<form method="POST" action="{{ route('posts.store') }}">
       @csrf
       <div>
           <label for="title">タイトル:</label>
           <input type="text" name="title" id="title">
       </div>

       <div>
           <label for="body">本文:</label>
           <textarea name="body" id="body"></textarea>
           <button type="submit">投稿する</button>
       </div>
   </form>
@endsection
