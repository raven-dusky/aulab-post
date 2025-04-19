<x-layout>
    <div class="show">
        <div class="show-container">
            <img class="show-image" src="{{ Storage::url($article->image) }}" />
            <div class="show-details">
                <span>{{ $article->title }}</span>
                <span>{{ $article->subtitle }}</span>
                <span><a href="{{ route('article.byCategory', $article->category) }}">{{ $article->category->name }}</a>(category)</span>
                <span>{{ $article->body }}</span>
                <span>Author: <a href="{{ route('article.byUser', $article->user) }}">{{ $article->user->name }}</a></span>
                <span>{{ $article->created_at->format('d/m/Y') }} (created)</span>
                <span>{{ $article->updated_at->format('d/m/Y') }} (updated)</span>
            </div>
        </div>
    </div>
</x-layout>
