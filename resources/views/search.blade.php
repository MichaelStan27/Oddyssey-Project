@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container mx-auto flex flex-col mb-10">
        @include('partials.searchbar')

        <div class="grid grid-cols-5 gap-8 mb-10">
            @foreach ($results as $game)
                <x-game-card-square :game="$game"></x-game-card-square>
            @endforeach
        </div>

        {{ $results->links() }}
    </div>
@endsection
