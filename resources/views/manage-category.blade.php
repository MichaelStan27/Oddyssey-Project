@extends('layouts.app')

@section('title', 'Manage Category')

@section('content')
    <div class="container mx-auto mb-20 flex flex-col items-center gap-2">
        <a href="{{ route('add-category') }}" class="my-5">
            <button class="rounded-md bg-gray-700 text-white font-medium py-2 px-4">
                ADD NEW CATEGORY
            </button>
        </a>
        @forelse ($categories as $category)
            <div class="w-full">
                <x-category-card :category="$category">
                    <div>
                        <div class="flex gap-3 text-white">
                            <form action="{{ route('update-category', $category) }}" method="POST">
                                @csrf
                                <button type="submit" class="py-2 px-6 bg-gray-700 rounded-md font-medium">
                                    UPDATE
                                </button>
                            </form>

                            <form action="{{ route('manage-category.delete', $category) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type=" submit" class="py-2 px-6 bg-red-500 rounded-md font-medium">
                                    DELETE
                                </button>
                            </form>
                        </div>
                    </div>
                </x-category-card>
            </div>
        @empty
            <h1 class="text-lg text-center">There is no category</h1>
        @endforelse

        <div class="w-full">
            {{ $categories->links() }}
        </div>
    </div>
    </div>
@endsection
