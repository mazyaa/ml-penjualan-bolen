<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-50 text-gray-800">
        <div class="flex h-screen">
            <!-- SIDEBAR -->
            <aside class="w-64 flex-shrink-0 hidden md:block bg-indigo-700 text-white shadow-lg">
                <div class="p-6 border-b border-indigo-500">
                    <a href="{{ route('dashboard') }}" class="text-2xl font-bold tracking-tight text-white">
                        📦 Stok Bolen
                    </a>
                </div>
                <nav class="mt-6 space-y-2">
                    <a href="{{ route('dashboard') }}"
                       class="flex items-center px-6 py-3 text-sm hover:bg-indigo-600 rounded-r-full transition-all {{ request()->routeIs('dashboard') ? 'bg-indigo-800' : '' }}">
                        🏠 <span class="ml-3">Dashboard</span>
                    </a>
                    <a href="{{ route('products.index') }}"
                       class="flex items-center px-6 py-3 text-sm hover:bg-indigo-600 rounded-r-full transition-all {{ request()->routeIs('products.*') ? 'bg-indigo-800' : '' }}">
                        📋 <span class="ml-3">Daftar Produk</span>
                    </a>
                    <a href="{{ route('penjualan.create') }}"
                       class="flex items-center px-6 py-3 text-sm hover:bg-indigo-600 rounded-r-full transition-all {{ request()->routeIs('penjualan.create') ? 'bg-indigo-800' : '' }}">
                        🛒 <span class="ml-3">Penjualan</span>
                    </a>
                    <a href="{{ route('sales.index') }}"
                       class="flex items-center px-6 py-3 text-sm hover:bg-indigo-600 rounded-r-full transition-all {{ request()->routeIs('sales.*') ? 'bg-indigo-800' : '' }}">
                        📈 <span class="ml-3">Riwayat Penjualan</span>
                    </a>
                </nav>

                <div class="absolute bottom-0 w-64 p-6 border-t border-indigo-600">
                    <div class="text-sm font-medium mb-2">{{ Auth::user()->name }}</div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); this.closest('form').submit();"
                           class="text-sm text-indigo-200 hover:text-white">
                            ⏻ Log Out
                        </a>
                    </form>
                </div>
            </aside>

            <!-- KONTEN -->
            <div class="flex-1 flex flex-col overflow-hidden">
                <!-- HEADER -->
                <header class="bg-white shadow-md">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>

                <!-- SLOT UTAMA -->
                <main class="flex-1 overflow-y-auto p-6 bg-gray-50">
                    {{ $slot }}
                </main>
            </div>
        </div>

        @stack('scripts')
    </body>
</html>
