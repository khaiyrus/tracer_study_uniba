
<div class="bg-white py-12 lg:py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
            <div class="space-y-8">
                
                <!-- Data Exit Survey -->
                <div class="bg-white rounded-xl shadow-lg p-6 lg:p-8 border-l-4 border-blue-500 transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
                    <h3 class="text-2xl lg:text-3xl font-black text-gray-900 mb-3">Data Exit Survey</h3>
                    <p class="text-lg text-blue-600 font-semibold mb-4">Untuk Seluruh Tahun Lulus</p>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        Klik tombol di bawah ini untuk melakukan pengambilan data hasil isian kuesioner Exit Survey.
                    </p>
                    <a href="{{ route('download.exit-survey') }}" class="inline-flex items-center px-6 py-3 font-bold text-gray-900 rounded-lg shadow-md transform transition-all duration-300 hover:shadow-xl hover:-translate-y-1" style="background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);">
                        <span>Ambil Data</span>
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Data Tracer Study -->
                <div class="bg-white rounded-xl shadow-lg p-6 lg:p-8 border-l-4 border-blue-600 transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
                    <h3 class="text-2xl lg:text-3xl font-black text-gray-900 mb-3">Data Tracer Study</h3>
                    <p class="text-lg text-blue-600 font-semibold mb-4">Untuk Seluruh Tahun Lulus</p>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        Klik tombol di bawah ini untuk melakukan pengambilan data hasil isian kuesioner Tracer Study.
                    </p>
                    <a href="{{ route('download.tracer-study') }}" class="inline-flex items-center px-6 py-3 font-bold text-gray-900 rounded-lg shadow-md transform transition-all duration-300 hover:shadow-xl hover:-translate-y-1" style="background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);">
                        <span>Ambil Data</span>
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Data Survey Kepuasan Pengguna Lulusan -->
                <div class="bg-white rounded-xl shadow-lg p-6 lg:p-8 border-l-4 border-blue-700 transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
                    <h3 class="text-2xl lg:text-3xl font-black text-gray-900 mb-3">Data Survey Kepuasan Pengguna Lulusan</h3>
                    <p class="text-lg text-blue-600 font-semibold mb-4">Untuk Seluruh Tahun Lulus</p>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        Klik tombol di bawah ini untuk melakukan pengambilan data hasil isian kuesioner Survey Kepuasan Pengguna Lulusan.
                    </p>
                    <a href="{{ route('download.user-satisfaction') }}" class="inline-flex items-center px-6 py-3 font-bold text-gray-900 rounded-lg shadow-md transform transition-all duration-300 hover:shadow-xl hover:-translate-y-1" style="background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);">
                        <span>Ambil Data</span>
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Right Section - Image -->
            <div class="order-first lg:order-last">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl transform transition-all duration-500 hover:scale-105">
                    <img src="/images/ub-campus.jpg" alt="Universitas Brawijaya Campus" class="w-full h-auto object-cover" style="min-height: 400px; max-height: 700px;">
                    
                    <!-- Overlay with gradient -->
                    <div class="absolute inset-0" style="background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.1) 100%);"></div>
                    
                    <!-- Optional: Logo overlay -->
                    <div class="absolute bottom-6 right-6 bg-white/90 backdrop-blur-sm rounded-xl p-4 shadow-xl">
                        <div class="flex items-center space-x-3">
                            <div class="w-12 h-12 rounded-lg flex items-center justify-center" style="background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-xs font-semibold text-gray-600">Download</div>
                                <div class="text-sm font-bold text-gray-900">Data Center</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
