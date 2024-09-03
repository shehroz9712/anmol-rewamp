<!--start header-->
<header class="top-header">
    <nav class="navbar navbar-expand justify-content-between align-items-center gap-4">
        <div class="btn-toggle">
            <a href="javascript:;"><i class="material-icons-outlined">menu</i></a>
        </div>
        @if (Auth::guard('admin')->check())
            <ul class="navbar-nav gap-1  nav-right-links align-items-center">

                <li class="nav-item dropdown">
                    <a href="javascrpt:;" class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                        <img src="{{ uploads('logos/' . Auth::guard('admin')->user()->image) }}" class="rounded-circle p-1 border"
                            width="45" height="45" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-user dropdown-menu-end shadow">
                        <a class="dropdown-item  gap-2 py-2" href="javascript:;">
                            <div class="text-center">
                                <img src="{{ uploads('logos/' . Auth::guard('admin')->user()->image) }}"
                                    class="rounded-circle p-1 shadow mb-3" width="90" height="90" alt="">
                                <h5 class="user-name mb-0 fw-bold">Hello, {{ Auth::guard('admin')->user()->name }}</h5>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item d-flex align-items-center gap-2 py-2"
                            href="{{ route('admin.admins.show', Auth::guard('admin')->id()) }}"><i
                                class="material-icons-outlined">person_outline</i>Profile</a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{ route('user.logout') }}"
                            onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();"><i
                                class="material-icons-outlined">power_settings_new</i>Logout</a>

                        <form id="logout-form" action="{{ route('user.logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        @endif

    </nav>
</header>
<!--end top header-->
