<x-layout>
    <div class="auth-container">
        <form class="auth-form" method="POST" action="{{ route('article.store') }}" enctype="multipart/form-data">
            @csrf
            <label class="auth-label" for="title">Title</label>
            <input class="auth-input" type="text" id="title" name="title" value="{{ old('title') }}" required/>
            <label class="auth-label" for="subtitle">Subtitle</label>
            <input class="auth-input" type="text" id="subtitle" name="subtitle" value="{{ old('subtitle') }}" required/>
            <label class="auth-label" for="category">Category</label>
            <select class="auth-input" name="category" id="category">
                <option selected disabled>Select category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <label class="auth-label" for="image">Image</label>
            <input class="auth-input" type="file" name="image" required/>
            <label class="auth-label" for="description">Description</label>
            <textarea class="auth-input textarea" id="description" name="body" value="{{ old('body') }}" required></textarea>
            <button class="auth-btn" type="submit">Create</button>
        </form>
    </div>
</x-layout>
