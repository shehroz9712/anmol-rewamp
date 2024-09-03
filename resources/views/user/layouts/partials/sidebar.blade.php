<div class="sticky">
    <div class="main-menu main-sidebar main-sidebar-sticky side-menu">
        <div class="main-sidebar-header main-container-1 active">
            <div class="sidemenu-logo">
                <a class="main-logo" href="index.html">
                    <img src="{{ imageFile('brand/logo-light.png') }}" class="header-brand-img desktop-logo"
                        alt="logo">
                    <img src="{{ imageFile('brand/icon-light.png') }}" class="header-brand-img icon-logo"
                        alt="logo">
                    <img src="{{ imageFile('brand/logo.png') }}" class="header-brand-img desktop-logo theme-logo"
                        alt="logo">
                    <img src="{{ imageFile('brand/icon.png') }}" class="header-brand-img icon-logo theme-logo"
                        alt="logo">
                </a>
            </div>
            <div class="main-sidebar-body main-body-1">
                <div class="slide-left disabled" id="slide-left"><i class="fe fe-chevron-left"></i></div>
                <ul class="menu-nav nav">
                    <li class="nav-header"><span class="nav-label">Menu</span></li>

                    {{-- @if (Auth::user()->Role == 'Admin') --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="ti-home sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item @if (Request::is('events') || Request::is('events/*')) active @endif">
                        <a class="nav-link" href="{{ route('user.events.index') }}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="fe fe-file-text menu-icon sidemenu-icon "></i>
                            <span class="sidemenu-label">Events</span>
                        </a>
                    </li>
                    <li class="nav-item @if (Request::is('calender') || Request::is('calender/*')) active @endif">
                        <a class="nav-link" href="{{ route('user.calender.index') }}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="fe fe-calendar sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">Calender</span>
                        </a>
                    </li>

                    <li class="nav-item @if (Request::is('menu') || Request::is('menu/*')) active @endif">
                        <a class="nav-link" href="{{ route('user.menu.link.index') }}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="fe fe-file sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">Menu</span>
                        </a>
                    </li>
                    <li class="nav-item @if (Request::is('categories') || Request::is('categories/*')) active  @else d-none @endif">
                        <a class="nav-link" href="{{ route('user.categories.index') }}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="fe fe-calendar sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">Categories</span>
                        </a>
                    </li>
                    <li class="nav-item  @if (Request::is('subcategories') || Request::is('subcategories')) active  @else d-none @endif">
                        <a class="nav-link" href="{{ route('user.subcategories.index') }}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="fe fe-calendar sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">Sub Categories</span>
                        </a>
                    </li>
                    <li class="nav-item @if (Request::is('items') || Request::is('items/*')) active @else d-none @endif">
                        <a class="nav-link" href="{{ route('user.dishes.index') }}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="fe fe-calendar sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">Items</span>
                        </a>
                    </li>
                    <li class="nav-item @if (Request::is('packages') || Request::is('packages/*')) active  @else d-none @endif">
                        <a class="nav-link" href="{{ route('user.packages.index') }}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="fe fe-calendar sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">Packages</span>
                        </a>
                    </li>
                    <li class="nav-item @if (Request::is('equipments') || Request::is('equipments/*')) active @endif">
                        <a class="nav-link" href="{{ route('user.equipments.index') }}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="fa fa-shopping-basket sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">Equipments</span>
                        </a>
                    </li>
                    <li class="nav-item @if (Request::is('labours') || Request::is('labours/*')) active @endif">
                        <a class="nav-link" href="{{ route('user.labours.index') }}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="fa fa-toolbox sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">Staff</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.contact.index') }}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="fe fe-phone sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">Contact</span>
                        </a>
                    </li>
                    {{-- <li class="nav-item @if (Request::is('customer-venues') || Request::is('customer-venues/*')) active @endif">
                        <a class="nav-link" href="{{ route('user.customer-venues.index') }}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="fe fe-globe sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">Venue</span>
                        </a>
                    </li>
                    <li class="nav-item @if (Request::is('admin-venues') || Request::is('admin-venues/*')) active @endif">
                        <a class="nav-link" href="{{ route('user.admin-venues.index') }}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="fe fe-globe sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">Admin Venue</span>
                        </a>
                    </li> --}}
                    {{-- @else --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="ti-home sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">Infoboard</span>
                        </a>
                    </li>
                    <li class="nav-item @if (Request::is('events') || Request::is('events/*')) active @endif">
                        <a class="nav-link " href="{{ route('user.events.create') }}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="fe fe-file-text menu-icon sidemenu-icon "></i>
                            <span class="sidemenu-label">Events</span>
                        </a>
                    </li>
                    <li class="nav-item @if (Request::is('customer-venues') || Request::is('customer-venues/*')) active @endif">
                        <a class="nav-link " href="#">
                            {{-- <a class="nav-link" href="{{ route('user.customer-venues.create') }}"> --}}
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="fe fe-globe sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">Venue</span>
                        </a>
                    </li>
                    <li class="nav-item  @if (Request::is('menu')) active @endif">
                        <a class="nav-link" href="#">
                            {{-- <a class="nav-link" href="{{ route('user.menu.index') }}"> --}}
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="fe fe-menu sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">Menu</span>
                        </a>
                    </li>
                    @if (Request::is('menu/detail/*'))
                        <li class="nav-item  active ">
                            <a class="nav-link" href="#">
                                {{-- <a class="nav-link" href="{{ route('user.menu.index') }}"> --}}
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="fe fe-menu sidemenu-icon menu-icon "></i>
                                <span class="sidemenu-label">Package Detail</span>
                            </a>
                        </li>
                    @endif

                    @if (Request::is('menu/addon/*'))
                        <li class="nav-item active">
                            <a class="nav-link" href="#">
                                {{-- <a class="nav-link" href="{{ route('user.menu.index') }}"> --}}
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="fe fe-menu sidemenu-icon menu-icon "></i>
                                <span class="sidemenu-label">Addon Menu</span>
                            </a>
                        </li>
                    @endif
                    @if (Request::is('menu/items'))
                        <li class="nav-item active">
                            <a class="nav-link" href="#">
                                {{-- <a class="nav-link" href="{{ route('user.menu.index') }}"> --}}
                                <span class="shape1"></span>
                                <span class="shape2"></span>
                                <i class="fe fe-menu sidemenu-icon menu-icon "></i>
                                <span class="sidemenu-label">Custom Menu</span>
                            </a>
                        </li>
                    @endif
                    <li class="nav-item  @if (Request::is('service') || Request::is('service/*')) active @endif">
                        <a class="nav-link" href="#">
                            {{-- <a class="nav-link" href="{{ route('user.service.styling') }}"> --}}
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="si si-earphones-alt sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">Service Style</span>
                        </a>
                    </li>
                    <li class="nav-item  @if (Request::is('equipment') || Request::is('equipment/*')) active @endif">
                        <a class="nav-link" href="#">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="fa fa-toolbox sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">Equipments</span>
                        </a>
                    </li>
                    <li class="nav-item  @if (Request::is('labour') || Request::is('labour/*')) active @endif">
                        <a class="nav-link" href="#">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="si si-people sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">Labour & Staff</span>
                        </a>
                    </li>

                    <li class="nav-item  @if (Request::is('ContractIndex') || Request::is('ContractIndex/*')) active @endif">
                        <a class="nav-link" href="{{ route('user.ContractIndex') }}">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="si si-notebook sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">Contract</span>
                        </a>
                    </li>
                    <li class="nav-item @if (Request::is('invoice') || Request::is('invoice/*')) active @endif">
                        <a class="nav-link" href="#">
                            <span class="shape1"></span>
                            <span class="shape2"></span>
                            <i class="si si-calculator sidemenu-icon menu-icon "></i>
                            <span class="sidemenu-label">Invoice</span>
                        </a>
                    </li>
                    {{-- @endif --}}

                </ul>
                <div class="slide-right" id="slide-right"><i class="fe fe-chevron-right"></i></div>
            </div>
        </div>
    </div>
</div>