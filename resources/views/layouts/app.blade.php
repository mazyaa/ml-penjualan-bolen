<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
<<<<<<< HEAD
        <meta charset="utf-g">
=======
        <meta charset="utf-8">
>>>>>>> abbd64e3b7fce6c42c45fedfffeb3026645e2067
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

<<<<<<< HEAD
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="flex h-screen bg-gray-100">
            <aside class="w-64 flex-shrink-0 hidden md:block bg-gray-800 text-white">
                <div class="p-4">
                    <a href="{{ route('dashboard') }}" class="text-xl font-bold">
                        Stok Bolen
                    </a>
                </div>
                <nav class="mt-5">
                    <a href="{{ route('dashboard') }}"
                       class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-gray-700 hover:text-white {{ request()->routeIs('dashboard') ? 'bg-gray-900' : '' }}">
                        <span class="mx-3">Dashboard</span>
                    </a>

                    <a href="{{ route('products') }}"
                       class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-gray-700 hover:text-white {{ request()->routeIs('products') ? 'bg-gray-900' : '' }}">
                        <span class="mx-3">Daftar Produk</span>
                    </a>

                    <a href="{{ route('sales.history') }}"
                       class="flex items-center mt-4 py-2 px-6 text-gray-300 hover:bg-gray-700 hover:text-white {{ request()->routeIs('sales.history') ? 'bg-gray-900' : '' }}">
                        <span class="mx-3">Riwayat Penjualan</span>
                    </a>
                </nav>

                <div class="absolute bottom-0 w-64 p-4">
                    <div class="font-semibold">{{ Auth::user()->name }}</div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); this.closest('form').submit();"
                                class="text-sm text-gray-400 hover:text-white">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </div>
            </aside>

            <div class="flex-1 flex flex-col overflow-hidden">
                <header class="bg-white shadow">
=======
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow-sm">
>>>>>>> abbd64e3b7fce6c42c45fedfffeb3026645e2067
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
<<<<<<< HEAD

                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
                    {{ $slot }}
                </main>
            </div>
        </div>

        @stack('scripts')
=======
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
>>>>>>> abbd64e3b7fce6c42c45fedfffeb3026645e2067
    </body>
</html>
