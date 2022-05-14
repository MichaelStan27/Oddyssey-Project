@extends('layouts.app')

@section('title', $game->title)

@section('content')
    <div class="container mx-auto mb-20 w-[65%]">
        <div class="mt-10 mb-3 flex gap-3">
            <div class="w-[35%] bg-white shadow-md">
                <img src="{{ asset("/assets/games/{$game->image}/thumb.jpg") }}">
                <div class="m-5">
                    <h1 class="text-lg font-semibold">{{ $game->title }}</h1>
                    <p class="text-sm">{{ $game->long_description }}</p>
                    <p class="text-lg font-semibold mt-5 mb-1">{{ $game->price_str }}</p>
                    <form action="{{ route('cart') }}" method="post">
                        @csrf
                        <input type="hidden" name="gameId" value="{{ $game->id }}">
                        <button type="submit"
                            class="rounded-md bg-gray-700 text-white text-sm py-2 px-4 font-semibold hover:bg-gray-800">
                            ADD TO CART
                        </button>
                    </form>
                </div>
            </div>
            <div class="w-[65%] relative shadow-md">
                <button id="carousel-prev-btn"
                    class="absolute left-5 bottom-1/2 translate-y-1/2 bg-white rounded-md p-3 select-none font-bold">
                    {{ '<-' }}
                </button>
                <button id="carousel-next-btn"
                    class="absolute right-5 bottom-1/2 translate-y-1/2 bg-white rounded-md p-3 select-none font-bold">
                    {{ '->' }}
                </button>
                <img data-carousel="true" src="{{ asset("/assets/games/{$game->image}/img_1.jpg") }}"
                    class="h-full w-full object-cover absolute inset-0 -z-10 transition-opacity duration-1000">
                @for ($i = 2; $i <= $game->img_count; $i++)
                    <img data-carousel="true" src="{{ asset("/assets/games/{$game->image}/img_{$i}.jpg") }}"
                        class="h-full w-full object-cover absolute inset-0 -z-10 transition-opacity duration-1000 opacity-0">
                @endfor
            </div>
        </div>
        <div class="m-auto rounded-md flex justify-around bg-white mb-2 shadow-md">
            <div class="p-2">
                <p class="text-sm text-gray-500">Genre</p>
                <h1 class="font-semibold text-lg">{{ $game->category->name }}</h1>
            </div>
            <div class="p-2">
                <p class="text-sm text-gray-500">Released Date</p>
                <h1 class="font-semibold text-lg">{{ $game->release_date }}</h1>
            </div>
            <div class="p-2">
                <p class="text-sm text-gray-500">All Reviews</p>
                @forelse ($reviews_count as $type => $review)
                    <h1 class="font-semibold text-lg">
                        {{ $review->count() }}
                        {{ $type === 1 ? 'Recommended' : 'Not Recommended' }}
                    </h1>
                @empty
                    <h1 class="font-semibold text-lg">0 Review</h1>
                @endforelse
            </div>
        </div>

        <h1 class="text-gray-600 text-lg w-3/4">More Like This</h1>
        <div class="flex gap-3 mb-5">
            @forelse ($related_games as $item)
                <x-related-game-card :game="$item"></x-related-game-card>
            @empty
                <p class="text-xl font-semibold text-gray-500 mt-3">No Related Games Available</p>
            @endforelse
        </div>


        @auth
            <div class="bg-white p-5 rounded-md mb-5 shadow-md">
                <h1 class="text-xl font-bold mb-3">Leave a Review!</h1>
                <form action="{{ route('review', $game) }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <input type="radio" name="recommend" id="recommended" value="positive">
                        <label for="recommended" class="mr-5">Recommended</label>
                        <input type="radio" name="recommend" id="not_recommended" value="negative">
                        <label for="not_recommended">Not Recommended</label>
                    </div>
                    @error('recommend')
                        <p class="text-red-500 text-sm mb-3">{{ $message }}</p>
                    @enderror

                    <textarea name="review" id="review" rows="10"
                        class="border-gray-200 rounded-md border-2 w-full p-2 outline-none focus:border-purple-300 mb-3"></textarea>
                    @error('review')
                        <p class="text-red-500 text-sm mb-2">{{ $message }}</p>
                    @enderror

                    <button type="submit"
                        class="rounded-md bg-gray-700 text-white text-sm px-5 py-2 font-semibold hover:bg-gray-800">POST</button>
                </form>
            </div>
        @endauth

        <h1 class="text-gray-600 text-lg w-3/4 mb-2">Users Reviews</h1>
        @forelse ($reviews as $item)
            <div class="bg-white w-full rounded-md p-3 mb-3 relative shadow-md">
                <h1 class="font-semibold">{{ $item->user->name }}</h1>
                <p class="absolute top-2 right-3 text-sm text-gray-500">
                    {{ $item->created_at }}</p>
                <p class="text-gray-500 text-sm my-2">
                    {{ $item->review_type }}
                </p>
                <p>{{ $item->review }}</p>
            </div>
        @empty
            <h1 class="text-gray-500">This game has no review</h1>
        @endforelse
    </div>
@endsection
