<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard.index') }}">Eccomerce</a>
        </div>
        {{-- <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard.index') }}"><i class="fas fa-user" aria-hidden="true"></i></a>
        </div> --}}
        <ul class="sidebar-menu">
            <li class="menu-header">MAIN MENU</li>
            <li class="{{ setActive('admin') }}">
                <a class="nav-link" href="{{ route('dashboard.index') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ setActive('admin/admin') }}">
                <a class="nav-link" href="{{ route('admin.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Users</span>
                </a>
            </li>
            <li class="{{ setActive('admin/admin') }}">
                <a class="nav-link" href="{{ route('admin.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Categories</span>
                </a>
            </li>
            <li class="{{ setActive('admin/admin') }}">
                <a class="nav-link" href="{{ route('admin.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Products</span>
                </a>
            </li>
            <li class="{{ setActive('admin/admin') }}">
                <a class="nav-link" href="{{ route('admin.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Transactions</span>
                </a>
            </li>
            
            <li class="{{ setActive('admin/admin') }}">
                <a class="nav-link" href="{{ route('admin.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Admin</span>
                </a>
            </li>
         
        </ul>
    </aside>
</div>