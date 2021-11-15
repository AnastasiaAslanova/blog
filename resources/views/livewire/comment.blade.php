<div class="flex">
        <img class="h-10 w-10 rounded-full" src="https://www.pngitem.com/pimgs/m/421-4212341_default-avatar-svg-hd-png-download.png" alt="avatar">
        <div class="ml-4">
            <div class="flex items-center">
                <div class="font-semibold">{{ $comment->user ? $comment->user->name :'Guest' }}</div>
                <div class="text-gray-500 ml-2">{{ $comment->created_at->diffForHumans() }}</div>
            </div>
            <div class="text-gray-700 mt-2">{{ $content = $comment->content }}</div>
        </div>
        @livewire('delete-comment', ['comment' => $comment])
{{--        <div style="display: inline; margin-bottom: 5px">--}}
{{--            <button wire:click="delete" class="inline-flex items-center bg-red-200 border-0 py-1 px-3 focus:outline-none hover:bg-red-300 rounded text-base mt-4 md:mt-0">Delete Comment</button>--}}
{{--        </div>--}}
</div>

