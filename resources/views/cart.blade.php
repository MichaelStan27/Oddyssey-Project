@extends('layouts.app')

@section('title', 'Cart')

@section('content')
    <div class="container mx-auto mb-20">

        @include('partials.searchbar')

        <h1 class="font-bold text-2xl mb-4">Your Cart</h1>
        <div class="bg-white p-2 rounded-lg divide-gray-200 divide-y">
            <div class="mb-5">
                @foreach ($carts as $cart_item)
                    <x-cart-card :game="$cart_item->game"></x-cart-card>
                @endforeach
            </div>

            <div class="flex justify-between items-center p-5">
                <div>
                    <h1 class="font-bold text-lg">Total</h1>
                    <p class="text-gray-500">{{ $carts_count }} {{ Str::plural('game', $carts_count) }}</p>
                </div>
                <div>
                    <h1 class="font-medium text-lg text-gray-600">IDR {{ $carts_total }}</h1>
                </div>
            </div>
        </div>

    </div>
@endsection
