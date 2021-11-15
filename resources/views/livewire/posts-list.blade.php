<div>
    <div class="mt-10 max-w-xl mx-auto">
        @foreach($posts as $post)
            <div class="border-b mb-5 pb-5 border-gray-200">
                <a href="/post/{{ $post->slug }}" class="text-2xl font-bold mb-2">{{ $post->title }}</a>
                <div class="text-gray-600">{{ $post->autor->name }}</div>
                <div class="text-gray-600 text-sm">{{ $post->updated_at->diffForHumans() }}</div>
                <p>{{ Str::limit($post->body, 100) }}</p>
            </div>
        @endforeach
    </div>
</div>
