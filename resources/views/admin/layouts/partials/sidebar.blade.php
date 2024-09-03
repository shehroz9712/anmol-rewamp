<!--start sidebar-->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="logo-icon">

            <img src="{{ getLogo() }}" class="logo-img" alt="Logo">
        </div>

        <div class="sidebar-close">
            <span class="material-icons-outlined">close</span>
        </div>
    </div>
    <div class="sidebar-nav">
        <!--navigation-->
        <ul class="metismenu" id="sidenav">
            <li>
                <a href="{{ route('admin.home') }}" class="{{ request()->routeIs('admin.home') ? 'active' : '' }}">
                    <div class="parent-icon"><i class="material-icons-outlined">dashboard</i></div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.admins.index') }}"
                    class="{{ request()->routeIs('admin.admins.index') ? 'active' : '' }}">
                    <div class="parent-icon"><i class="material-icons-outlined">admin_panel_settings</i></div>
                    <div class="menu-title">Admins</div>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.users.index') }}"
                    class="{{ request()->routeIs('admin.users.index') ? 'active' : '' }}">
                    <div class="parent-icon"><i class="material-icons-outlined">people</i></div>
                    <div class="menu-title">Users</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.pages.index') }}"
                    class="{{ request()->routeIs('admin.pages.index') ? 'active' : '' }}">
                    <div class="parent-icon"><i class="material-icons-outlined">people</i></div>
                    <div class="menu-title">Pages</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.pixels.index') }}"
                    class="{{ request()->routeIs('admin.pixels.index') ? 'active' : '' }}">
                    <div class="parent-icon"><i class="material-icons-outlined">image</i></div>
                    <div class="menu-title">Image Pixels</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.transactions.index') }}"
                    class="{{ request()->routeIs('admin.transactions.index') ? 'active' : '' }}">
                    <div class="parent-icon"><i class="material-icons-outlined">account_balance_wallet</i></div>
                    <div class="menu-title">Transactions</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.contacts.index') }}"
                    class="{{ request()->routeIs('admin.contacts.index') ? 'active' : '' }}">
                    <div class="parent-icon"><i class="material-icons-outlined">account_balance_wallet</i></div>
                    <div class="menu-title">Contact</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.settings.index') }}"
                    class="{{ request()->routeIs('admin.settings.index') ? 'active' : '' }}">
                    <div class="parent-icon"><i class="material-icons-outlined">settings</i></div>
                    <div class="menu-title">Settings</div>
                </a>
            </li>
            {{-- <li>
                <a href="{{ route('admin.faqs.index') }}"
                    class="{{ request()->routeIs('user.faqs.index') ? 'active' : '' }}">
                    <div class="parent-icon"><i class="material-icons-outlined">help</i></div>
                    <div class="menu-title">FAQs</div>
                </a>
            </li> --}}
        </ul>


        <!--end navigation-->
    </div>
</aside>
<!--end sidebar-->
