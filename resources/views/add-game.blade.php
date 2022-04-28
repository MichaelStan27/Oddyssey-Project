@extends('layouts.app')

@section('title', 'Add Game')

@section('content')
    <div class="container mx-auto mb-20">
        <div class="m-auto w-1/2 bg-white rounded-md p-5">
            <h1 class="text-center text-lg font-semibold mb-3">Add Game</h1>
            <form action="" method="post">
                @csrf
                <input type="text" name="title" id="title" placeholder="Title"
                    class="rounded-md w-full p-2 bg-gray-100 border-2 mb-5 outline-purple-300 @error('title') border-red-500 @enderror">
                @error('title')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

                <input type="text" name="category" id="category" placeholder="Category"
                    class="rounded-md w-full p-2 bg-gray-100 border-2 mb-5 outline-purple-300 @error('category') border-red-500 @enderror">
                @error('category')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror

                <div class="flex mb-5">
                    <label for="price"
                        class="flex justify-center bg-slate-300 items-center rounded-sm text-sm text-gray-700 w-1/12">IDR</label>
                    <input type="text" name="price" id="price" placeholder="Price"
                        class="rounded-sm w-full p-2 bg-gray-100 border-2 outline-purple-300 @error('price') border-red-500 @enderror">
                    @error('price')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="thumbnail" class="text-gray-700">Thumbnail</label>
                    <input type="file" name="thumbnail" id="thumbnail"
                        class="rounded-md w-full p-2 bg-gray-100 border-2 outline-purple-300 text-gray-700 @error('thumbnail') border-red-500 @enderror">
                    @error('thumbnail')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="slider" class="text-gray-700">Slider</label>
                    <input type="file" name="slider" id="slider" multiple="multiple"
                        class="rounded-md w-full p-2 bg-gray-100 border-2 outline-purple-300 text-gray-700 @error('slider') border-red-500 @enderror">
                    @error('slider')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-2">
                    <label for="desc" class="text-gray-700">Description</label>
                    <textarea name="desc" id="desc" rows="8" class="border-black border-2 w-full"></textarea>
                    @error('desc')
                        <p class="text-red-500 text-sm mb-2">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="rounded-md bg-slate-800 text-white text-sm px-5 py-2 font-semibold hover:bg-slate-900">ADD
                    GAME</button>
            </form>
        </div>
    </div>
@endsection