@props(['game' => $game, 'cartId' => $cartId])

@php
$image = $game->image;
$title = $game->title;
$cat = $game->category->name;
$price = $game->price == 0 ? 'FREE' : "IDR {$game->price}";
@endphp

<div class="flex items-center justify-between h-full mb-2">
    <div class="flex max-w-fit">
        <img src="{{ asset("/assets/games/{$image}/thumb.jpg") }}" class="rounded-lg h-24">
        <div class="m-5 self-center">
            <a href="{{ route('game', $game) }}" class="font-medium text-xl">{{ $title }} </a>
            <p class="text-gray-500">{{ $cat }}</p>
        </div>
    </div>
    <div class="text-right mr-4">
        <p class="font-semibold text-lg text-gray-600 mb-1">{{ $price }}</p>
        <form action="{{ route('cart') }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="hidden" name="cartId" value="{{ $cartId }}">
            <button type="submit" class="rounded-md text-white font-medium bg-red-500 py-2 px-4">REMOVE</button>
        </form>
    </div>
</div>
