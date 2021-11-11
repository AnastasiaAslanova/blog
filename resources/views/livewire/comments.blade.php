<div class="my-8 space-y-10">
        @foreach ($comments as $comment)
        <div class="flex">
            <img class="h-10 w-10 rounded-full" src="https://www.pngitem.com/pimgs/m/421-4212341_default-avatar-svg-hd-png-download.png" alt="avatar">
            <div class="ml-4">
                <div class="flex items-center">
                    <div class="font-semibold">{{ $comment->user ? $comment->user->name :'Guest' }}</div>
                    <div class="text-gray-500 ml-2">{{ $comment->created_at->diffForHumans() }}</div>
                </div>
                <div class="text-gray-700 mt-2">{{ $content = $comment->content }}</div>
            </div>
        </div>
            @endforeach
    </div>
</div>
