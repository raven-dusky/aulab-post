<nav class="navbar">
    <ul class="navbar-list">
        <li class="navbar-item"><a href="{{ route('homepage') }}">The Aulab Post</a></li>
        <li class="navbar-item"><a href="{{ route('homepage') }}">Homepage</a></li>
        @guest
        <li class="navbar-item"><a href="{{ route('login') }}">Login</a></li>
        <li class="navbar-item"><a href="{{ route('register') }}">Register</a></li>
        @endguest
        @auth
        <li class="navbar-item"><a href="#">Create</a></li>
        <li class="navbar-item"><a href="" onclick="event.preventDefault(); document.querySelector('#logout').submit()" >Logout</a></li>
        <form method="POST" action="{{ route('logout') }}" id="logout">
            @csrf
        </form>
        @endauth
    </ul>
</nav>
