<ul>
    <li><a href="{{ route('welcome') }}" class="active">Home</a></li>
    <li><a href="{{ route('product') }}">Products</a></li>
    <li><a href="{{ route('contact') }}">Contact</a></li>
    @if (!auth()->user())
        <li><a href="{{ route('frontend.login') }}">Login</a></li>
    @else
        <li><a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('form-logout').submit()">Logout</a></li>
        <form action="{{ route('logout') }}" method="POST" id="form-logout">
            @csrf
        </form>
    @endif
</ul>
