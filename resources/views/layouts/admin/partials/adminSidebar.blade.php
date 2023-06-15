<aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="/" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span class="icon logo" aria-hidden="true"></span>
                <div class="logo-text">
                    <span class="logo-title">Elegant</span>
                    <span class="logo-subtitle">Dashboard</span>
                </div>

            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>
        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="{{request()->routeIs('admin.home') ? 'active' : ''}}" href="{{route('admin.home')}}">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a class="show-cat-btn {{request()->routeIs('admin.products.*') ? 'active' : ' '}}" href="{{ route('admin.products.index') }}">
                        Products
                    </a>
                </li>
                <li>
                    <a class="show-cat-btn {{request()->routeIs('admin.categories.*') ? 'active' : ' '}}" href="{{ route('admin.categories.index') }}">
                        Categories
                    </a>
                </li>
                <li>
                    <a class="show-cat-btn {{request()->routeIs('admin.users.*') ? 'active' : ' '}}" href="{{ route('admin.users.index') }}">
                        Users
                    </a>
                </li>
                <li>
                    <a class="show-cat-btn {{request()->routeIs('admin.orders.*') ? 'active' : ' '}}" href="{{ route('admin.orders.index') }}">
                        Orders
                    </a>
                </li>
                <li>
                    <a class="show-cat-btn {{request()->routeIs('admin.messages.*') ? 'active' : ' '}}" href="{{ route('admin.messages.index') }}">
                        Messages
                    </a>
                </li>

        </div>
    </div>
</aside>