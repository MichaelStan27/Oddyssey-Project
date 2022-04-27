@extends('layouts.app')

@section('title', 'Home')

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
            @foreach ($hotGames as $game)
                <x-game-card-rect :game="$game"></x-game-card-rect>
            @endforeach
        </div>
    </div>
@endsection
