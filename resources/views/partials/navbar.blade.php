<nav class="bg-white flex justify-between px-36 mb-5 font-medium text-lg text-gray-600">
    <ul class="flex">
        <li class="px-4">
            <a href="/" class="px-2 block my-4 font-bold text-xl text-purple-700">Oddyssey</a>
        </li>
        <li class="px-4 {{ Route::is('dashboard') ? 'tab-active' : '' }}">
            <a href="/" class="px-2 block my-4">Dashboard</a>
        </li class="px-4">
        @auth
            <li class="px-4 {{ Route::is('cart') ? 'tab-active' : '' }}">
                <a href="{{ route('cart') }}" class="px-2 block my-4">Cart</a>
            </li>
            @can('admin')
                <li class="px-4">
                    @include('partials.admin-dropdown')
                </li>
            @endcan
        @endauth
    </ul>

    <ul class="flex">

        <li class="px-4">
            @include('partials.user-dropdown')
        </li>
    </ul>
</nav>
