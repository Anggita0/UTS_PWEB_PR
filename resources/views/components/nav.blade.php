{{-- <nav class="flex gap-4 p-4 w-full bg-slate-400">
    <a href="/">landing</a>
    <a href="/home">Homepage</a>
    <a href="/register">register</a>
    <a href="/login">login</a>
</nav> --}}

<nav class="w-full flex justify-center gap-4 p-4 bg-pink-500 text-white">
    <a href="{{ route('landing') }}" class="hover:text-gray-300">Landing</a>
    <a href="{{ route('homepage') }}" class="hover:text-gray-300">Homepage</a>
    <a href="{{ route('register') }}" class="hover:text-gray-300">Register</a>
    <a href="{{ route('login') }}" class="hover:text-gray-300">Login</a> <!-- Ini sudah benar -->
</nav>

{{-- <nav class="w-full fixed top-0 left-0 flex justify-center gap-4 p-4 bg-pink-500 text-white shadow-lg">
    <a href="{{ route('landing') }}" class="hover:text-gray-300">Landing</a>
    <a href="{{ route('homepage') }}" class="hover:text-gray-300">Homepage</a>
    <a href="{{ route('register') }}" class="hover:text-gray-300">Register</a>
    <a href="{{ route('login') }}" class="hover:text-gray-300">Login</a>
</nav> --}}






