@extends('layouts.main')

@section('content')
    <section class="posts">
        <div class="posts__content">
            <div class="posts__column">
                <h2 class="posts__title font-semibold text-2xl">Статьи</h2>
                <div class="posts__list mt-5 grid grid-cols-3 gap-4">
                    <div class="posts__list-item p-4 w-full border rounded-xl border-slate-400 hover:shadow-lg">
                        <a href="#" class="posts__list-item-link">
                            <div class="posts__list-item-image-block">
                                <img src="demo/post-pic.png" alt="" class="posts__list-item-image w-full">
                            </div>
                            <h3 class="posts__list-item-title mt-2 text-lg font-medium">Заголовок</h3>
                            <p class="posts__list-item-body mt-1">Текст</p>
                            <div class="posts__list-item-author mt-1 flex items-center gap-2">
                                <i class="bi bi-person-fill posts__list-item-author-icon text-gray-800"></i>
                                <div class="posts__list-item-author-name text-sm">Автор</div>
                            </div>
                        </a>
                    </div>
                    <div class="posts__list-item p-4 w-full border rounded-xl border-slate-400 hover:shadow-lg">
                        <a href="#" class="posts__list-item-link">
                            <div class="posts__list-item-image-block">
                                <img src="demo/post-pic.png" alt="" class="posts__list-item-image w-full">
                            </div>
                            <h3 class="posts__list-item-title mt-2 text-lg font-medium">Заголовок</h3>
                            <p class="posts__list-item-body mt-1">Текст</p>
                            <div class="posts__list-item-author mt-1 flex items-center gap-2">
                                <i class="bi bi-person-fill posts__list-item-author-icon text-gray-800"></i>
                                <div class="posts__list-item-author-name text-sm">Автор</div>
                            </div>
                        </a>
                    </div>
                    <div class="posts__list-item p-4 w-full border rounded-xl border-slate-400 hover:shadow-lg">
                        <a href="#" class="posts__list-item-link">
                            <div class="posts__list-item-image-block">
                                <img src="demo/post-pic.png" alt="" class="posts__list-item-image w-full">
                            </div>
                            <h3 class="posts__list-item-title mt-2 text-lg font-medium">Заголовок</h3>
                            <p class="posts__list-item-body mt-1">Текст</p>
                            <div class="posts__list-item-author mt-1 flex items-center gap-2">
                                <i class="bi bi-person-fill posts__list-item-author-icon text-gray-800"></i>
                                <div class="posts__list-item-author-name text-sm">Автор</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="posts__categories">
                <h2 class="posts__categories-title font-semibold text-2xl">Категории</h2>
                <ul class="posts__categories-list mt-5 p-5 bg-slate-200 rounded-lg">
                    @foreach($categories as $category)
                        <li class="posts__categories-list-item mb-1">
                            <a href="#" class="posts__categories-list-item-link">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection
