<ul class="sidebar_nav">
    <li class="menu-title">
        <span>DASHBOARD</span>
    </li>
    <li>
        <a href="{{ route('home') }}" class="{{ Request::is('home') ? 'active' : '' }}">
            <span data-feather="home" class="nav-icon"></span>
            <span class="menu-text">Dashboard</span>
        </a>
    </li>
    <li class="menu-title m-top-30">
        <span>Master Data</span>
    </li>
    @if (auth()->user()->role == 'admin')
        <li>
            <a href="{{ route('brand.index') }}" class="{{ Request::is('masterdata/brand*') ? 'active' : '' }}">
                <span data-feather="package" class="nav-icon"></span>
                <span class="menu-text">Brand</span>
            </a>
        </li>
        <li>
            <a href="{{ route('type.index') }}" class="{{ Request::is('masterdata/type*') ? 'active' : '' }}">
                <span data-feather="link" class="nav-icon"></span>
                <span class="menu-text">Type</span>
            </a>
        </li>
        <li>
            <a href="{{ route('user.index') }}" class="{{ Request::is('masterdata/user*') ? 'active' : '' }}">
                <span data-feather="users" class="nav-icon"></span>
                <span class="menu-text">User</span>
            </a>
        </li>
    @endif
    <li>
        <a href="{{ route('company.index') }}" class="{{ Request::is('masterdata/company*') ? 'active' : '' }}">
            <span data-feather="server" class="nav-icon"></span>
            <span class="menu-text">Company</span>
        </a>
    </li>
</ul>
