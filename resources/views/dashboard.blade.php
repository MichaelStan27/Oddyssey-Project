@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container mx-auto mb-20">

        @include('partials.searchbar')

        <h1 class="font-bold text-2xl mb-4">Featured Games</h1>
        <div class="container flex gap-5 mb-8">
            @foreach ($featuredGames as $game)
                <x-game-card-square :game="$game"></x-game-card-square>
            @endforeach
        </div>

        <h1 class="font-bold text-2xl mb-4">Hot Games</h1>
        <div class="container flex flex-col gap-4">
            @forelse ($hotGames as $game)
                <a href="{{ route('game', $game) }}" class="block">
                    <x-game-card-rect :game="$game">
                        <p class="text-lg">
                            {{ $game->price_str }}
                        </p>
                    </x-game-card-rect>
                </a>
            @empty
                <h1 class="text-gray-500">There is no transaction currently</h1>
            @endforelse
        </div>
    </div>
@endsection
