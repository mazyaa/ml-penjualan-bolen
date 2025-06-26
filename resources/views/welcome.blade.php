<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Stok Bolen - Prediksi Penjualan</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    body {
      font-family: 'Inter', sans-serif;
      scroll-behavior: smooth;
    }
    /* Animasi Gradient Hero */
    .hero-gradient {
      background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
      background-size: 200% 200%;
      animation: gradient 10s ease infinite;
    }
    @keyframes gradient {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }
    /* Efek Kartu Fitur */
    .feature-card {
      transition: all 0.3s ease;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }
    .feature-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(59, 130, 246, 0.2);
    }
  </style>
</head>
<body class="bg-gray-50 text-gray-900">
  <!-- Navbar Modern -->
  <!-- Modern Blue Navbar for Roti Bolen -->
<header class="bg-white/90 backdrop-blur-sm shadow-sm sticky top-0 z-50 border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center">
    <!-- Logo Group -->
    <div class="flex items-center space-x-3">
      <!-- Bread/Pastry Icon -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />
      </svg>

      <!-- Brand Name -->
      <div>
        <h3 class="text-xl font-bold">Bolen<span class="text-blue-400">Crispy</span></h3>
      </div>
    </div>

    <!-- Navigation -->
    <nav class="hidden md:flex items-center space-x-8">
      <a href="#beranda" class="text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors duration-200 relative group">
        Beranda
        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-500 transition-all duration-300 group-hover:w-full"></span>
      </a>
      <a href="#tentang" class="text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors duration-200 relative group">
        Tentang
        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-500 transition-all duration-300 group-hover:w-full"></span>
      </a>
      <a href="#fitur" class="text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors duration-200 relative group">
        Fitur
        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-blue-500 transition-all duration-300 group-hover:w-full"></span>
      </a>
    </nav>

    <!-- Auth Buttons -->
    <div class="flex items-center space-x-4">
      <a href="/login" class="text-sm font-medium text-gray-700 hover:text-blue-600 transition-colors hidden md:block">
        Masuk
      </a>
      <a href="/register" class="text-sm font-medium bg-gradient-to-r from-blue-600 to-blue-500 text-white px-4 py-2 rounded-full shadow-sm hover:shadow-md transition-all duration-200 hover:from-blue-700 hover:to-blue-600">
        Daftar
      </a>

      <!-- Mobile Menu Button -->
      <button class="md:hidden text-gray-700 focus:outline-none">
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
    </div>
  </div>
</header>

  <!-- Hero Section Modern -->
<section id="beranda" class="bg-gradient-to-br from-blue-700 to-blue-500 text-white min-h-screen flex items-center">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
    <div class="space-y-6">
      <h1 class="text-4xl md:text-5xl font-bold leading-tight">Prediksi Penjualan Bolen</h1>
      <p class="text-lg opacity-90">Dengan algoritma <strong>Random Forest</strong> untuk memprediksi penjualan dan mengelola persediaan UKM secara cerdas.</p>
      <div class="flex space-x-4">
        <a href="/register" class="bg-white text-blue-700 font-semibold px-6 py-3 rounded-xl hover:bg-blue-100 transition">Mulai Sekarang</a>
        <a href="#fitur" class="border border-white px-6 py-3 rounded-xl hover:bg-white hover:text-blue-700 transition">Lihat Fitur</a>
      </div>
    </div>
    <div class="flex justify-center">
      <div class="text-center py-10">
        <img src="{{ asset('images/gambar 1.webp') }}"
             alt="Bolen Crispy"
             class="w-full max-w-xl mx-auto rounded-xl shadow-xl">
      </div>
    </div>
  </div>
