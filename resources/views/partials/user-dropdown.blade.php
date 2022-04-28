<div class="relative inline-block text-left my-4">
    <div>
        <button type="button" class="inline-flex justify-center items-center w-full font-medium text-gray-70"
            id="user-menu-button">

            @if (Auth::check())
                {{ Auth::user()->name }}
            @else
                {{ 'Guest' }}
            @endif

            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
            </svg>
        </button>
    </div>

    @guest
        <div class="origin-top-right absolute right-0 mt-1 rounded-md shadow-lg bg-white border border-gray-300 hidden"
            id="user-menu">
            <div class="py-1">
                <a href="/login" class="text-gray-700 block px-4 py-2 w-36 hover:bg-gray-200 font-normal text-base">Login</a>
                <a href="/register"
                    class="text-gray-700 block px-4 py-2 w-36 hover:bg-gray-200 font-normal text-base">Register</a>
            </div>
        </div>
    @endguest

    @auth
        <div class="origin-top-right absolute right-0 mt-1 rounded-md shadow-lg bg-white border border-gray-300 hidden"
            id="user-menu">
            <div class="py-1">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit"
                        class="text-gray-700 text-left block px-4 py-2 w-36 hover:bg-gray-200 font-normal text-base">Logout</button>
                </form>
            </div>
        </div>
    @endauth

</div>
