<div>
    <div class="max-w-4xl mx-auto py-20 prose lg:prose-xl">
        <h1 style="display: inline">{{ $post->title }}</h1> @livewire('delete-post',['post' => $post])
        <p>{!! $post->body !!}</p>
    </div>
    <hr>
    <livewire:comments-section :post="$post" />
</div>

