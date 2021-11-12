@extends('layouts.app')

@section('content')

    <div class="container mx-auto p-5">
        <h1 class="text-4xl mt-32 text-center tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
            Welcome to The Blog
        </h1>
        @auth
        <div class="lg:w-1/6 mx-auto" style="cursor: pointer">
            <a href="{{route('createPost')}}" class="inline-flex items-center bg-blue-200 border-0 py-1 px-3 focus:outline-none hover:bg-blue-300 rounded text-base mt-4 md:mt-0" type="submit">Create post</a>
            @endauth
        </div>
        @livewire('posts-list', ['posts' => \App\Models\Post::all()])
    </div>
@endsection

