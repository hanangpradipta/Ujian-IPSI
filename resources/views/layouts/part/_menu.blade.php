<div class="sidebar-menu">
                        
    <ul class="menu">
        <li class="sidebar-title">Main Menu</li>
        <li class="sidebar-item {{ Route::is('home') ? 'active' : '' }}">
                <a href="{{ route('home') }}" class='sidebar-link'>
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

        @can('Authorization')
        <li class="sidebar-item {{ Route::is('admin.*', 'role.*', 'module.*', 'permissions.*') ? 'active' : '' }} has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="fas fa-folder"></i>
                        <span>Authorization</span>
                    </a>
                <ul class="submenu {{ Route::is('admin.*', 'role.*', 'module.*', 'permissions.*') ? 'active' : '' }}">
                    @can('Admin Show')
                        <li class="submenu-item {{ Route::is('admin.*') ? 'active' : '' }}">
                            <a href="{{ route('admin.index') }}">Data Admin</a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        
        @can('Menu Customer')
            <li class="sidebar-item {{ Route::is('customer.*') ? 'active' : '' }} has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="fas fa-folder"></i>
                    <span>Data Master</span>
                </a>
                <ul class="submenu {{ Route::is('customer.*') ? 'active' : '' }}">
                    @can('Customer Show')
                        <li class="submenu-item {{ Route::is('customer.*') ? 'active' : '' }}">
                            <a href="{{ route('customer.index') }}">Data Customer</a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan         
    </ul>
</div>