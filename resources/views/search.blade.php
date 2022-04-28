@extends('layouts.app')

@section('title', 'Search')

@section('content')
    <div class="container mx-auto flex flex-col mb-10">
        @include('partials.searchbar')

        <div class="grid grid-cols-5 gap-8 mb-10">
            @forelse ($results as $game)
                <x-game-card-square :game="$game"></x-game-card-square>
            @empty
                <h1 class="col-start-3 text-center text-2xl text-gray-500 font-semibold mt-2">
                    Games not found.</h1>
            @endforelse
        </div>

        {{ $results->links() }}
    </div>
@endsection
