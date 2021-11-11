@extends('layouts.app')

@section('content')
<div class="w-full max-w-xs mx-auto my-40">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                {{ __('E-Mail Address') }}
            </label>
            <input class="shadow appearance-none border @error('email') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                {{ __('Password') }}
            </label>
            <input class="shadow appearance-none border @error('password') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" placeholder="******************">
            @error('password')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                {{ __('Login') }}
            </button>
{{--            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="#">--}}
{{--                Forgot Password?--}}
{{--            </a>--}}
        </div>
    </form>
    <p class="text-center text-gray-500 text-xs">
        &copy;2020 Acme Corp. All rights reserved.
    </p>
</div>
@endsection
