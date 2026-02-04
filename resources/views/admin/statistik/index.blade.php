@extends('layouts.admin-sidebar')
@section('content')
<div id="statistik-page" class="space-y-6 hidden">
    <h2 class="text-2xl font-bold text-gray-900">Analisis Statistik Kuesioner</h2>
    
    <!-- Year Filter -->
    <div class="bg-white rounded-xl shadow-md p-4">
        <div class="flex flex-wrap gap-3">
            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg font-semibold">2024</button>
            <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300">2023</button>
            <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg font-semibold hover:bg-gray-300">2022</button>
        </div>
    </div>

    <!-- Charts Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <div class="bg-white rounded-xl shadow-md p-6">
            <h3 class="text-lg font-bold text-gray-900 mb-4">Response Rate per Fakultas</h3>
            <div class="h-64 flex items-center justify-center text-gray-400">
                <div class="text-center">
                    <svg class="w-16 h-16 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    <p class="text-sm">Chart.js akan ditampilkan di sini</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-md p-6">
            <h3 class="text-lg font-bold text-gray-900 mb-4">Status Pekerjaan Alumni</h3>
            <div class="h-64 flex items-center justify-center text-gray-400">
                <div class="text-center">
                    <svg class="w-16 h-16 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                    </svg>
                    <p class="text-sm">Pie Chart akan ditampilkan di sini</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Summary Cards -->
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="bg-white rounded-lg shadow p-4">
            <div class="text-2xl font-bold text-blue-600">85.3%</div>
            <div class="text-xs text-gray-500 mt-1">Response Rate</div>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
            <div class="text-2xl font-bold text-green-600">78%</div>
            <div class="text-xs text-gray-500 mt-1">Bekerja</div>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
            <div class="text-2xl font-bold text-purple-600">12%</div>
            <div class="text-xs text-gray-500 mt-1">Melanjutkan Studi</div>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
            <div class="text-2xl font-bold text-orange-600">10%</div>
            <div class="text-xs text-gray-500 mt-1">Lainnya</div>
        </div>
    </div>
</div>

<!-- Data Laporan Content -->
<div id="laporan-page" class="space-y-6 hidden">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <h2 class="text-2xl font-bold text-gray-900">Data Laporan</h2>
            <p class="text-sm text-gray-500 mt-1">Download dan export data laporan</p>
        </div>
        <button class="inline-flex items-center justify-center px-6 py-3 rounded-lg font-semibold text-white shadow-lg hover:shadow-xl" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg>
            <span>Generate Laporan</span>
        </button>
    </div>

    <!-- Report Types -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Report Card 1 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow">
            <div class="p-6">
                <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4" style="background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Laporan Tracer Study</h3>
                <p class="text-sm text-gray-600 mb-4">Data lengkap hasil tracer study tahun 2024</p>
                <div class="flex items-center justify-between text-xs text-gray-500 mb-4">
                    <span>Terakhir: 15 Jan 2024</span>
                    <span>Excel, PDF</span>
                </div>
                <button class="w-full px-4 py-2 bg-blue-50 text-blue-600 rounded-lg font-medium hover:bg-blue-100 transition-colors">
                    Download
                </button>
            </div>
        </div>

        <!-- Report Card 2 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow">
            <div class="p-6">
                <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Laporan Alumni</h3>
                <p class="text-sm text-gray-600 mb-4">Data alumni per fakultas dan tahun</p>
                <div class="flex items-center justify-between text-xs text-gray-500 mb-4">
                    <span>Terakhir: 14 Jan 2024</span>
                    <span>Excel, PDF</span>
                </div>
                <button class="w-full px-4 py-2 bg-green-50 text-green-600 rounded-lg font-medium hover:bg-green-100 transition-colors">
                    Download
                </button>
            </div>
        </div>

        <!-- Report Card 3 -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow">
            <div class="p-6">
                <div class="w-12 h-12 rounded-lg flex items-center justify-center mb-4" style="background: linear-gradient(135deg, #a855f7 0%, #7c3aed 100%);">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Laporan Statistik</h3>
                <p class="text-sm text-gray-600 mb-4">Ringkasan statistik dan analisis data</p>
                <div class="flex items-center justify-between text-xs text-gray-500 mb-4">
                    <span>Terakhir: 13 Jan 2024</span>
                    <span>Excel, PDF</span>
                </div>
                <button class="w-full px-4 py-2 bg-purple-50 text-purple-600 rounded-lg font-medium hover:bg-purple-100 transition-colors">
                    Download
                </button>
            </div>
        </div>
    </div>

    <!-- Recent Reports Table -->
    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-bold text-gray-900">Riwayat Download</h3>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">File</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Tipe</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Tanggal</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Size</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm font-medium text-gray-900">tracer-study-2024.xlsx</td>
                        <td class="px-6 py-4 text-sm text-gray-600">Excel</td>
                        <td class="px-6 py-4 text-sm text-gray-600">15 Jan 2024</td>
                        <td class="px-6 py-4 text-sm text-gray-600">2.4 MB</td>
                        <td class="px-6 py-4">
                            <button class="text-blue-600 hover:text-blue-800 font-medium text-sm">Download</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm font-medium text-gray-900">alumni-report-2024.pdf</td>
                        <td class="px-6 py-4 text-sm text-gray-600">PDF</td>
                        <td class="px-6 py-4 text-sm text-gray-600">14 Jan 2024</td>
                        <td class="px-6 py-4 text-sm text-gray-600">1.8 MB</td>
                        <td class="px-6 py-4">
                            <button class="text-blue-600 hover:text-blue-800 font-medium text-sm">Download</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm font-medium text-gray-900">statistik-summary.xlsx</td>
                        <td class="px-6 py-4 text-sm text-gray-600">Excel</td>
                        <td class="px-6 py-4 text-sm text-gray-600">13 Jan 2024</td>
                        <td class="px-6 py-4 text-sm text-gray-600">3.2 MB</td>
                        <td class="px-6 py-4">
                            <button class="text-blue-600 hover:text-blue-800 font-medium text-sm">Download</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection