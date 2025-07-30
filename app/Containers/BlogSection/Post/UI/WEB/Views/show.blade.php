@extends('layouts.main', ['title' => $post->title])

@section('content')
    <section class="post">
        <div class="post__content">
            <h1 class="post__title text-2xl font-bold">{{ $post->title  }}</h1>
            <div class="post__img mt-4" style="background-image: url({{ '/storage/' . $post->image_path }})"></div>
            <p class="post__body mt-3"> {!! nl2br($post->body) !!} </p>
        </div>
        <div class="post__line mt-5"></div>
        <div class="post__author mt-5 flex items-center gap-2">
            <i class="bi bi-person-fill posts__list-item-author-icon text-gray-800"></i>
            <div class="posts__list-item-author-name text-sm">{{ $post->user->name }} {{ $post->user->lastname }}</div>
        </div>
    </section>
@endsection
