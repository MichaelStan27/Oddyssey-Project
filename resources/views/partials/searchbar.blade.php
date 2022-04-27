<form action="{{ route('search') }}" method="GET">
    <div class="w-full flex justify-center gap-3 mb-10">
        <input type="text" name="q" autocomplete="off"
            class="rounded-md w-4/5 p-2 bg-gray-100 border-2 border-gray-300 hover:border-purple-300 outline-none focus:border-purple-300"
            placeholder="Search">
        <button type="submit"
            class="tracking-wider px-5 font-semibold bg-purple-700 rounded-lg text-white text-sm">SEARCH</button>
    </div>
</form>
