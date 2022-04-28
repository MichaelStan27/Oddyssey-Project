@extends('layouts.app')

@section('title', 'Manage game')

@section('content')
    <div class="container mx-auto mb-20 flex flex-col items-center gap-2">
        <a href="{{ route('add-game') }}" class="my-5">
            <button class="rounded-md bg-gray-700 text-white font-medium py-2 px-4">
                ADD NEW GAME
            </button>
        </a>

        @forelse ($games as $game)
            <div class="w-full">
                <x-game-card-rect :game="$game">
                    <div>
                        <p class="text-right mb-2">{{ $game->price == 0 ? 'FREE' : "IDR {$game->price}" }}</p>
                        <div class="flex gap-3 text-white">
                            <form action="{{ route('update-game', $game) }}" method="POST">
                                @csrf
                                <button type="submit" class="py-2 px-6 bg-gray-700 rounded-md font-medium">
                                    UPDATE
                                </button>
                            </form>

                            <form action="{{ route('manage-game.delete', $game) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type=" submit" class="py-2 px-6 bg-red-500 rounded-md font-medium">
                                    DELETE
                                </button>
                            </form>
                        </div>
                    </div>
                </x-game-card-rect>
            </div>
        @empty
            <h1 class="text-lg text-center">There is no game</h1>
        @endforelse

        <div class="w-full">
            {{ $games->links() }}
        </div>
    </div>

@endsection
