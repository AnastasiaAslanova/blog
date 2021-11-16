<div>
    <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
        <a href="{{route('addUser')}}" class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0 mr-1">Add User</a>
    </div>
    <div class="mt-10 max-w-xl mx-auto">
        @foreach($users as $user)
            <div class="border-b mb-5 pb-5 border-gray-200">
                <a class="text-2xl font-bold mb-2">{{ $user->email }}</a>
                <div class="text-gray-600">{{ $user->name }}</div>
                <div class="text-gray-600 text-sm">{{ $user->created_at->diffForHumans() }}</div>
            </div>
        @endforeach
    </div>
</div>
