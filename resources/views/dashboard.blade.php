@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container mx-auto">
        <h1 class="font-bold text-2xl mb-4">Featured Games</h1>
        <div class="container flex gap-5 mb-8">
            <div class="bg-white rounded-lg w-1/5 p-4">Game</div>
            <div class="bg-white rounded-lg w-1/5 p-4">Game</div>
            <div class="bg-white rounded-lg w-1/5 p-4">Game</div>
            <div class="bg-white rounded-lg w-1/5 p-4">Game</div>
            <div class="bg-white rounded-lg w-1/5 p-4">Game</div>
        </div>

        <h1 class="font-bold text-2xl mb-4">Hot Games</h1>
        <div class="container flex flex-col gap-4">
            <div class="bg-white rounded-md p-5 shadow-sm">
                Test
            </div>
        </div>
    @endsection
