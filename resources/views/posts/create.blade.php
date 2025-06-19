@extends('layouts.app')
@section('content')
　　　<h1>新規投稿</h1>
   @if($errors->any())
       <div style="color: red; margin-bottom: 1em;">
           <ul>
               @foreach($errors->all() as $error)
                   <li>{{ $error }}</li>
               @endforeach
           </ul>
       </div>
   @endif

　　　<form method="POST" action="{{ route('posts.store') }}">
       @csrf
       <div>
           <label for="title">タイトル:</label>
           @error('title')
           <div style="color:red">{{ $message }}</div>
           @enderror
           <input type="text" name="title" id="title" value="{{old('title')}}">
       </div>

       <div>
           <label for="body">本文:</label>
           <textarea name="body" id="body"></textarea>
           <button type="submit">投稿する</button>
       </div>
   </form>
@endsection
