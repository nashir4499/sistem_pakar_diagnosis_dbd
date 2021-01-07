<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Logo --}}
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/logo.png')}}" />

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.css') }}">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        {{-- <div class="min-h-screen bg-gray-100"> --}}
            {{-- @livewire('navigation-dropdown') --}}

            <div class="wrapper">
                <!-- Sidebar  -->
                <nav id="sidebar" class="sidebar">
                    {{-- <div class="sidebar-header"> --}}
                    <a class="sidebar-brand" href="{{ route('dashboard') }}">
                            {{-- <x-jet-application-mark class="block h-8 w-auto" /> --}}
                            <img width="31px" src="{{ asset('img/logo.png') }}" style="vertical-align:middle"/>
                        </a>
                    {{-- </div> --}}

                    <div class="sidebar-content">
                        <div class="sidebar-user">
                            {{-- <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="img-fluid rounded-circle mb-2" style="margin-left: 30px"> --}}
                            <img class="h-8 w-8 rounded-full object-cover img-fluid" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"/>
                            <div class="font-weight-bold">{{ Auth::user()->name }}</div>
                            {{-- <small>Front-end Developer</small> --}}
                        </div>

                        <ul class="sidebar-nav">
                            <li class="sidebar-header">
                                Main
                            </li>
                            <li class="sidebar-item {{ Request::is('dashboard') ? 'aktif' : '' }}">
                                <a href="{{route('dashboard')}}" class="sidebar-link " :active="request()->routeIs('dashboard')">
                                    <i class="align-middle mr-2 fas fa-fw fa-home"></i> <span class="align-middle">Dashboard</span>
                                </a>
                            </li>
                            <li class="sidebar-item {{ Request::is('diagnosa') ? 'aktif' : '' }}">
                                <a href="{{route('diagnosa')}}" class="sidebar-link ">
                                    <i class="align-middle mr-2 fas fa-fw fa-virus"></i> <span class="align-middle">Diagnosa</span>
                                </a>
                            </li>

                            <li class="sidebar-item {{ Request::is('gejala') ? 'aktif' : '' }}">
                                <a href="{{route('gejala')}}" class="sidebar-link ">
                                    <i class="align-middle mr-2 fas fa-fw fa-head-side-cough"></i> <span class="align-middle">Gejala</span>
                                </a>
                            </li>

                            <li class="sidebar-item {{ Request::is('relasi') ? 'aktif' : '' }}">
                                <a href="{{route('relasi')}}" class="sidebar-link ">
                                    <i class="align-middle mr-2 fas fa-fw fa-capsules"></i> <span class="align-middle">Relasi</span>
                                </a>
                            </li>
                            <li class="sidebar-item {{ Request::is('rule') ? 'aktif' : '' }}">
                                <a href="{{route('rule')}}" class="sidebar-link ">
                                    <i class="align-middle mr-2 fas fa-fw fa-balance-scale"></i> <span class="align-middle">Rule</span>
                                </a>
                            </li>

                            <li class="sidebar-header">
                                Elements
                            </li>
                            <li class="sidebar-item {{ Request::is('user/profile') ? 'aktif' : '' }}">
                                <a href="{{ route('profile.show') }}" class="sidebar-link ">
                                    <i class="align-middle mr-2 fas fa-fw fa-user"></i> <span class="align-middle">Profile</span>
                                </a>
                            </li>
                            <li class="sidebar-header">
                                Extras
                            </li>
                            <li class="sidebar-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();" class="sidebar-link ">
                                    <i class="align-middle mr-2 fas fa-fw fa-sign-out-alt"></i>{{ __('Logout') }}
                                </a>
                            </form>
                            </li>
                            {{-- <li class="sidebar-item">
                                <a href="#layouts" class="sidebar-link">
                                    <i class="align-middle mr-2 fas fa-fw fa-sign-out-alt"></i>
                                    <span class="align-middle">Logout</span>
                                </a>
                            </li> --}}
                        </ul>
                    </div>


                </nav>

                <div id="content" class="min-h-screen bg-gray-100">
                    @livewire('navigation-dropdown')

                    <!-- Page Heading -->
                    {{-- <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header> --}}

                    <!-- Page Content -->
                    <main class="page-content">
                        {{ $slot }}
                    </main>
                </div>

            </div>



            <!-- Page Heading -->
            {{-- <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header> --}}

            <!-- Page Content -->
            {{-- <main>
                {{ $slot }}
            </main> --}}
        {{-- </div> --}}

        @stack('modals')
        @livewireScripts
        <script type="text/javascript">
            window.livewire.on('userStore', () => {
                $('#exampleModal').modal('hide');
            });
            window.livewire.on('showModalPinjam', () => {
                $('#pinjamUser').modal('show');
            });
            window.livewire.on('hideModalPinjam', () => {
                $('#pinjamUser').modal('hide');
            });
        </script>
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>