</section>

  <!-- Tentang Sistem -->
  <section id="tentang" class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6">
      <div class="text-center mb-16">
        <span class="inline-block text-blue-600 font-medium mb-3">Tentang Kami</span>
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Sistem Prediksi Berbasis AI</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
          Solusi cerdas untuk membantu UKM Bolen Crispy mengoptimalkan produksi dan mengurangi waste bahan baku.
        </p>
      </div>
      <div class="grid md:grid-cols-2 gap-12 items-center">
        <div class="space-y-6">
          <div class="flex items-start gap-4">
            <div class="bg-blue-100 p-3 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
              </svg>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-gray-900 mb-2">Teknologi Random Forest</h3>
              <p class="text-gray-600">Algoritma machine learning yang akurat untuk prediksi penjualan harian berdasarkan data historis.</p>
            </div>
          </div>
          <div class="flex items-start gap-4">
            <div class="bg-blue-100 p-3 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-gray-900 mb-2">Prediksi Real-time</h3>
              <p class="text-gray-600">Update otomatis berdasarkan perubahan data penjualan dan faktor eksternal seperti cuaca atau hari libur.</p>
            </div>
          </div>
          <div class="flex items-start gap-4">
            <div class="bg-blue-100 p-3 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-gray-900 mb-2">Optimasi Keuntungan</h3>
              <p class="text-gray-600">Minimalkan kelebihan stok dan kekurangan produksi untuk meningkatkan margin keuntungan.</p>
            </div>
          </div>
        </div>
        <div class="bg-gray-50 p-8 rounded-xl border border-gray-200 shadow-sm">
          <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Data Analysis" class="w-full h-auto rounded-lg shadow">
        </div>
      </div>
    </div>
  </section>

  <!-- Fitur Unggulan -->
  <section id="fitur" class="py-20 bg-blue-50">
    <div class="max-w-6xl mx-auto px-6">
      <div class="text-center mb-16">
        <span class="inline-block text-blue-600 font-medium mb-3">Fitur Kami</span>
        <h2 class="text-3xl font-bold text-gray-900 mb-4">Kemampuan Sistem</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">
          Semua yang Anda butuhkan untuk mengelola penjualan Bolen Crispy secara efisien.
        </p>
      </div>
      <div class="grid md:grid-cols-3 gap-6">
        <!-- Fitur 1 -->
        <div class="feature-card bg-white p-6 rounded-xl border border-gray-200">
          <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-2">Dashboard Real-time</h3>
          <p class="text-gray-600">Pantau semua metrik penjualan dan stok dalam satu tampilan intuitif.</p>
        </div>
        <!-- Fitur 2 -->
        <div class="feature-card bg-white p-6 rounded-xl border border-gray-200">
          <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-2">Prediksi 7 Hari</h3>
          <p class="text-gray-600">Perkiraan penjualan harian dengan akurasi hingga 90%.</p>
        </div>
        <!-- Fitur 3 -->
        <div class="feature-card bg-white p-6 rounded-xl border border-gray-200">
          <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-2">Laporan Otomatis</h3>
          <p class="text-gray-600">Generate laporan bulanan dengan satu klik untuk analisis mendalam.</p>
        </div>
        <!-- Fitur 4 -->
        <div class="feature-card bg-white p-6 rounded-xl border border-gray-200">
          <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-2">Analisis Profit</h3>
          <p class="text-gray-600">Breakdown keuntungan per item dan saran optimalisasi harga.</p>
        </div>
        <!-- Fitur 5 -->
        <div class="feature-card bg-white p-6 rounded-xl border border-gray-200">
          <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-2">Notifikasi Stok</h3>
          <p class="text-gray-600">Peringatan otomatis ketika stok hampir habis atau berlebih.</p>
        </div>
        <!-- Fitur 6 -->
        <div class="feature-card bg-white p-6 rounded-xl border border-gray-200">
          <div class="bg-blue-100 w-12 h-12 rounded-lg flex items-center justify-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
            </svg>
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-2">Keamanan Data</h3>
          <p class="text-gray-600">Enkripsi end-to-end untuk melindungi data bisnis Anda.</p>
        </div>
      </div>
    </div>
  </section>


  <!-- Testimoni -->
  <section class="py-20 bg-blue-600 text-white">
    <div class="max-w-6xl mx-auto px-6">
      <div class="text-center mb-16">
        <span class="inline-block text-blue-200 font-medium mb-3">Testimoni</span>
        <h2 class="text-3xl font-bold mb-4">Apa Kata Pelanggan Kami?</h2>
        <p class="text-blue-100 max-w-2xl mx-auto">
          UKM Bolen Crispy yang telah menggunakan sistem prediksi kami.
        </p>
      </div>
      <div class="grid md:grid-cols-2 gap-8">
        <!-- Testimoni 1 -->
        <div class="bg-white/10 p-8 rounded-xl backdrop-blur-sm">
          <div class="flex items-center gap-4 mb-4">
            <img src="https://randomuser.me/api/portraits/women/32.jpg" class="w-12 h-12 rounded-full" alt="User">
            <div>
              <h4 class="font-semibold">Ibu Siti</h4>
              <p class="text-blue-200 text-sm">Pemilik Bolen Siti</p>
            </div>
          </div>
          <p class="text-blue-50">
            "Sejak menggunakan sistem prediksi ini, waste bahan baku berkurang 40% dan penjualan naik 25%. Sangat membantu!"
          </p>
          <div class="flex mt-4">
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
          </div>
        </div>
        <!-- Testimoni 2 -->
        <div class="bg-white/10 p-8 rounded-xl backdrop-blur-sm">
          <div class="flex items-center gap-4 mb-4">
            <img src="https://randomuser.me/api/portraits/men/54.jpg" class="w-12 h-12 rounded-full" alt="User">
            <div>
              <h4 class="font-semibold">Pak Budi</h4>
              <p class="text-blue-200 text-sm">Bolen Crispy Budi</p>
            </div>
          </div>
          <p class="text-blue-50">
            "Prediksinya sangat akurat! Sekarang saya bisa mempersiapkan bahan baku sesuai kebutuhan tanpa takut kekurangan atau berlebihan."
          </p>
          <div class="flex mt-4">
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer -->
  <footer id="kontak" class="bg-gray-900 text-white py-16">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-4 gap-8">
      <!-- Kolom 1 -->
      <div>
        <div class="flex items-center gap-2 mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />
      </svg>
          <h3 class="text-xl font-bold">Bolen<span class="text-blue-400">Crispy</span></h3>
        </div>
        <p class="text-gray-400 text-sm">
          Sistem prediksi penjualan untuk UKM Bolen Crispy di Indonesia.
        </p>
        <div class="flex space-x-4 mt-4">
          <a href="#" class="text-gray-400 hover:text-white transition">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
            </svg>
          </a>
          <a href="#" class="text-gray-400 hover:text-white transition">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"></path>
            </svg>
          </a>
          <a href="#" class="text-gray-400 hover:text-white transition">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path>
            </svg>
          </a>
        </div>
      </div>
      <!-- Kolom 2 -->
      <div>
        <h4 class="text-lg font-semibold mb-4">Navigasi</h4>
        <ul class="space-y-2">
          <li><a href="#beranda" class="text-gray-400 hover:text-white transition">Beranda</a></li>
          <li><a href="#tentang" class="text-gray-400 hover:text-white transition">Tentang</a></li>
          <li><a href="#fitur" class="text-gray-400 hover:text-white transition">Fitur</a></li>
        </ul>
      </div>
      <!-- Kolom 3 -->
      <div>
        <h4 class="text-lg font-semibold mb-4">Fitur</h4>
        <ul class="space-y-2">
          <li><a href="#" class="text-gray-400 hover:text-white transition">Prediksi Penjualan</a></li>
          <li><a href="#" class="text-gray-400 hover:text-white transition">Manajemen Stok</a></li>
          <li><a href="#" class="text-gray-400 hover:text-white transition">Analisis Keuntungan</a></li>
          <li><a href="#" class="text-gray-400 hover:text-white transition">Laporan Harian</a></li>
          <li><a href="#" class="text-gray-400 hover:text-white transition">Integrasi Pembayaran</a></li>
        </ul>
      </div>
      <!-- Kolom 4 -->
      <div>
        <h4 class="text-lg font-semibold mb-4">Kontak Kami</h4>
        <address class="text-gray-400 not-italic">
          <p class="mb-2">Jl. Serang Banten No. 123</p>
          <p class="mb-2">Email: info@bolenai.com</p>
          <p class="mb-2">Telp: +62 838 1264 9574</p>
          <p>Jam Operasional: 08.00 - 17.00 WIB</p>
        </address>
      </div>
    </div>
    <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-500 text-sm">
      <p>&copy; 2025 Bolen. All rights reserved.</p>
    </div>
  </footer>
</body>
</html>
