<ul>
    <li><a href="{{ route('welcome') }}" class="active">Home</a></li>
    <li><a href="{{ route('product') }}">Products</a></li>
    <li><a href="{{ route('contact') }}">Contact</a></li>
    @if (!auth()->user())
        <li><a href="{{ route('frontend.login') }}">Login</a></li>
    @endif
</ul>
