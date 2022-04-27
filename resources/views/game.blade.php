@php
$game->load('category', 'reviews');
$game->reviews->load('user');

$id = $game['id'];
$image = $game['image'];
$title = $game['title'];
$desc = $game['description'];
$price = $game['price'] == 0 ? 'FREE' : 'IDR ' . $game['price'] * 1000;
$date = date('d M, Y', strtotime($game['created_at']));

$category = $game->category->name;

$reviews = $game->reviews->groupBy('recommend')->map->count();

$relatedGames = $game->category
    ->games()
    ->limit(3)
    ->whereNotIn('id', [$id])
    ->get();

$currReviews = $game
    ->reviews()
    ->limit(3)
    ->get();

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
                    {{ $review }}
                    {{ $key === 1 ? 'Recommended' : 'Not Recommended' }}
                </h1>
            @empty
                <h1 class="font-semibold text-lg">{{ '0 Review' }}</h1>
            @endforelse
        </div>
    </div>

    <div class="m-auto flex w-3/4">
        <h1 class="text-gray-600 text-lg w-3/4">More Like This</h1>
    </div>

    <div class="m-auto flex w-3/4 gap-3 mb-5">
        @foreach ($relatedGames as $item)
            <div class="">
                <img src="{{ asset('/assets/games/' . $item->image . '/thumb.jpg') }}">
                <p class="text-right">
                    {{ $item->price == 0 ? 'FREE' : 'IDR ' . $item->price * 1000 }}
                </p>
            </div>
        @endforeach

    </div>

    @auth
        <div class="m-auto w-3/4 bg-white p-5 rounded-md mb-5">
            <h1 class="text-xl font-bold mb-3">Leave a Review!</h1>
            <form action="{{ route('review', $game) }}" method="post">
                @csrf
                <div class="mb-1">
                    <input type="radio" name="recommend" id="recommended" value="positive">
                    <label for="recommended" class="mr-5">Recommended</label>
                    <input type="radio" name="recommend" id="not_recommended" value="negative">
                    <label for="not_recommended">Not Recommended</label>
                </div>
                @error('recommend')
                    <p class="text-red-500 text-sm mb-3">{{ $message }}</p>
                @enderror
                <textarea name="review" id="review" rows="10" class="border-black border-2 w-full"></textarea>
                @error('review')
                    <p class="text-red-500 text-sm mb-2">{{ $message }}</p>
                @enderror
                <button type="submit"
                    class="rounded-md bg-slate-800 text-white text-sm px-5 py-2 font-semibold hover:bg-slate-900">POST</button>
            </form>
        </div>
    @endauth

    <div class="m-auto w-3/4 mb-3">
        <h1 class="text-gray-600 text-lg w-3/4 mb-2">Users Reviews</h1>
        <div class="flex justify-start w-full gap-3">
            @foreach ($currReviews as $review)
                <div class="bg-white w-1/3 rounded-md p-3">
                    <h1 class="font-semibold">{{ $review->user->name }}</h1>
                    <p class="text-gray-500 text-sm my-2">
                        {{ $review->recommend == 1 ? 'Recommended' : 'Not Recommended' }}
                    </p>
                    <p>{{ Str::limit($review->review, 100, $end = '...') }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
