<div>
    <div class="max-w-4xl mx-auto py-20 prose lg:prose-xl">
        <h1>{{ $post->title }}</h1>
        <p>{!! $post->body !!}</p>
    </div>
    <div class="max-w-4xl mx-auto py-20 prose lg:prose-xl">
        @livewire('comment-create',['post' => $post])
    </div>
    <div class="max-w-4xl mx-auto py-20 prose lg:prose-xl">
        @livewire('comments', ['comments' => $post->comments])
    </div>
</div>
