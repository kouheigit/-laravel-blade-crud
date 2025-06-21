@extends('layouts.app')

@section('content')
    <h1>投稿一覧</h1>
    @foreach($posts as $post)
        <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
            <h2>{{$post->title}}</h2>
            <h2>{{$post->body}}</h2>
            <a href="{{ route('posts.edit', $post->id) }}">編集</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('本当に削除しますか？')">削除</button>
            </form>
        </div>
    @endforeach
@endsection
