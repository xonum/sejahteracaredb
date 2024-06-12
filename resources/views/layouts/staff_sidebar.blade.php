<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu"
            aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark">
            <a href=".">
                <img src="{{asset('assets/images/logo.png')}}" width="64" height="64" alt="Sejahtera" class="">
            </a>
        </h1>
        <div class="navbar-nav flex-row d-lg-none">

            <div class="d-none d-lg-flex">
                <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode"
                    data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                    </svg>
                </a>
                <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode"
                    data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                        <path
                            d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                    </svg>
                </a>
                <div class="nav-item dropdown d-none d-md-flex me-3">
                    <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1"
                        aria-label="Show notifications">
                        <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                            <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                        </svg>
                        <span class="badge bg-red"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Last updates</h3>
                            </div>
                            <div class="list-group list-group-flush list-group-hoverable">
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><span
                                                class="status-dot status-dot-animated bg-red d-block"></span></div>
                                        <div class="col text-truncate">
                                            <a href="#" class="text-body d-block">Example 1</a>
                                            <div class="d-block text-muted text-truncate mt-n1">
                                                Change deprecated html tags to text decoration classes (#29604)
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="list-group-item-actions">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted"
                                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><span class="status-dot d-block"></span></div>
                                        <div class="col text-truncate">
                                            <a href="#" class="text-body d-block">Example 2</a>
                                            <div class="d-block text-muted text-truncate mt-n1">
                                                justify-content:between ⇒ justify-content:space-between (#29734)
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="list-group-item-actions show">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow"
                                                    width="24" height="24" viewBox="0 0 24 24"
                                                    stroke-width="2" stroke="currentColor" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><span class="status-dot d-block"></span></div>
                                        <div class="col text-truncate">
                                            <a href="#" class="text-body d-block">Example 3</a>
                                            <div class="d-block text-muted text-truncate mt-n1">
                                                Update change-version.js (#29736)
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="list-group-item-actions">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted"
                                                    width="24" height="24" viewBox="0 0 24 24"
                                                    stroke-width="2" stroke="currentColor" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col-auto"><span
                                                class="status-dot status-dot-animated bg-green d-block"></span></div>
                                        <div class="col text-truncate">
                                            <a href="#" class="text-body d-block">Example 4</a>
                                            <div class="d-block text-muted text-truncate mt-n1">
                                                Regenerate package-lock.json (#29730)
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="list-group-item-actions">
                                                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted"
                                                    width="24" height="24" viewBox="0 0 24 24"
                                                    stroke-width="2" stroke="currentColor" fill="none"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-item dropdown">
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    {{-- <a href="#" class="dropdown-item">Status</a>
                    <a href="./profile.html" class="dropdown-item">Profile</a>
                    <a href="#" class="dropdown-item">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a href="./settings.html" class="dropdown-item">Settings</a> --}}
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" class="nav-link"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout-2"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M10 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" />
                                    <path d="M15 12h-12l3 -3" />
                                    <path d="M6 15l-3 -3" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Logout
                            </span>
                        </a>
                    </form>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3 ">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('staff.dashboard')}}">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Home
                        </span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown"
                        data-bs-auto-close="false" role="button" aria-expanded="false">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
<svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-bookmarks"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 10v11l-5 -3l-5 3v-11a3 3 0 0 1 3 -3h4a3 3 0 0 1 3 3z" /><path d="M11 3h5a3 3 0 0 1 3 3v11" /></svg>                        </span>
                        <span class="nav-link-title">
                            Booking
                            <span class="bg-danger px-1 rounded">{{$pending_bookings}}</span>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item" href="{{route('staff.bookings.index')}}"
                                    style="display: flex; gap:10px;">
                                    <span>Booking List</span>
                                    
                                    <span class="bg-danger ml-3  px-1 rounded">{{$pending_bookings}}</span>
                                </a>
                                <a class="dropdown-item" href="{{route('staff.bookings.settings')}}">
                                    Booking Settings
                                </a>

                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown"
                        data-bs-auto-close="false" role="button" aria-expanded="false">
                        <span
                            class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-report-medical"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /><path d="M10 14l4 0" /><path d="M12 12l0 4" /></svg>
                        </span>
                        <span class="nav-link-title">
                            Doctors
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item" href="{{route('staff.doctors.create')}}">
                                    Add New Doctor
                                </a>
                                <a class="dropdown-item" href="{{route('staff.doctors.index')}}">
                                    View Doctors
                                </a>

                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('staff.patients.index')}}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-wheelchair"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 16m-5 0a5 5 0 1 0 10 0a5 5 0 1 0 -10 0" /><path d="M19 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M19 17a3 3 0 0 0 -3 -3h-3.4" /><path d="M3 3h1a2 2 0 0 1 2 2v6" /><path d="M6 8h11" /><path d="M15 8v6" /></svg>
                        </span>
                        <span class="nav-link-title">
                            Patients 
                            <span class="bg-danger px-1 rounded">{{$pending_patients}}</span>
                        </span>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{route('staff.patients.index')}}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-news"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11" />
                                <path d="M8 8l4 0" />
                                <path d="M8 12l4 0" />
                                <path d="M8 16l4 0" />
                            </svg>
                        </span>
                        <span class="nav-link-title">
                            Reports
                        </span>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{route('staff.profile')}}">
                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M858.5 763.6a374 374 0 0 0-80.6-119.5 375.63 375.63 0 0 0-119.5-80.6c-.4-.2-.8-.3-1.2-.5C719.5 518 760 444.7 760 362c0-137-111-248-248-248S264 225 264 362c0 82.7 40.5 156 102.8 201.1-.4.2-.8.3-1.2.5-44.8 18.9-85 46-119.5 80.6a375.63 375.63 0 0 0-80.6 119.5A371.7 371.7 0 0 0 136 901.8a8 8 0 0 0 8 8.2h60c4.4 0 7.9-3.5 8-7.8 2-77.2 33-149.5 87.8-204.3 56.7-56.7 132-87.9 212.2-87.9s155.5 31.2 212.2 87.9C779 752.7 810 825 812 902.2c.1 4.4 3.6 7.8 8 7.8h60a8 8 0 0 0 8-8.2c-1-47.8-10.9-94.3-29.5-138.2zM512 534c-45.9 0-89.1-17.9-121.6-50.4S340 407.9 340 362c0-45.9 17.9-89.1 50.4-121.6S466.1 190 512 190s89.1 17.9 121.6 50.4S684 316.1 684 362c0 45.9-17.9 89.1-50.4 121.6S557.9 534 512 534z"></path></svg>                        </span>
                        <span class="nav-link-title">
                            Profile 
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" class="nav-link"
                            onclick="event.preventDefault();
                            this.closest('form').submit();">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout-2"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M10 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2" />
                                    <path d="M15 12h-12l3 -3" />
                                    <path d="M6 15l-3 -3" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Logout
                            </span>
                        </a>
                    </form>
                </li>


            </ul>
        </div>
    </div>
</aside>
