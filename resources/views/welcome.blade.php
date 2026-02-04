<!DOCTYPE html>
<html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', 'Tracer Study - Universitas Brawijaya')</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
            rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('build/assets/img/logo.png') }}" type="image/png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body class="company">
        <nav class="sticky top-0 z-50 bg-white/95 backdrop-blur-sm shadow-sm border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <!-- Logo -->
                    <div class="flex items-center space-x-3">
                        <a href="{{ url('/') }}" class="flex items-center space-x-3">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center shadow-lg">
                                <img src="{{ asset('build/assets/img/logo.png') }}" alt="Logo UNIBA"
                                    class="w-10 h-10 rounded-md object-cover transition-transform group-hover:scale-110" />
                            </div>
                            <div>
                                <div class="font-bold text-gray-800 text-sm">TRACER STUDY</div>
                                <div class="text-xs text-gray-500">Universitas KH.Bahaudin Mudhary Madura</div>
                            </div>
                        </a>
                    </div>

                    <!-- Desktop Menu -->
                    <div class="hidden lg:flex items-center space-x-1">
                        <a href="{{ route('home') }}"
                            class="navbar-link {{ request()->routeIs('home') ? 'navbar-link-active' : 'navbar-link-desktop' }}">
                            Beranda
                        </a>
                        <a href="{{ route('survey') }}"
                            class="navbar-link {{ request()->routeIs('survey*') ? 'navbar-link-active' : 'navbar-link-desktop' }}">
                            Pengisian
                        </a>
                        <a href="{{ route('questionnaire') }}"
                            class="navbar-link {{ request()->routeIs('questionnaire*') ? 'navbar-link-active' : 'navbar-link-desktop' }}">
                            Kuesioner
                        </a>
                        <a href="{{ route('statistics') }}"
                            class="navbar-link {{ request()->routeIs('statistics') ? 'navbar-link-active' : 'navbar-link-desktop' }}">
                            Statistik
                        </a>
                        <a href="{{ route('contact') }}"
                            class="navbar-link {{ request()->routeIs('contact') ? 'navbar-link-active' : 'navbar-link-desktop' }}">
                            Kontak
                        </a>

                        <!-- Auth Links -->
                        @auth
                            <a href="{{ route('dashboard') }}" class="navbar-link navbar-link-desktop">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="btn-secondary text-sm">
                                Login
                            </a>
                        @endauth
                    </div>

                    <!-- Hamburger Button for Mobile -->
                    <button id="hamburger-btn"
                        class="lg:hidden p-2 rounded-lg text-gray-600 hover:bg-gray-100 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2"
                        aria-label="Toggle menu">
                        <svg id="hamburger-icon" class="w-6 h-6" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Mobile Menu -->
                <div id="mobile-menu" class="hidden pb-4 space-y-1 lg:hidden transition-all duration-300 ease-in-out">
                    <a href="{{ route('home') }}"
                        class="navbar-link-mobile {{ request()->routeIs('home') ? 'navbar-link-active' : '' }}">
                        Beranda
                    </a>
                    <a href="{{ route('survey') }}"
                        class="navbar-link-mobile {{ request()->routeIs('survey*') ? 'navbar-link-active' : '' }}">
                        Pengisian
                    </a>
                    <a href="{{ route('questionnaire') }}"
                        class="navbar-link-mobile {{ request()->routeIs('questionnaire*') ? 'navbar-link-active' : '' }}">
                        Kuesioner
                    </a>
                    <a href="{{ route('statistics') }}"
                        class="navbar-link-mobile {{ request()->routeIs('statistics') ? 'navbar-link-active' : '' }}">
                        Statistik
                    </a>
                    <a href="{{ route('contact') }}"
                        class="navbar-link-mobile {{ request()->routeIs('contact') ? 'navbar-link-active' : '' }}">
                        Kontak
                    </a>

                    <!-- Auth Links for Mobile -->
                    @auth
                        <div class="pt-2 border-t border-gray-200">
                            <a href="{{ route('dashboard') }}" class="navbar-link-mobile">
                                Dashboard
                            </a>
                            <form method="POST" action="{{ route('logout') }}" class="mt-1">
                                @csrf
                                <button type="submit"
                                    class="w-full text-left navbar-link-mobile text-red-600 hover:bg-red-50">
                                    Logout
                                </button>
                            </form>
                        </div>
                    @else
                        <div class="pt-2 border-t border-gray-200">
                            <a href="{{ route('login') }}" class="block btn-primary text-center">
                                Login
                            </a>
                        </div>
                    @endauth
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="relative py-16 lg:py-24 bg-gradient-to-br from-indigo-500 to-purple-700 overflow-hidden">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-full mb-6 animate-float">
                        <i class="fas fa-bell text-yellow-300 text-sm"></i>
                        <span class="text-white text-sm font-medium">Sistem Tracer Study Online</span>
                    </div>

                    <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-4 leading-tight">
                        Pengisian Tracer Study<br />
                        <span class="text-yellow-300">Universitas KH.Bahaudin Mudhary Madura</span>
                        UNIBA
                    </h1>

                    <p class="text-white/90 text-base sm:text-lg mb-8 max-w-2xl mx-auto">
                        Bantu kami meningkatkan kualitas pendidikan dengan mengisi kuesioner tracer study
                    </p>

                    <!-- Search Box -->
                    <div class="max-w-2xl mx-auto">
                        <div class="flex flex-col sm:flex-row gap-2 bg-white rounded-xl p-2 shadow-2xl">
                            <input type="text" placeholder="Cari informasi..."
                                class="flex-1 px-4 py-3 rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-purple-500 text-sm">
                            <button
                                class="bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white px-6 py-3 rounded-lg font-medium transition-all duration-300 flex items-center justify-center text-sm shadow-lg">
                                <i class="fas fa-search mr-2"></i>
                                Cari
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Info Section -->
        <section class="py-12 lg:py-16 bg-white">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-10">
                    <span class="text-purple-600 font-semibold text-sm uppercase tracking-wide">Tautan Kuesioner</span>
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mt-2">Bagi Responden Tracer Study</h2>
                    <div class="h-px w-24 mx-auto mt-4 bg-gradient-to-r from-transparent via-gray-300 to-transparent">
                    </div>
                </div>

                <!-- Cards Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <div
                        class="bg-white rounded-2xl shadow-md hover:shadow-xl overflow-hidden border border-gray-100 transition-all duration-300 hover:-translate-y-2">
                        <div
                            class="h-32 bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 bg-black/10"></div>
                            <i class="fas fa-user-graduate text-white text-4xl relative z-10"></i>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Kuesioner Alumni</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Isi kuesioner untuk alumni dan bantu
                                kami meningkatkan kualitas pendidikan.</p>
                            <a href="#"
                                class="inline-flex items-center text-indigo-600 font-semibold hover:text-indigo-800 transition-all duration-300 text-sm group">
                                Isi Sekarang
                                <i
                                    class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="bg-white rounded-2xl shadow-md hover:shadow-xl overflow-hidden border border-gray-100 transition-all duration-300 hover:-translate-y-2">
                        <div
                            class="h-32 bg-gradient-to-br from-green-500 to-teal-600 flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 bg-black/10"></div>
                            <i class="fas fa-building text-white text-4xl relative z-10"></i>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Pengguna Lulusan</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Penilaian dari perusahaan/instansi
                                pengguna lulusan Universitas KH.Bahaudin Mudhary Madura.</p>
                            <a href="#"
                                class="inline-flex items-center text-green-600 font-semibold hover:text-green-800 transition-all duration-300 text-sm group">
                                Isi Sekarang
                                <i
                                    class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="bg-white rounded-2xl shadow-md hover:shadow-xl overflow-hidden border border-gray-100 transition-all duration-300 hover:-translate-y-2">
                        <div
                            class="h-32 bg-gradient-to-br from-purple-500 to-pink-600 flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 bg-black/10"></div>
                            <i class="fas fa-chart-line text-white text-4xl relative z-10"></i>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Statistik & Laporan</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Lihat hasil dan analisis data tracer
                                study yang telah dikumpulkan.</p>
                            <a href="#"
                                class="inline-flex items-center text-purple-600 font-semibold hover:text-purple-800 transition-all duration-300 text-sm group">
                                Lihat Detail
                                <i
                                    class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div
                        class="bg-white rounded-2xl shadow-md hover:shadow-xl overflow-hidden border border-gray-100 transition-all duration-300 hover:-translate-y-2">
                        <div
                            class="h-32 bg-gradient-to-br from-orange-500 to-red-600 flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 bg-black/10"></div>
                            <i class="fas fa-file-download text-white text-4xl relative z-10"></i>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Unduh Data</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Unduh data tracer study untuk
                                keperluan penelitian dan evaluasi.</p>
                            <a href="#"
                                class="inline-flex items-center text-orange-600 font-semibold hover:text-orange-800 transition-all duration-300 text-sm group">
                                Unduh Sekarang
                                <i
                                    class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div
                        class="bg-white rounded-2xl shadow-md hover:shadow-xl overflow-hidden border border-gray-100 transition-all duration-300 hover:-translate-y-2">
                        <div
                            class="h-32 bg-gradient-to-br from-cyan-500 to-blue-600 flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 bg-black/10"></div>
                            <i class="fas fa-question-circle text-white text-4xl relative z-10"></i>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Bantuan & Panduan</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Butuh bantuan dalam mengisi? Lihat
                                panduan lengkap di sini.</p>
                            <a href="#"
                                class="inline-flex items-center text-cyan-600 font-semibold hover:text-cyan-800 transition-all duration-300 text-sm group">
                                Lihat Panduan
                                <i
                                    class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Card 6 -->
                    <div
                        class="bg-white rounded-2xl shadow-md hover:shadow-xl overflow-hidden border border-gray-100 transition-all duration-300 hover:-translate-y-2">
                        <div
                            class="h-32 bg-gradient-to-br from-yellow-500 to-orange-600 flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 bg-black/10"></div>
                            <i class="fas fa-headset text-white text-4xl relative z-10"></i>
                        </div>
                        <div class="p-5">
                            <h3 class="text-lg font-bold text-gray-800 mb-2">Hubungi Kami</h3>
                            <p class="text-gray-600 text-sm mb-4 leading-relaxed">Ada pertanyaan? Hubungi tim tracer
                                study untuk info lebih lanjut.</p>
                            <a href="#"
                                class="inline-flex items-center text-yellow-600 font-semibold hover:text-yellow-800 transition-all duration-300 text-sm group">
                                Kontak Kami
                                <i
                                    class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div
            class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">

            <!-- Left Section - Videos -->
            <div class="space-y-6">
                <!-- Video 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-all hover:shadow-xl">
                    <div class="relative"
                        style="padding-bottom: 56.25%; background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);">
                        <div class="absolute inset-0 flex flex-col justify-between p-6">
                            <div>
                                <div
                                    class="inline-block bg-yellow-400 text-gray-900 px-4 py-2 rounded-md font-bold text-sm lg:text-base mb-3">
                                    ALUR PENGISIAN<br>
                                    TRACER STUDY<br>
                                    MELALUI SINAT
                                </div>
                                <div
                                    class="bg-red-600 text-white px-3 py-1 rounded-md inline-block text-xs lg:text-sm font-semibold">
                                    LULUSAN 2021, 2022, dst.
                                </div>
                            </div>
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                <button
                                    class="bg-white rounded-full p-4 lg:p-6 shadow-2xl hover:scale-110 transition-transform">
                                    <svg class="w-8 h-8 lg:w-12 lg:h-12 text-blue-900" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <img src="/placeholder-video1.jpg" alt="Video Thumbnail"
                            class="absolute inset-0 w-full h-full object-cover opacity-20">
                    </div>
                </div>

                <!-- Video 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-all hover:shadow-xl">
                    <div class="relative"
                        style="padding-bottom: 56.25%; background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);">
                        <div class="absolute inset-0 flex flex-col justify-between p-6">
                            <div>
                                <h3 class="text-white text-2xl lg:text-4xl font-black uppercase"
                                    style="text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">
                                    SERBA-SERBI<br>
                                    TRACER<br>
                                    STUDY UNIBA
                                </h3>
                            </div>
                            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                <button
                                    class="bg-white rounded-full p-4 lg:p-6 shadow-2xl hover:scale-110 transition-transform">
                                    <svg class="w-8 h-8 lg:w-12 lg:h-12 text-yellow-600" fill="currentColor"
                                        viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <img src="/placeholder-video2.jpg" alt="Video Thumbnail"
                            class="absolute inset-0 w-full h-full object-cover opacity-20">
                    </div>
                </div>

                <!-- Video Button -->
                <div class="flex justify-center lg:justify-start">
                    <a href="#"
                        class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg flex items-center space-x-2 transition-colors shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M10 15l5.19-3L10 9v6m11.56-7.83c.13.47.22 1.1.28 1.9.07.8.1 1.49.1 2.09L22 12c0 2.19-.16 3.8-.44 4.83-.25.9-.83 1.48-1.73 1.73-.47.13-1.33.22-2.65.28-1.3.07-2.49.1-3.59.1L12 19c-4.19 0-6.8-.16-7.83-.44-.9-.25-1.48-.83-1.73-1.73-.13-.47-.22-1.1-.28-1.9-.07-.8-.1-1.49-.1-2.09L2 12c0-2.19.16-3.8.44-4.83.25-.9.83-1.48 1.73-1.73.47-.13 1.33-.22 2.65-.28 1.3-.07 2.49-.1 3.59-.1L12 5c4.19 0 6.8.16 7.83.44.9.25 1.48.83 1.73 1.73z" />
                        </svg>
                        <span class="font-semibold">Video Lainnya</span>
                    </a>
                </div>
            </div>

            <!-- Right Section - Information -->
            <div class="space-y-8">
                <!-- Title -->
                <div>
                    <h1 class="text-3xl lg:text-5xl font-black text-blue-900 mb-4">STUDI PELACAK</h1>
                    <h2 class="text-xl lg:text-2xl font-bold text-gray-700 mb-6">Definisi dan Responden</h2>

                    <p class="text-gray-700 leading-relaxed text-justify mb-6">
                        Tracer Study UNIBA adalah studi pelacakan jejak alumni UNIBA yang dilakukan beberapa bulan/tahun
                        setelah lulus dalam rangka mendapat umpan balik dari alumni guna menyampaikan proses pelayanan
                        dan memberikan masukan kepada Universitas KH.Bahaudin Mudhary Madura. Tracer Study UNIBA
                        menggunakan target responden seluruh populasi lulusan tahun tertentu dari Universitas
                        KH.Bahaudin Mudhary Madura. Simak video UNIBA berikut untuk lebih memahami Tracer Study UNIBA.
                    </p>

                    <!-- Program Types Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                        {{-- <div class="flex items-start space-x-2">
                            <svg class="w-5 h-5 text-green-600 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-800 font-medium">Diploma Program</span>
                        </div> --}}
                        <div class="flex items-start space-x-2">
                            <svg class="w-5 h-5 text-green-600 mt-1 flex-shrink-0" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-800 font-medium">Program Magister</span>
                        </div>
                        <div class="flex items-start space-x-2">
                            <svg class="w-5 h-5 text-green-600 mt-1 flex-shrink-0" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-800 font-medium">Program Sarjana</span>
                        </div>
                        {{-- <div class="flex items-start space-x-2">
                            <svg class="w-5 h-5 text-green-600 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-800 font-medium">Program Doktor</span>
                        </div>
                        <div class="flex items-start space-x-2">
                            <svg class="w-5 h-5 text-green-600 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-800 font-medium">Program Profesi</span>
                        </div>
                        <div class="flex items-start space-x-2">
                            <svg class="w-5 h-5 text-green-600 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                            <span class="text-gray-800 font-medium">Spesialis Program</span>
                        </div> --}}
                    </div>
                </div>

                <!-- Statistics -->
                <div class="grid grid-cols-2 gap-6">
                    <div
                        class="bg-white rounded-lg shadow-lg p-6 text-center transform transition-all hover:shadow-xl hover:-translate-y-1">
                        <div class="text-4xl lg:text-6xl font-black text-blue-900 mb-2">221</div>
                        <div class="text-gray-700 font-bold uppercase tracking-wide">Program Studi</div>
                    </div>
                    <div
                        class="bg-white rounded-lg shadow-lg p-6 text-center transform transition-all hover:shadow-xl hover:-translate-y-1">
                        <div class="text-4xl lg:text-6xl font-black text-blue-900 mb-2">18</div>
                        <div class="text-gray-700 font-bold uppercase tracking-wide">Fakultas</div>
                    </div>
                </div>

                <!-- CTA Button -->
                <div class="flex justify-center lg:justify-start">
                    <a href="#"
                        class="bg-yellow-400 hover:bg-yellow-500 text-gray-900 px-8 py-4 rounded-lg font-bold text-lg flex items-center space-x-2 transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        <span>Isi Kuesioner</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Manfaat dan Tujuan Section -->
        <div class="container mx-auto px-4 py-12 lg:py-16">
            <div
                class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">

                <!-- Left Section - Manfaat dan Tujuan -->
                <div class="space-y-8">
                    <!-- Title -->
                    <div>
                        <h2 class="text-3xl lg:text-4xl font-black text-blue-900 mb-3">STUDI PELACAK</h2>
                        <h3 class="text-xl lg:text-2xl font-bold text-gray-700">Manfaat dan Tujuan</h3>
                    </div>

                    <!-- Benefits List -->
                    <div class="space-y-6">
                        <!-- Item 1 - Akreditasi Perguruan Tinggi -->
                        <div class="flex items-start space-x-4 group">
                            <div class="flex-shrink-0 w-14 h-14 lg:w-16 lg:h-16 rounded-full flex items-center justify-center transform transition-all group-hover:scale-110"
                                style="background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);">
                                <svg class="w-7 h-7 lg:w-8 lg:h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-lg lg:text-xl font-bold text-gray-900 mb-2">Akreditasi Perguruan Tinggi
                                </h4>
                                <p class="text-gray-700 leading-relaxed text-justify">
                                    Pengisian Tracer Study digunakan sebagai dasar perhitungan pencapaian Indikator
                                    Kinerja Utama yang mempengaruhi pemeringkatan perguruan tinggi.
                                </p>
                            </div>
                        </div>

                        <!-- Item 2 - Evaluasi Relevansi Kurikulum -->
                        <div class="flex items-start space-x-4 group">
                            <div class="flex-shrink-0 w-14 h-14 lg:w-16 lg:h-16 rounded-full flex items-center justify-center transform transition-all group-hover:scale-110"
                                style="background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);">
                                <svg class="w-7 h-7 lg:w-8 lg:h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-lg lg:text-xl font-bold text-gray-900 mb-2">Evaluasi Relevansi
                                    Kurikulum dan Dunia Kerja</h4>
                                <p class="text-gray-700 leading-relaxed text-justify">
                                    Data Tracer Study digunakan sebagai bahan evaluasi kurikulum pada setiap program
                                    studi agar sesuai dengan kebutuhan dunia kerja sekarang.
                                </p>
                            </div>
                        </div>

                        <!-- Item 3 - Membangun Jejaring Alumni -->
                        <div class="flex items-start space-x-4 group">
                            <div class="flex-shrink-0 w-14 h-14 lg:w-16 lg:h-16 rounded-full flex items-center justify-center transform transition-all group-hover:scale-110"
                                style="background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);">
                                <svg class="w-7 h-7 lg:w-8 lg:h-8 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-lg lg:text-xl font-bold text-gray-900 mb-2">Membangun Jejaring Alumni
                                </h4>
                                <p class="text-gray-700 leading-relaxed text-justify">
                                    Data Tracer Study dapat digunakan untuk mengetahui persebaran alumni UNIBA dalam
                                    rangka membangun jaringan komunitas alumni UNIBA di Indonesia ataupun di dunia.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Section - Cards -->
                <div class="space-y-6 lg:space-y-8 ">
                    <!-- Peserta Aktif Card -->
                    <div class="relative overflow-hidden rounded-2xl shadow-xl transform transition-all hover:shadow-2xl hover:-translate-y-2"
                        style="background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%);">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
                            <!-- Text Content -->
                            <div class="p-6 lg:p-8 flex flex-col justify-center">
                                <h3 class="text-2xl lg:text-3xl font-black text-white mb-4">Peserta Aktif</h3>
                                <p class="text-white text-sm lg:text-base leading-relaxed">
                                    Alumni dapat berkontribusi aktif untuk memberikan masukan dan saran pada almamater.
                                </p>
                            </div>
                            <!-- Image -->
                            <div class="h-64 md:h-auto relative">
                                <img src="/placeholder-library.jpg" alt="Students studying"
                                    class="absolute inset-0 w-full h-full object-cover">
                                <div class="absolute inset-0"
                                    style="background: linear-gradient(to right, rgba(30, 58, 138, 0.3), transparent);">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bangun Jaringan Card -->
                    <div class="relative overflow-hidden rounded-2xl shadow-xl transform transition-all hover:shadow-2xl hover:-translate-y-2"
                        style="background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
                            <!-- Image -->
                            <div class="h-64 md:h-auto relative order-2 md:order-1">
                                <img src="/placeholder-collaboration.jpg" alt="Alumni collaboration"
                                    class="absolute inset-0 w-full h-full object-cover">
                                <div class="absolute inset-0"
                                    style="background: linear-gradient(to left, rgba(251, 191, 36, 0.3), transparent);">
                                </div>
                            </div>
                            <!-- Text Content -->
                            <div class="p-6 lg:p-8 flex flex-col justify-center order-1 md:order-2">
                                <h3 class="text-2xl lg:text-3xl font-black text-gray-900 mb-4">Bangun Jaringan</h3>
                                <p class="text-gray-900 text-sm lg:text-base leading-relaxed">
                                    Data yang diberikan akan menjadi dasar dari pemetaan sebaran alumni dan memperkuat
                                    jejaring.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Berita Terbaru Section -->
        <div class="bg-gray-50 py-12 lg:py-16 items-center max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 ">
            <div class="container mx-auto px-4">
                <!-- Section Title -->
                <div class="text-center mb-10 lg:mb-12">
                    <h2 class="text-3xl lg:text-5xl font-black text-blue-900 mb-3">BERITA TERBARU</h2>
                    <p class="text-lg lg:text-xl text-gray-700 font-semibold">Terkait Pelaksanaan Tracer Study</p>
                </div>

                <!-- News Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8 mb-10">

                    <!-- News Card 1 -->
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 group">
                        <!-- Image -->
                        <div class="relative overflow-hidden" style="height: 250px;">
                            <img src="/news-1.jpg" alt="UB Teguhkan Sinergi"
                                class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0"
                                style="background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.3) 100%);">
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-6">
                            <!-- Date -->
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <span class="font-medium">23 Oktober 2025</span>
                            </div>

                            <!-- Title -->
                            <h3
                                class="text-lg lg:text-xl font-bold text-gray-900 mb-4 leading-tight group-hover:text-blue-900 transition-colors">
                                UB Teguhkan Sinergi Akademik dan Alumni untuk Pemenuhan IKU 1
                            </h3>

                            <!-- Read More Link -->
                            <a href="#"
                                class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold transition-colors">
                                <span>Baca Selengkapnya</span>
                                <svg class="w-4 h-4 ml-2 transform transition-transform group-hover:translate-x-1"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- News Card 2 -->
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 group">
                        <!-- Image -->
                        <div class="relative overflow-hidden" style="height: 250px;">
                            <img src="/news-2.jpg" alt="DPKA Berbagi Pengalaman"
                                class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0"
                                style="background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.3) 100%);">
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-6">
                            <!-- Date -->
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <span class="font-medium">7 Mei 2025</span>
                            </div>

                            <!-- Title -->
                            <h3
                                class="text-lg lg:text-xl font-bold text-gray-900 mb-4 leading-tight group-hover:text-blue-900 transition-colors">
                                DPKA Berbagi Pengalaman Tracer Study ke UISI
                            </h3>

                            <!-- Read More Link -->
                            <a href="#"
                                class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold transition-colors">
                                <span>Baca Selengkapnya</span>
                                <svg class="w-4 h-4 ml-2 transform transition-transform group-hover:translate-x-1"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- News Card 3 -->
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 group">
                        <!-- Image -->
                        <div class="relative overflow-hidden" style="height: 250px;">
                            <img src="/news-3.jpg" alt="Workshop dan Sosialisasi"
                                class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0"
                                style="background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.3) 100%);">
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-6">
                            <!-- Date -->
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <span class="font-medium">7 Februari 2025</span>
                            </div>

                            <!-- Title -->
                            <h3
                                class="text-lg lg:text-xl font-bold text-gray-900 mb-4 leading-tight group-hover:text-blue-900 transition-colors">
                                Workshop dan Sosialisasi Pelaksanaan Tracer Study Tahun 2025: Meningkatkan Kualitas
                            </h3>

                            <!-- Read More Link -->
                            <a href="#"
                                class="inline-flex items-center text-blue-600 hover:text-blue-800 font-semibold transition-colors">
                                <span>Baca Selengkapnya</span>
                                <svg class="w-4 h-4 ml-2 transform transition-transform group-hover:translate-x-1"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- View More Button -->
                <div class="flex justify-center">
                    <a href="#"
                        class="inline-flex items-center px-8 py-4 text-lg font-bold text-gray-900 rounded-lg shadow-lg transform transition-all duration-300 hover:shadow-xl hover:-translate-y-1"
                        style="background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);">
                        <span>Berita Lainnya</span>
                        <svg class="w-5 h-5 ml-2 transform transition-transform group-hover:translate-x-1"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="bg-gray-900 text-gray-300 pt-12 pb-6">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                    <!-- About -->
                    <div>
                        <div class="flex items-center space-x-2 mb-4">
                            <div class="w-12 h-12 rounded-full flex items-center justify-center">
                                <img src="{{ asset('build/assets/img/logo.png') }}" alt="Logo UNIBA"
                                    class="w-10 h-10 rounded-md object-cover transition-transform group-hover:scale-10" />
                            </div>
                            <span class="text-white font-bold text-sm">Tracer Study UNIBA</span>
                        </div>
                        <p class="text-sm text-gray-400 leading-relaxed mb-4">
                            Sistem informasi tracer study untuk memantau perkembangan alumni Universitas KH.Bahaudin
                            Mudahry Madura.
                        </p>
                        <div class="flex space-x-3">
                            <a href="#"
                                class="w-8 h-8 bg-gray-800 hover:bg-purple-600 rounded-lg flex items-center justify-center transition-all duration-300">
                                <i class="fab fa-facebook-f text-sm"></i>
                            </a>
                            <a href="#"
                                class="w-8 h-8 bg-gray-800 hover:bg-purple-600 rounded-lg flex items-center justify-center transition-all duration-300">
                                <i class="fab fa-twitter text-sm"></i>
                            </a>
                            <a href="#"
                                class="w-8 h-8 bg-gray-800 hover:bg-purple-600 rounded-lg flex items-center justify-center transition-all duration-300">
                                <i class="fab fa-instagram text-sm"></i>
                            </a>
                            <a href="#"
                                class="w-8 h-8 bg-gray-800 hover:bg-purple-600 rounded-lg flex items-center justify-center transition-all duration-300">
                                <i class="fab fa-linkedin-in text-sm"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div>
                        <h3 class="text-white font-semibold mb-4 text-sm">Menu Utama</h3>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#"
                                    class="hover:text-purple-400 transition-all duration-300 flex items-center"><i
                                        class="fas fa-chevron-right text-xs mr-2"></i>Pengisian Tracer Study</a></li>
                            <li><a href="#"
                                    class="hover:text-purple-400 transition-all duration-300 flex items-center"><i
                                        class="fas fa-chevron-right text-xs mr-2"></i>Daftar Kuesioner</a></li>
                            <li><a href="#"
                                    class="hover:text-purple-400 transition-all duration-300 flex items-center"><i
                                        class="fas fa-chevron-right text-xs mr-2"></i>Alur Tracer Study</a></li>
                            <li><a href="#"
                                    class="hover:text-purple-400 transition-all duration-300 flex items-center"><i
                                        class="fas fa-chevron-right text-xs mr-2"></i>Unduh Data</a></li>
                            <li><a href="#"
                                    class="hover:text-purple-400 transition-all duration-300 flex items-center"><i
                                        class="fas fa-chevron-right text-xs mr-2"></i>Statistik</a></li>
                        </ul>
                    </div>

                    <!-- Contact Info -->
                    <div>
                        <h3 class="text-white font-semibold mb-4 text-sm">Kontak</h3>
                        <ul class="space-y-3 text-sm">
                            <li class="flex items-start">
                                <i class="fas fa-map-marker-alt text-purple-500 mt-1 mr-3"></i>
                                <span class="text-gray-400">Jl. Raya Lenteng, Aredake, Batuan, Kec. Batuan, Kabupaten
                                    Sumenep, Jawa Timur 69451</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-phone text-purple-500 mr-3"></i>
                                <span class="text-gray-400">(0341) 551611</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-envelope text-purple-500 mr-3"></i>
                                <span class="text-gray-400">tracerstudy@unibamadura.ac.id</span>
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-clock text-purple-500 mr-3"></i>
                                <span class="text-gray-400">Senin - Jumat: 08:00 - 16:00</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Map -->
                    <div>
                        <h3 class="text-white font-semibold mb-4 text-sm">Lokasi Kami</h3>
                        <div class="embed-map-responsive">
                            <div class="embed-map-container"><iframe class="embed-map-frame" frameborder="0"
                                    scrolling="no" marginheight="0" marginwidth="0"
                                    src="https://maps.google.com/maps?width=600&height=400&hl=en&q=Universitas%20Bahaudin%20Mudhary%20Madura%20(UNIBA%20Madura)&t=&z=14&ie=UTF8&iwloc=B&output=embed"></iframe><a
                                    href="https://sprunkiretake.net"
                                    style="font-size:2px!important;color:gray!important;position:absolute;bottom:0;left:0;z-index:1;max-height:1px;overflow:hidden">Sprunki</a>
                            </div>
                            <style>
                                .embed-map-responsive {
                                    position: relative;
                                    text-align: right;
                                    width: 100%;
                                    height: 0;
                                    padding-bottom: 66.66666666666666%;
                                }

                                .embed-map-container {
                                    overflow: hidden;
                                    background: none !important;
                                    width: 100%;
                                    height: 100%;
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                }

                                .embed-map-frame {
                                    width: 100% !important;
                                    height: 100% !important;
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                }
                            </style>
                        </div>
                    </div>
                </div>

                <!-- Bottom Footer -->
                <div class="border-t border-gray-800 pt-6">
                    <div class="flex flex-col md:flex-row justify-between items-center space-y-3 md:space-y-0">
                        <p class="text-sm text-gray-400">© 2025 Universitas KH.Bahaudin Mudahry Madura. All rights
                            reserved.</p>
                        <div class="flex space-x-6 text-sm">
                            <a href="#" class="hover:text-purple-400 transition-all duration-300">Privacy
                                Policy</a>
                            <a href="#" class="hover:text-purple-400 transition-all duration-300">Terms of
                                Service</a>
                            <a href="#" class="hover:text-purple-400 transition-all duration-300">Sitemap</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <button id="scrollToTop"
            class="fixed bottom-6 right-6 bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white w-11 h-11 rounded-full shadow-lg flex items-center justify-center transition-all duration-300 z-50">
            <i class="fas fa-chevron-up"></i>
        </button>

    </body>

</html>
