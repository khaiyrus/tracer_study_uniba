<!-- Statistik Tracer Study Section -->
<div class="bg-gray-50 py-12 lg:py-16">
    <div class="container mx-auto px-4">
        
        <!-- Year Tabs -->
        <div class="flex flex-wrap justify-center gap-3 mb-8">
            <button onclick="changeYear(2024)" id="tab-2024" class="year-tab year-tab-active px-6 py-2.5 rounded-full font-bold text-sm lg:text-base transition-all duration-300 shadow-md hover:shadow-lg">
                2024
            </button>
            <button onclick="changeYear(2023)" id="tab-2023" class="year-tab px-6 py-2.5 rounded-full font-bold text-sm lg:text-base transition-all duration-300 shadow-md hover:shadow-lg" style="background-color: #6b7280; color: white;">
                2023
            </button>
            <button onclick="changeYear(2022)" id="tab-2022" class="year-tab px-6 py-2.5 rounded-full font-bold text-sm lg:text-base transition-all duration-300 shadow-md hover:shadow-lg" style="background-color: #6b7280; color: white;">
                2022
            </button>
            <button onclick="changeYear(2021)" id="tab-2021" class="year-tab px-6 py-2.5 rounded-full font-bold text-sm lg:text-base transition-all duration-300 shadow-md hover:shadow-lg" style="background-color: #6b7280; color: white;">
                2021
            </button>
            <button onclick="changeYear(2020)" id="tab-2020" class="year-tab px-6 py-2.5 rounded-full font-bold text-sm lg:text-base transition-all duration-300 shadow-md hover:shadow-lg" style="background-color: #6b7280; color: white;">
                2020
            </button>
        </div>

        <!-- Header Section with Year Title -->
        <div class="text-center mb-8 px-4 py-8 rounded-xl" style="background: linear-gradient(135deg, #1e3a8a 0%, #334155 100%);">
            <h2 class="text-2xl lg:text-4xl font-black text-white mb-2" id="year-title">Hasil Pelaksanaan Tracer Study Tahun 2024</h2>
            <p class="text-base lg:text-lg text-gray-200 font-semibold" id="year-subtitle">(Responden Lulusan 2023)</p>
        </div>

        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6 mb-10">
            
            <!-- Card 1 - Lulusan -->
            <div class="rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-2" style="background: linear-gradient(135deg, #0ea5e9 0%, #06b6d4 100%);">
                <div class="p-6 lg:p-8">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-14 h-14 lg:w-16 lg:h-16 bg-white/20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                            <svg class="w-8 h-8 lg:w-10 lg:h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="text-4xl lg:text-5xl font-black text-white mb-2" id="stat-lulusan">16.184</div>
                    <div class="text-base lg:text-lg font-semibold text-white/90">Lulusan</div>
                </div>
            </div>

            <!-- Card 2 - Sudah Mengisi -->
            <div class="rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-2" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);">
                <div class="p-6 lg:p-8">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-14 h-14 lg:w-16 lg:h-16 bg-white/20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                            <svg class="w-8 h-8 lg:w-10 lg:h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="text-4xl lg:text-5xl font-black text-white mb-2" id="stat-mengisi">13.811</div>
                    <div class="text-base lg:text-lg font-semibold text-white/90">Sudah Mengisi</div>
                </div>
            </div>

            <!-- Card 3 - Belum Mengisi -->
            <div class="rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-2" style="background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);">
                <div class="p-6 lg:p-8">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-14 h-14 lg:w-16 lg:h-16 bg-white/20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                            <svg class="w-8 h-8 lg:w-10 lg:h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="text-4xl lg:text-5xl font-black text-white mb-2" id="stat-belum">2.373</div>
                    <div class="text-base lg:text-lg font-semibold text-white/90">Belum Mengisi</div>
                </div>
            </div>

            <!-- Card 4 - Responden -->
            <div class="rounded-xl shadow-lg overflow-hidden transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-2" style="background: linear-gradient(135deg, #a855f7 0%, #9333ea 100%);">
                <div class="p-6 lg:p-8">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-14 h-14 lg:w-16 lg:h-16 bg-white/20 rounded-xl flex items-center justify-center backdrop-blur-sm">
                            <svg class="w-8 h-8 lg:w-10 lg:h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="text-4xl lg:text-5xl font-black text-white mb-2" id="stat-persen">85,3%</div>
                    <div class="text-base lg:text-lg font-semibold text-white/90">Responden</div>
                </div>
            </div>
        </div>

        <!-- Chart Section -->
        <div class="bg-white rounded-xl shadow-lg p-6 lg:p-8">
            <div class="mb-6">
                <h3 class="text-xl lg:text-2xl font-bold text-gray-900 mb-2">Responden per Fakultas</h3>
                <div class="flex items-center space-x-6 text-sm">
                    <div class="flex items-center space-x-2">
                        <div class="w-4 h-4 rounded" style="background-color: #3b82f6;"></div>
                        <span class="text-gray-700 font-medium">Lulusan</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-4 h-4 rounded" style="background-color: #f59e0b;"></div>
                        <span class="text-gray-700 font-medium">Responden</span>
                    </div>
                </div>
            </div>
            
            <!-- Chart Canvas -->
            <div class="relative" style="height: 400px; max-height: 500px;">
                <canvas id="fakultasChart"></canvas>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>