@props(['game'])

@php
$image = $game->image;
$title = $game->title;
$desc = $game->short_description;
$price = $game->price;
@endphp

<a href="{{ route('game', $game) }}">
    <div class="bg-white rounded-xl overflow-hidden relative h-full">
        <img src="{{ asset("/assets/games/{$image}/thumb.jpg") }}" class="mb-4">
        <div class="w-full my-4 px-4">
            <h1 class="font-medium text-lg mb-2">{{ $title }}</h1>
            <p class="text-gray-500 mb-14">{{ $desc }}</p>
            <p class="text-right text-lg text-gray-700 font-semibold absolute right-4 bottom-2">
                {{ $price }}</p>
        </div>
    </div>
</a>
