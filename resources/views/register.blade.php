@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="container bg-white mx-auto rounded-lg shadow-md p-6 w-1/4">
        <form action="/register" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name">Name</label>
                <input type="text" name="name" id="name"
                    class="rounded-md w-full p-2 bg-gray-100 border-2 outline-purple-300 @error('name') border-red-500 @enderror"
                    value="{{ old('name') }}">
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email">Email</label>
                <input type="email" name="email" id="email"
                    class="rounded-md w-full p-2 bg-gray-100 border-2 outline-purple-300 @error('email') border-red-500 @enderror"
                    value="{{ old('email') }}">
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password"
                    class="rounded-md w-full p-2 bg-gray-100 border-2 outline-purple-300 @error('password') border-red-500 @enderror">
                @error('password')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="rounded-md w-full p-2 bg-gray-100 border-2 outline-purple-300 @error('password') border-red-500 @enderror">
            </div>
            <div class="flex justify-end gap-4 items-center">
                <a href="{{ route('login') }}" class="underline">Already registered?</a>
                <button type="submit"
                    class="bg-purple-700 text-white font-medium px-4 py-2 rounded-lg tracking-wide">REGISTER</button>
            </div>
        </form>
    </div>
@endsection
