<header class="bg-blue-600 p-4 text-white">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-xl font-bold">AIRLINE</h1>
        <nav>
            <ul class="hidden md:flex space-x-4">
                <li><a href="/" class="hover:underline">Home</a></li>
                <li><a href="{{ route('planeHome') }}" class="hover:underline">Planes</a></li>
                <li><a href="{{ route('flightHome') }}" class="hover:underline">Flights</a></li>
            </ul>
        </nav>
        
        <div class="flex space-x-4">
            <!-- Si el usuario está logueado -->
            @if (Auth::check())
                <span class="text-white font-bold">Hello, {{ Auth::user()->name }}!</span>

                <!-- Botón para cerrar sesión -->
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-red-600 transition">
                        Logout
                    </button>
                </form>
            @else
                <!-- Si el usuario no está logueado, mostrar Login y Register -->
                <a href="{{ route('login') }}" class="bg-white text-blue-600 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition">
                    Login
                </a>
                <a href="{{ route('register') }}" class="bg-indigo-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-indigo-600 transition">
                    Register
                </a>
            @endif
        </div>
    </div>
</header>
