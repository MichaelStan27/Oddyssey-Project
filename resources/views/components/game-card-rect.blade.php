@props(['game' => $game])

@php
$image = $game->image;
$title = $game->title;
$cat = $game->category->name;
@endphp

<div class="bg-white rounded-lg shadow-lg overflow-hidden flex items-center justify-between h-full">
    <div class="flex max-w-fit">
        <img src="{{ asset("/assets/games/{$image}/thumb.jpg") }}" class="h-24">
        <div class="m-5 self-center">
            <a href="{{ route('game', $game) }}" class="font-medium text-xl">{{ $title }}</a>
            <p class="text-gray-500">{{ $cat }}</p>
        </div>
    </div>
    <div class="mr-4 font-semibold text-gray-600">
        {{ $slot }}
    </div>
</div>
