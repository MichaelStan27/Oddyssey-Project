@php
$game->load('category', 'reviews');

$image = $game['image'];
$title = $game['title'];
$desc = $game['description'];
$price = $game['price'] == 0 ? 'FREE' : 'IDR ' . $game['price'] * 1000;
$date = date('d M, Y', strtotime($game['created_at']));

$category = $game->category->name;

$reviews = $game->reviews->groupBy('recommend')->map->count();

@endphp

@extends('layouts.app')

@section('title', $title)

@section('content')
    <div class="m-auto mb-3 flex justify-between w-3/4">
        <div class="w-[21rem]">
            <div class="bg-white w-full h-full relative">
                <img src="{{ asset('/assets/games/' . $image . '/thumb.jpg') }}">
                <h1 class="text-lg font-semibold m-2">{{ $title }}</h1>
                <p class="text-sm m-2">{{ Str::limit($desc, 200, $end = '...') }}</p>
                <p class="text-lg font-semibold mb-1 m-2 absolute bottom-10">{{ $price }}</p>
                <form action="" method="post" class=" m-2 absolute bottom-0">
                    @csrf
                    <button type="submit"
                        class="rounded-md bg-slate-800 text-white text-sm p-2 font-semibold hover:bg-slate-900">ADD TO
                        CART</button>
                </form>
            </div>
        </div>
        <img src="{{ asset('/assets/games/' . $image . '/img_1.jpg') }}" class="w-[44rem]">
    </div>
    <div class="m-auto rounded-md flex justify-around w-3/4 bg-white mb-2">
        <div class="p-2">
            <p class="text-sm text-gray-500">Genre</p>
            <h1 class="font-semibold text-lg">{{ $category }}</h1>
        </div>
        <div class="p-2">
            <p class="text-sm text-gray-500">Released Date</p>
            <h1 class="font-semibold text-lg">{{ $date }}</h1>
        </div>
        <div class="p-2">
            <p class="text-sm text-gray-500">All Reviews</p>
            @forelse ($reviews as $key => $review)
                <h1 class="font-semibold text-lg">
                    {{ $key == 1 ? $review . ' Recommended' : $review . ' Not Recommended' }}</h1>
            @empty
                <h1 class="font-semibold text-lg">{{ '0 Review' }}</h1>
            @endforelse
        </div>
    </div>

    <div class="m-auto flex w-3/4">
        <h1 class="text-gray-600 text-lg w-3/4">More Like This</h1>
    </div>

    <div class="m-auto flex w-3/4 gap-3 mb-5">
        <div class="">
            <img src="{{ asset('/assets/games/Cyberpunk 2077/thumb.jpg') }}">
            <p class="text-right">IDR 329.000</p>
        </div>
        <div class="">
            <img src="{{ asset('/assets/games/God of War/thumb.jpg') }}">
            <p class="text-right">IDR 559.000</p>
        </div>
        <div class="">
            <img src="{{ asset('/assets/games/For Honor/thumb.jpg') }}">
            <p class="text-right">IDR 418.000</p>
        </div>
    </div>

    <div class="m-auto w-3/4 bg-white p-5 rounded-md mb-5">
        <h1 class="text-xl font-bold mb-3">Leave a Review!</h1>
        <form action="" method="post">
            @csrf
            <div class="mb-3">
                <input type="checkbox" name="recommended" id="recommended">
                <label for="recommended" class="mr-5">Recommended</label>
                <input type="checkbox" name="not_recommended" id="not_recommended">
                <label for="not_recommended">Not Recommended</label>
            </div>
            <textarea name="review" id="review" rows="10" class="border-black border-2 w-full mb-2"></textarea>
            <button type="submit"
                class="rounded-md bg-slate-800 text-white text-sm px-5 py-2 font-semibold hover:bg-slate-900">POST</button>
        </form>
    </div>

    <div class="m-auto w-3/4 mb-3">
        <div class="flex justify-start w-full gap-3">
            <div class="bg-white w-1/3 rounded-md p-3">
                <h1 class="font-semibold">Abenbyy</h1>
                <p class="text-gray-500 text-sm my-2">Recommended</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, alias.</p>
            </div>
            <div class="bg-white w-1/3 rounded-md p-3">
                <h1 class="font-semibold">Daniel</h1>
                <p class="text-gray-500 text-sm my-2">Not Recommended</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit, quas ea a cumque accusantium aliquam.
                </p>
            </div>
        </div>
    </div>
@endsection
