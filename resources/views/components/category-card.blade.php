@props(['category' => $category])

@php
$name = $category->name;
@endphp

<div class="bg-white rounded-lg shadow-lg overflow-hidden flex items-center justify-between h-full">
    <div class="flex max-w-fit">
        <div class="m-5 self-center">
            <h1 class="font-medium text-xl">{{ $name }}</h1>
        </div>
    </div>
    <div class="mr-4 font-semibold text-gray-600">
        {{ $slot }}
    </div>
</div>
