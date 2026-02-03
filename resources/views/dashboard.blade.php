<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'Tracer Study - Universitas Brawijaya')</title>
    
    <!-- Vite CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    @stack('styles')
</head>
<body class="font-sans antialiased bg-gray-50">
    <!-- Navbar -->
    <nav class="sticky top-0 z-50 bg-white/95 backdrop-blur-sm shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <a href="{{ url('/') }}" class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-indigo-600 rounded-lg flex items-center justify-center shadow-lg">
                            <i class="fas fa-graduation-cap text-white text-lg"></i>
                        </div>
                        <div>
                            <div class="font-bold text-gray-800 text-sm">TRACER STUDY</div>
                            <div class="text-xs text-gray-500">Universitas Brawijaya</div>
                        </div>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center space-x-1">
                    <a href="{{ route('home') }}" class="navbar-link {{ request()->routeIs('home') ? 'navbar-link-active' : 'navbar-link-desktop' }}">
                        Beranda
                    </a>
                    <a href="{{ route('survey') }}" class="navbar-link {{ request()->routeIs('survey*') ? 'navbar-link-active' : 'navbar-link-desktop' }}">
                        Pengisian
                    </a>
                    <a href="{{ route('questionnaire') }}" class="navbar-link {{ request()->routeIs('questionnaire*') ? 'navbar-link-active' : 'navbar-link-desktop' }}">
                        Kuesioner
                    </a>
                    <a href="{{ route('statistics') }}" class="navbar-link {{ request()->routeIs('statistics') ? 'navbar-link-active' : 'navbar-link-desktop' }}">
                        Statistik
                    </a>
                    <a href="{{ route('contact') }}" class="navbar-link {{ request()->routeIs('contact') ? 'navbar-link-active' : 'navbar-link-desktop' }}">
                        Kontak
                    </a>
                    
                    <!-- Auth Links -->
                    @auth
                        <a href="{{ route('dashboard') }}" class="navbar-link navbar-link-desktop">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="btn-primary text-sm">
                            Login
                        </a>
                    @endauth
                </div>

                <!-- Hamburger Button for Mobile -->
                <button id="hamburger-btn" class="lg:hidden p-2 rounded-lg text-gray-600 hover:bg-gray-100 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2" aria-label="Toggle menu">
                    <svg id="hamburger-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden lg:hidden pb-4 space-y-1 transition-all duration-300 ease-in-out">
                <a href="{{ route('home') }}" class="navbar-link-mobile {{ request()->routeIs('home') ? 'navbar-link-active' : '' }}">
                    Beranda
                </a>
                <a href="{{ route('survey') }}" class="navbar-link-mobile {{ request()->routeIs('survey*') ? 'navbar-link-active' : '' }}">
                    Pengisian
                </a>
                <a href="{{ route('questionnaire') }}" class="navbar-link-mobile {{ request()->routeIs('questionnaire*') ? 'navbar-link-active' : '' }}">
                    Kuesioner
                </a>
                <a href="{{ route('statistics') }}" class="navbar-link-mobile {{ request()->routeIs('statistics') ? 'navbar-link-active' : '' }}">
                    Statistik
                </a>
                <a href="{{ route('contact') }}" class="navbar-link-mobile {{ request()->routeIs('contact') ? 'navbar-link-active' : '' }}">
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
                            <button type="submit" class="w-full text-left navbar-link-mobile text-red-600 hover:bg-red-50">
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

    <!-- Main Content -->
    <main class="min-h-screen">
        <!-- Flash Messages -->
        @if(session('success'))
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
                <div class="bg-green-50 border-l-4 border-green-400 p-4">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <i class="fas fa-check-circle text-green-400"></i>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm text-green-700">{{ session('success') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="w-8 h-8 bg-gradient-to-br from-purple-500 to-indigo-600 rounded flex items-center justify-center">
                            <i class="fas fa-graduation-cap text-white"></i>
                        </div>
                        <span class="font-bold">TRACER STUDY</span>
                    </div>
                    <p class="text-gray-400 text-sm">
                        Sistem pelacakan alumni Universitas Brawijaya untuk meningkatkan kualitas pendidikan.
                    </p>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Tautan Cepat</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition">Beranda</a></li>
                        <li><a href="{{ route('survey') }}" class="hover:text-white transition">Pengisian Data</a></li>
                        <li><a href="{{ route('statistics') }}" class="hover:text-white transition">Statistik</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition">Kontak</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-semibold mb-4">Kontak</h4>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-2"></i> tracer@ub.ac.id
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone mr-2"></i> (0341) 551611
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-2"></i> Universitas Brawijaya, Malang
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400 text-sm">
                <p>&copy; {{ date('Y') }} Tracer Study Universitas Brawijaya. All rights reserved.</p>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>