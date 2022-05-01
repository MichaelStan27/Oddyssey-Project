<div class="w-full bg-gray-100 border-2 border-gray-300 rounded-md py-2 mt-1 divide-y absolute z-10">
    @foreach ($results as $item)
        <x-livesearch-entry-card :game="$item"></x-livesearch-entry-card>
    @endforeach
</div>
