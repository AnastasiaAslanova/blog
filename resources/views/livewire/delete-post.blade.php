<div style="display: inline; margin-bottom: 5px">
    @if(Auth::user() && Auth::user()->is_admin)
    <button wire:click="delete" class="inline-flex items-center bg-red-200 border-0 py-1 px-3 focus:outline-none hover:bg-red-300 rounded text-base mt-4 md:mt-0">Delete Post</button>
    @endif
</div>
