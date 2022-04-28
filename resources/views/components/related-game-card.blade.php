@props(['game' => $game])

<a href="{{ route('game', $game) }}">
    <div class="">
        <img src="{{ asset("/assets/games/{$game->image}/thumb.jpg") }}">
        <p class="text-right">
            {{ $game->price == 0 ? 'FREE' : "IDR {$game->price}" }}
        </p>
    </div>
</a>
