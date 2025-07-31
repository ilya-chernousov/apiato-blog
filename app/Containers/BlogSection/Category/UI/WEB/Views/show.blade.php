@extends('layouts.main', ['pageTitle' => "Категория: {$category->name}"])

@section('content')
    <section class="category">
        <h1 class="category__title text-2xl font-bold">Категория: {{ $category->name }}</h1>
        <div class="category__posts mt-5 grid grid-cols-4 gap-4">
            @foreach($category->posts as $post)
                @include('blogSection@post::layouts.post', ['post' => $post])
            @endforeach
        </div>
    </section>
@endsection
