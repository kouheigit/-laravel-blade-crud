@extends('layouts.app')

@section('content')
    <h1>投稿一覧</h1>
    @foreach($posts as $post)
        <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
            <h2>{{$post->title}}</h2>
            <h2>{{$post->body}}</h2>
            <a href="{{ route('posts.edit', $post->id) }}">編集</a>
    @endforeach
@endsection
