@extends('layouts.app')
@section('title', $post['title'])
@section('content')
    @if ($post['is_new'])
        <div>A new blog post!using if</div>
    @else
        <div>Blog post is old! using elseif/if</div>
    @endif
    {{-- 條件為flase才執行  --}}
    @unless ($post['is_new'])
        <div>
            It is an old post... using unless
        </div>
    @endunless

    <h1>{{ $post['title'] }}</h1>
    <p>{{ $post['content'] }}</p>
    {{-- 判斷是否存在  --}}
    @isset($post['has_comments'])
        <div>The post has some comments... using isset</div>
    @endisset
@endsection
