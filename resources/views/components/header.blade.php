<header class="bg-blue-600 p-4 text-white">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-xl font-bold">AIRLINE</h1>
        <nav>
            <ul class="hidden md:flex space-x-4">
                <li><a href="#" class="hover:underline">Home</a></li>
                <li><a href="{{ route('planeHome') }}" class="hover:underline">Plane</a></li>
                <li><a href="{{ route('flightHome') }}" class="hover:underline">Flights</a></li>
                <li><a href="#" class="hover:underline">Contacto</a></li>
            </ul>
        </nav>
        <button id="menu-btn" class="md:hidden text-white text-2xl">☰</button>
    </div>
</header>