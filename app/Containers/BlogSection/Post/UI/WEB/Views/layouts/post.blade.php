<div class="posts__list-item p-4 w-full border rounded-xl border-slate-400 hover:shadow-lg">
    <a href="{{ route('posts.show', ['id' => $post->id])  }}" class="posts__list-item-link">
        <div class="posts__list-item-image-block">
            <img src="{{ $post->getFirstMediaUrl('posts')  }}" alt="" class="posts__list-item-image w-full">
        </div>
        <h3 class="posts__list-item-title mt-2 text-lg font-medium">{{ $post->title }}</h3>
        <p class="posts__list-item-body mt-1">{{ strip_tags($post->body) }}</p>
        <div class="posts__list-item-author mt-1 flex items-center gap-2">
            <i class="bi bi-person-fill posts__list-item-author-icon text-gray-800"></i>
            <div class="posts__list-item-author-name text-sm">{{ $post->user->name }} {{ $post->user->lastname }}</div>
        </div>
    </a>
</div>
