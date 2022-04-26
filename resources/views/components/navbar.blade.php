<nav class="bg-white flex justify-between px-36 py-5 mb-5 font-medium text-lg">
    <ul class="flex">
        <li><a href="/" class="p-4">Dashboard</a></li>
        <li><a href="" class="p-4">Cart</a></li>
        @auth
            <li><a href="" class="p-4">Admin</a></li>
        @endauth
    </ul>

    <ul class="flex">
        @guest
            <li><a href="/login" class="p-4">Login</a></li>
            <li><a href="/register" class="p-4">Register</a></li>
        @endguest
        @auth
            <li><a href="" class="p-4">{{ Auth::user()->name }}</a></li>
            <li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="font-medium">Logout</button>
                </form>
            </li>
        @endauth
    </ul>
</nav>
