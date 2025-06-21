@extends('layouts.app')

@section('content')
    <h1>投稿編集</h1>
    <form method="POST" action="{{ route('posts.update',$post->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label>
                <input type="text" name="title"id="title" value="{{ old('title',$post->title) }}">
                @error('title')
                <div style="color:red">{{ $message }}</div>
                @enderror
            </label>
        </div>

        <div>
            <label for="body">"本文":</label>
            <textarea name="body" id="body">{{ old('body',$post->body) }}</textarea>
        </div>
        <button type="submit">更新する</button>
    </form>
@endsection

