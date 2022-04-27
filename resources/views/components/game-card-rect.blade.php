@props(['game' => $game])

@php
$image = $game['image'];
$title = $game['title'];
$cat = $game->category->name;
$price = $game['price'] == 0 ? 'FREE' : 'IDR ' . $game['price'] * 1000;
@endphp

<a href="{{ route('game', $game) }}" class="block">
    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex items-center justify-between h-full">
        <div class="flex max-w-fit">
            <img src="{{ asset('/assets/games/' . $image . '/thumb.jpg') }}" class="h-24">
            <div class="m-5 self-center">
                <h1 class="font-medium text-xl">{{ $title }}</h1>
                <p class="text-gray-500">{{ $cat }}</p>
            </div>
        </div>
        <p class="text-right mr-4 font-semibold text-lg text-gray-600">{{ $price }}</p>
    </div>
</a>
