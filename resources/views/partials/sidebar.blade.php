<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="active">
                <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>

            </li>
            <li class="menu-header">Starter</li>
            {{--    category    --}}
            <li class="dropdown {{ request()->routeIs('category.*') ? 'active':'' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>category</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request('type') == 'menu' ? 'active':'' }}">
                        <a class="nav-link" href="{{ route('category.index').'?type=menu' }}">Menu category</a>
                    </li>
                    <li class="{{ request('type') == 'blog' ? 'active':'' }}">
                        <a class="nav-link" href="{{ route('category.index').'?type=blog' }}">Blog category</a>
                    </li>
                    <li class="{{ request()->routeIs('category.create') ? 'active':'' }}">
                        <a class="nav-link" href="{{ route('category.create') }}">Create Category</a>
                    </li>
                </ul>
            </li>
            {{--    menu    --}}
            <li class="dropdown {{ request()->routeIs('menu.*') ? 'active':'' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>menu</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('menu.index') ? 'active':'' }}">
                        <a class="nav-link" href="{{ route('menu.index') }}">Menu List</a>
                    </li>
                    <li class="{{ request()->routeIs('menu.create') ? 'active':'' }}">
                        <a class="nav-link" href="{{ route('menu.create') }}">Create Menu</a>
                    </li>
                </ul>
            </li>
            {{--    blog    --}}
            <li class="dropdown {{ request()->routeIs('blog.*') ? 'active':'' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>blog</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('blog.index') ? 'active':'' }}">
                        <a class="nav-link" href="{{ route('blog.index') }}">blog List</a>
                    </li>
                    <li class="{{ request()->routeIs('blog.create') ? 'active':'' }}">
                        <a class="nav-link" href="{{ route('blog.create') }}">Create blog</a>
                    </li>
                </ul>
            </li>
            {{--    gallery --}}
            <li class="dropdown {{ request()->routeIs('gallery.*') ? 'active':'' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Gallery</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request('type') == 'photo' ? 'active':'' }}">
                        <a class="nav-link" href="{{ route('gallery.index').'?type=photo' }}">Photo gallery</a>
                    </li>
                    <li class="{{ request('type') == 'video' ? 'active':'' }}">
                        <a class="nav-link" href="{{ route('gallery.index').'?type=video' }}">Video gallery</a>
                    </li>
                    <li class="{{ request()->routeIs('gallery.create') ? 'active':'' }}">
                        <a class="nav-link" href="{{ route('gallery.create') }}">Add gallery</a>
                    </li>
                </ul>
            </li>
            {{--    slider  --}}
            <li class="dropdown {{ request()->routeIs('slider.*') ? 'active':'' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>slider</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('slider.index') ? 'active':'' }}">
                        <a class="nav-link" href="{{ route('slider.index') }}">slider List</a>
                    </li>
                    <li class="{{ request()->routeIs('slider.create') ? 'active':'' }}">
                        <a class="nav-link" href="{{ route('slider.create') }}">Create slider</a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
