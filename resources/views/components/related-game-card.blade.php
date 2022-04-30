@props(['game'])

<a href="{{ route('game', $game) }}">
    <div>
        <img class="shadow-md" src="{{ asset("/assets/games/{$game->image}/thumb.jpg") }}">
        <p class="text-right">
            {{ $game->price == 0 ? 'FREE' : "IDR {$game->price}" }}
        </p>
    </div>
</a>
