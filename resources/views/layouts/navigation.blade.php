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
    <li>
        <a href="{{ route('brand.index') }}" class="{{ Request::is('masterdata/brand*') ? 'active' : '' }}">
            <span data-feather="message-square" class="nav-icon"></span>
            <span class="menu-text">Brand</span>
        </a>
    </li>
    <li>
        <a href="{{ route('type.index') }}" class="{{ Request::is('masterdata/type*') ? 'active' : '' }}">
            <span data-feather="message-square" class="nav-icon"></span>
            <span class="menu-text">Type</span>
        </a>
    </li>
</ul>
