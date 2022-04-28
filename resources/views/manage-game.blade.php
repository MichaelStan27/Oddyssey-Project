@extends('layouts.app')

@section('title', 'Manage game')

@section('content')
    <div class="container mx-auto mb-20 flex flex-col shrink-0 items-center gap-4">
        <a href="/add-game">
            <button class="rounded-md bg-gray-700 text-white font-medium py-2 px-4">
                ADD NEW GAME
            </button>
        </a>

        @forelse ($games as $game)
            <div class="w-full">
                <x-game-card-rect :game="$game"></x-game-card-rect>
            </div>
        @empty
            <h1 class="text-lg text-center">There is no game</h1>
        @endforelse
        <div class="w-full">
            {{ $games->links() }}
        </div>
    </div>

@endsection
