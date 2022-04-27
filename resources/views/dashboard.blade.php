@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container mx-auto mb-20">

        @include('partials.searchbar')

        <h1 class="font-bold text-2xl mb-4">Featured Games</h1>
        <div class="container flex gap-5 mb-8">
            @for ($i = 0; $i < 5; $i++)
                <x-game-card-square :game="$games[$i]"></x-game-card-square>
            @endfor
        </div>

        <h1 class="font-bold text-2xl mb-4">Hot Games</h1>
        <div class="container flex flex-col gap-4">
            @for ($i = 0; $i < 8; $i++)
                <x-game-card-rect :game="$games[$i]"></x-game-card-rect>
            @endfor
        </div>
    </div>
@endsection
