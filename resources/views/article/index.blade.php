<x-layout>
    <div class="articles-container">
        @foreach($articles as $article)
        <div class="article-box">
            <img class="article-image" src="{{ Storage::url($article['image']) }}" />
            <span class="article-title">{{ $article->title }}</span>
            <span class="article-subtitle">{{ $article->subtitle }}</span>
            <button class="article-btn" type="button"><a href="{{ route('article.show', $article) }}">Read More</a></button>
        </div>
        @endforeach
    </div>
</x-layout>
