@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="container bg-white mx-auto rounded-lg shadow-md p-6 w-1/4">
        <form action="/login" method="POST">
            <div class="mb-4">
                <label for="email">Email</label>
                <input type="email" name="email" id="email"
                    class="rounded-md w-full p-2 bg-gray-100 border-gray-200 border-2 outline-purple-300">
            </div>
            <div class="mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password"
                    class="rounded-md w-full p-2 bg-gray-100 border-gray-200 border-2 outline-purple-300">
            </div>
            <div class="mb-4">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label>
            </div>
            <div class="flex justify-end gap-4 items-center">
                <a href="{{ route('register') }}" class="underline">Don't have an account?</a>
                <button type="submit"
                    class="bg-purple-700 text-white font-medium px-4 py-2 rounded-lg  tracking-wide">LOGIN</button>
            </div>
        </form>
    </div>
@endsection
