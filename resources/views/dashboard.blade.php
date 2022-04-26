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
                @php
                    $image = $games[$i]['image'];
                    $title = $games[$i]['title'];
                    $cat = $games[$i]->category->name;
                    $price = $games[$i]['price'] == 0 ? 'FREE' : 'IDR ' . $games[$i]['price'] * 1000;
                @endphp
                <div class="bg-white rounded-lg shadow-lg overflow-hidden flex items-center justify-between">
                    <div class="flex w-[30%]">
                        <img src="{{ asset('/assets/games/' . $image . '/thumb.jpg') }}" class="w-1/2">
                        <div class="m-5 self-center">
                            <h1 class="font-medium text-xl">{{ $title }}</h1>
                            <p class="text-gray-500">{{ $cat }}</p>
                        </div>
                    </div>
                    <p class="text-right mr-4 font-semibold text-lg text-gray-600">{{ $price }}</p>
                </div>
            @endfor
        </div>
    </div>

@endsection
