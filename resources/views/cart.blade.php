@extends('layouts.app')

@section('title', 'Cart')

@section('content')
    <div class="container mx-auto mb-20">

        <h1 class="font-bold text-2xl mb-4">Your Cart</h1>
        <div class="bg-white p-2 rounded-lg divide-gray-200 divide-y">
            <div class="mb-5">
                @forelse ($carts as $cartItem)
                    <x-cart-card :game="$cartItem" :cartId="$cartItem->id"></x-cart-card>
                @empty
                    <h1 class="text-xl text-gray-600 m-6">Cart is empty</h1>
                @endforelse
            </div>

            <div class="flex justify-between items-center p-5">
                <div>
                    <h1 class="font-bold text-lg">Total</h1>
                    <p class="text-gray-500">{{ $cartsCount }} {{ Str::plural('game', $cartsCount) }}</p>
                </div>
                <div>
                    <h1 class="font-medium text-lg text-gray-600">IDR {{ $cartsTotal }}</h1>
                </div>
            </div>
        </div>

    </div>
@endsection
