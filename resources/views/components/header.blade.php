<header class="bg-blue-600 p-4 text-white">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-xl font-bold">AIRLINE</h1>
        <nav>
            <ul class="hidden md:flex space-x-4">
                <li><a href="#" class="hover:underline">Home</a></li>
                <li><a href="{{ route('planeHome') }}" class="hover:underline">Plane</a></li>
                <li><a href="{{ route('flightHome') }}" class="hover:underline">Flights</a></li>
            </ul>
        </nav>
        <div class="flex space-x-4">
            <a href="{{ route('login') }}" class="bg-white text-blue-600 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition">
                Login
            </a>
            <a href="{{ route('register') }}" class="bg-indigo-500 text-white px-4 py-2 rounded-lg font-semibold hover:bg-indigo-600 transition">
                Register
            </a>
        </div>
    </div>
</header>