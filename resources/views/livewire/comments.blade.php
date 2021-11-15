<div class="my-8 space-y-10">
        @foreach ($post->comments as $comment)
            @livewire('comment', ['comment' => $comment])
        @endforeach
    </div>
