<div class="relative inline-block text-left my-4">
    <div>
        <button type="button" class="inline-flex justify-center items-center w-full font-medium text-gray-70"
            id="admin-menu-button">

            Admin

            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
            </svg>
        </button>
    </div>

    <div class="origin-top-right absolute right-0 mt-1 rounded-md shadow-lg bg-white border border-gray-300 hidden"
        id="admin-menu">
        <div class="py-1">
            <a href="{{ route('manage-game') }}">
                <button class="text-gray-700 text-left block px-4 py-2 w-40 hover:bg-gray-200 font-normal text-base">
                    Manage game
                </button>
            </a>
            <a href="">
                <button class="text-gray-700 text-left block px-4 py-2 w-40 hover:bg-gray-200 font-normal text-base">
                    Manage category
                </button>
            </a>
        </div>
    </div>

</div>
