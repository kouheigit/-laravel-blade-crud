@extends('layout.app')

@section('content')
    <h1>投稿一覧</h1>
    @foreach($posts as $post)
        <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
            <h2>{{$posts->title}}</h2>
            <h2>{{$posts->body}}</h2>
    @endforeach
@endsection
