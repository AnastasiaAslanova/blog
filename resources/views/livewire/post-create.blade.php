<div>
    <div class="container mx-auto px-4">
        <h1 class="text-4xl mt-6 tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">Create Post</h1>
        <p class="text-lg mt-2 text-gray-600">Start crafting your new post below.</p>
        <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
            @if($savePostSuccess)
                <div class="rounded-md bg-green-100 rounded-lg p-4">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-green-800">
                                {{ $savePostSuccess }}
                            </p>
                        </div>
                        <div class="ml-auto pl-3">
                            <div class="-mx-1.5 -my-1.5">
                                <button wire:click="$set('savePostSuccess', false)" type="button"
                                        class=" inline-flex rounded-md p-1.5 text-green-500 hover:bg-green-100
                            transition ease-in-out duration-150"
                                        aria-label="Dismiss">
                                    <svg class="h-5 w-5" viewPort="0 0 15 15" fill="currentColor"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <polygon id="Combined-Shape" points="10 8.58578644 2.92893219 1.51471863 1.51471863 2.92893219 8.58578644 10 1.51471863 17.0710678 2.92893219 18.4852814 10 11.4142136 17.0710678 18.4852814 18.4852814 17.0710678 11.4142136 10 18.4852814 2.92893219 17.0710678 1.51471863 10 8.58578644"></polygon>
                                    </svg>

                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="sm:col-span-6">
                <label for="title" class="block text-sm font-medium text-gray-700">
                    Post Title
                </label>
                <div class="mt-1">
                    <input id="title" wire:model="post.title" name="title" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                </div>
            </div>
            <div class="sm:col-span-6 pt-5">
                <label for="body" class="block text-sm font-medium text-gray-700">Body</label>
                <div class="mt-1">
                    <textarea id="body" rows="3" wire:model="post.body" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                </div>
                <p class="mt-2 text-sm text-gray-500">Add the body for your post.</p>
            </div>
            <div wire:click="savePost" class="inline-flex justify-center px-4 py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out bg-indigo-500 border border-transparent rounded-md hover:bg-indigo-600 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 cursor-pointer">Submit Post</div>
        </div>
    </div>
</div>
