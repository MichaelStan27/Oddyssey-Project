@extends('layouts.app')

@section('title', 'Add Category')

@section('content')
    <div class="container mx-auto mb-20">
        <div class="m-auto w-1/2 bg-white rounded-md p-5">
            <h1 class="text-center text-lg font-semibold mb-3">Add Category</h1>
            <form action="{{ route('manage-category.create') }}" method="post">
                @csrf
                <div class="mb-5">
                    <input type="text" name="category" id="category" placeholder="Add Category"
                        class="rounded-md w-full p-2 bg-gray-100 border-2 outline-purple-300 @error('category') border-red-500 @enderror">
                    @error('category')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit"
                    class="rounded-md bg-slate-800 text-white text-sm px-5 py-2 font-semibold hover:bg-slate-900">
                    ADD CATEGORY
                </button>
            </form>
        </div>
    </div>
@endsection
