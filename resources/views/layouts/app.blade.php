@include('layouts.header')

<body class="layout-fluid">
    {{-- <div class="min-h-screen bg-gray-100 dark:bg-gray-900"> --}}
    <div class="page">
        @if (auth()->user()->role === 'staff')
            @include('layouts.staff_sidebar')
        @elseif (auth()->user()->role === 'patient')
            @include('layouts.patient_sidebar')
        @elseif (auth()->user()->role === 'admin')
            @include('layouts.admin_sidebar')
            @elseif (auth()->user()->role === 'doctor')
            @include('layouts.doctor_sidebar')
        @endif
        <!-- Page Content -->
        <main class="page-wrapper">
            @if(auth()->user()->role === 'staff')
                @include('layouts.staff_navigation')
            @else
                @include('layouts.navigation') 
            @endif

            <!-- Alert -->
            <div class="alert-container">
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <div class="d-flex align-items-center gap-2">
                        <div>
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                                height="2em" width="2em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z">
                                </path>
                                <path
                                    d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z">
                                </path>
                            </svg>
                        </div>
                        <div class="pt-1">
                            <h4 class="alert-title">{{ session('success') }}</h4>
                        </div>
                    </div>
                </div>
            @elseif (session('error'))
                <div class="alert alert-danger" role="alert">
                    <div class="d-flex align-items-center gap-2">
                        <div>
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                                height="2em" width="2em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M699 353h-46.9c-10.2 0-19.9 4.9-25.9 13.3L469 584.3l-71.2-98.8c-6-8.3-15.6-13.3-25.9-13.3H325c-6.5 0-10.3 7.4-6.5 12.7l124.6 172.8a31.8 31.8 0 0 0 51.7 0l210.6-292c3.9-5.3.1-12.7-6.4-12.7z">
                                </path>
                                <path
                                    d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z">
                                </path>
                            </svg>
                        </div>
                        <div class="pt-1">
                            <h4 class="alert-title">{{ session('error') }}</h4>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <!-- End Alert -->

            @yield('content')
        </main>
    </div>

    @include('layouts.footer')
</body>

</html>
