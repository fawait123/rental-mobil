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
    @if (auth()->user()->role == 'admin')
        <li class="menu-title m-top-30">
            <span>Front End</span>
        </li>
        <li>
            <a href="{{ route('banner.index') }}" class="{{ Request::is('admin/frontend/banner*') ? 'active' : '' }}">
                <span data-feather="airplay" class="nav-icon"></span>
                <span class="menu-text">Banner</span>
            </a>
        </li>
        <li>
            <a href="{{ route('recomended.index') }}"
                class="{{ Request::is('admin/frontend/recomended*') ? 'active' : '' }}">
                <span data-feather="award" class="nav-icon"></span>
                <span class="menu-text">Recomended</span>
            </a>
        </li>
        <li>
            <a href="{{ route('other.index') }}" class="{{ Request::is('admin/frontend/other*') ? 'active' : '' }}">
                <span data-feather="compass" class="nav-icon"></span>
                <span class="menu-text">Other Product</span>
            </a>
        </li>
        <li class="menu-title m-top-30">
            <span>Master Data</span>
        </li>
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
        <li>
            <a href="{{ route('admin.company') }}"
                class="{{ Request::is('masterdata/company*') || Request::is('masterdata/admin/company*') ? 'active' : '' }}">
                <span data-feather="server" class="nav-icon"></span>
                <span class="menu-text">Company</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.list-car') }}"
                class="{{ Request::is('masterdata/list-car*') || Request::is('masterdata/admin/list-car*') ? 'active' : '' }}">
                <span data-feather="list" class="nav-icon"></span>
                <span class="menu-text">List Car</span>
            </a>
        </li>
    @endif
    @if (auth()->user()->role == 'retail')
        <li class="menu-title m-top-30">
            <span>Master Data</span>
        </li>
        <li>
            <a href="{{ route('company.index') }}" class="{{ Request::is('masterdata/companies*') ? 'active' : '' }}">
                <span data-feather="server" class="nav-icon"></span>
                <span class="menu-text">Company</span>
            </a>
        </li>
        @if ($company)
            <li>
                <a href="{{ route('property.index') }}"
                    class="{{ Request::is('masterdata/property*') ? 'active' : '' }}">
                    <span data-feather="server" class="nav-icon"></span>
                    <span class="menu-text">Manage Property</span>
                </a>
            </li>
            <li>
                <a href="{{ route('transaction.index') }}" class="{{ Request::is('transaction*') ? 'active' : '' }}">
                    <span data-feather="server" class="nav-icon"></span>
                    <span class="menu-text">Transaction</span>
                </a>
            </li>
            <li>
                <a href="{{ route('company.index') }}" class="{{ Request::is('report*') ? 'active' : '' }}">
                    <span data-feather="server" class="nav-icon"></span>
                    <span class="menu-text">Report</span>
                </a>
            </li>
        @endif
    @endif
</ul>
