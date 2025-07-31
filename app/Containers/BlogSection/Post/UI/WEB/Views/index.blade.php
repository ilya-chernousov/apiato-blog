@extends('layouts.main')

@section('content')
    <section class="posts">
        <div class="posts__content">
            <div class="posts__column">
                <h2 class="posts__title font-semibold text-2xl">Статьи</h2>
                <div class="posts__list mt-5 grid grid-cols-3 gap-4">
                    @foreach($posts as $post)
                        @include('blogSection@post::layouts.post', ['post' => $post])
                    @endforeach
                </div>
            </div>
            <div class="posts__categories">
                <h2 class="posts__categories-title font-semibold text-2xl">Категории</h2>
                <ul class="posts__categories-list mt-5 p-5 bg-slate-200 rounded-lg">
                    @foreach($categories as $category)
                        <li class="posts__categories-list-item mb-1">
                            <a
                                href="{{ route('categories.show', ['id' => $category->id])  }}"
                                class="posts__categories-list-item-link">
                                {{ $category->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection
