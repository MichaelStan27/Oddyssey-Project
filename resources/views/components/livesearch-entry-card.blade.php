@props(['game'])

<a href="{{ route('game', $game) }}" class="block">
    <div class="flex py-2 px-2 gap-4 hover:bg-gray-200">
        <div class="h-12 w-24 bg-gray-300 rounded-md overflow-hidden relative">
            <img src="{{ asset("assets/games/{$game->image}/thumb.jpg") }}"
                class="h-full w-full object-cover absolute inset-0">
        </div>
        <div>
            <p>{{ $game->title }}</p>
            <p class="text-sm text-gray-500">{{ $game->category->name }}</p>
        </div>
    </div>
</a>
