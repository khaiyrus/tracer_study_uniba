@extends('layouts.admin-sidebar')
@section('content')
    <!-- User Management Content -->
<div class="space-y-6">
    
    <!-- Page Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <h2 class="text-2xl font-bold text-gray-900">User Management</h2>
            <p class="text-sm text-gray-500 mt-1">Kelola akses dan data pengguna</p>
        </div>
        <button onclick="openModal('addUser')" class="inline-flex items-center justify-center px-6 py-3 rounded-lg font-semibold text-white shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-300" style="background: linear-gradient(135deg, #10b981 0%, #059669 100%);">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
            </svg>
            <span>Tambah User</span>
        </button>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="bg-white rounded-lg shadow p-4">
            <div class="text-2xl font-bold text-blue-600">1,245</div>
            <div class="text-xs text-gray-500 mt-1">Total Users</div>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
            <div class="text-2xl font-bold text-green-600">1,123</div>
            <div class="text-xs text-gray-500 mt-1">Active</div>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
            <div class="text-2xl font-bold text-red-600">122</div>
            <div class="text-xs text-gray-500 mt-1">Inactive</div>
        </div>
        <div class="bg-white rounded-lg shadow p-4">
            <div class="text-2xl font-bold text-purple-600">45</div>
            <div class="text-xs text-gray-500 mt-1">Admin</div>
        </div>
    </div>

    <!-- Filters -->
    <div class="bg-white rounded-xl shadow-md p-4 lg:p-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="md:col-span-1">
                <input type="text" placeholder="Cari nama atau email..." class="w-full px-4 py-2.5 pl-10 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <select class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Semua Role</option>
                    <option value="admin">Admin</option>
                    <option value="alumni">Alumni</option>
                    <option value="user">User</option>
                </select>
            </div>
            <div>
                <select class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option value="">Semua Status</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Desktop Table -->
    <div class="hidden lg:block bg-white rounded-xl shadow-md overflow-hidden">
        <table class="w-full">
            <thead style="background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 100%);">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-white uppercase">No</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-white uppercase">Nama</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-white uppercase">Email</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-white uppercase">Role</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-white uppercase">Status</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-white uppercase">Tanggal Daftar</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-white uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 text-sm">1</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-white text-sm mr-3" style="background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);">
                                JD
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-gray-900">John Doe</div>
                                <div class="text-xs text-gray-500">ID: USR001</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">john.doe@ub.ac.id</td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-semibold">Admin</span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Active</span>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500">15 Jan 2024</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-2">
                            <button onclick="openModal('viewUser', 1)" class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </button>
                            <button onclick="openModal('editUser', 1)" class="p-2 text-yellow-600 hover:bg-yellow-50 rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                            </button>
                            <button onclick="confirmDelete(1)" class="p-2 text-red-600 hover:bg-red-50 rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>

                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 text-sm">2</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-white text-sm mr-3" style="background: linear-gradient(135deg, #ec4899 0%, #db2777 100%);">
                                JS
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-gray-900">Jane Smith</div>
                                <div class="text-xs text-gray-500">ID: USR002</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">jane.smith@ub.ac.id</td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-semibold">Alumni</span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Active</span>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500">14 Jan 2024</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-2">
                            <button onclick="openModal('viewUser', 2)" class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </button>
                            <button onclick="openModal('editUser', 2)" class="p-2 text-yellow-600 hover:bg-yellow-50 rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                            </button>
                            <button onclick="confirmDelete(2)" class="p-2 text-red-600 hover:bg-red-50 rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>

                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 text-sm">3</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center font-bold text-white text-sm mr-3" style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);">
                                AB
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-gray-900">Ahmad Budi</div>
                                <div class="text-xs text-gray-500">ID: USR003</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900">ahmad.budi@ub.ac.id</td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-xs font-semibold">User</span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-xs font-semibold">Inactive</span>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-500">10 Jan 2024</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-2">
                            <button onclick="openModal('viewUser', 3)" class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </button>
                            <button onclick="openModal('editUser', 3)" class="p-2 text-yellow-600 hover:bg-yellow-50 rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                            </button>
                            <button onclick="confirmDelete(3)" class="p-2 text-red-600 hover:bg-red-50 rounded-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between">
            <div class="text-sm text-gray-500">
                Menampilkan <span class="font-semibold">1-3</span> dari <span class="font-semibold">45</span> users
            </div>
            <div class="flex items-center space-x-2">
                <button class="px-3 py-2 text-sm border border-gray-300 rounded-lg hover:bg-gray-50">Previous</button>
                <button class="px-3 py-2 text-sm bg-blue-600 text-white rounded-lg">1</button>
                <button class="px-3 py-2 text-sm border border-gray-300 rounded-lg hover:bg-gray-50">2</button>
                <button class="px-3 py-2 text-sm border border-gray-300 rounded-lg hover:bg-gray-50">3</button>
                <button class="px-3 py-2 text-sm border border-gray-300 rounded-lg hover:bg-gray-50">Next</button>
            </div>
        </div>
    </div>

    <!-- Mobile Cards -->
    <div class="lg:hidden space-y-4">
        <!-- Card 1 -->
        <div class="bg-white rounded-xl shadow-md p-5">
            <div class="flex items-start justify-between mb-4">
                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center font-bold text-white text-sm mr-3" style="background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);">
                        JD
                    </div>
                    <div>
                        <div class="text-base font-bold text-gray-900">John Doe</div>
                        <div class="text-xs text-gray-500">ID: USR001</div>
                    </div>
                </div>
                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Active</span>
            </div>

            <div class="space-y-2 mb-4 text-sm">
                <div class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <span>john.doe@ub.ac.id</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-semibold">Admin</span>
                    <span class="text-xs text-gray-500">15 Jan 2024</span>
                </div>
            </div>

            <div class="flex items-center space-x-2 pt-4 border-t border-gray-200">
                <button onclick="openModal('viewUser', 1)" class="flex-1 px-4 py-2 bg-blue-50 text-blue-600 rounded-lg text-sm font-medium">Lihat</button>
                <button onclick="openModal('editUser', 1)" class="flex-1 px-4 py-2 bg-yellow-50 text-yellow-600 rounded-lg text-sm font-medium">Edit</button>
                <button onclick="confirmDelete(1)" class="px-4 py-2 bg-red-50 text-red-600 rounded-lg text-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-xl shadow-md p-5">
            <div class="flex items-start justify-between mb-4">
                <div class="flex items-center">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center font-bold text-white text-sm mr-3" style="background: linear-gradient(135deg, #ec4899 0%, #db2777 100%);">
                        JS
                    </div>
                    <div>
                        <div class="text-base font-bold text-gray-900">Jane Smith</div>
                        <div class="text-xs text-gray-500">ID: USR002</div>
                    </div>
                </div>
                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Active</span>
            </div>

            <div class="space-y-2 mb-4 text-sm">
                <div class="flex items-center text-gray-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <span>jane.smith@ub.ac.id</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-semibold">Alumni</span>
                    <span class="text-xs text-gray-500">14 Jan 2024</span>
                </div>
            </div>

            <div class="flex items-center space-x-2 pt-4 border-t border-gray-200">
                <button onclick="openModal('viewUser', 2)" class="flex-1 px-4 py-2 bg-blue-50 text-blue-600 rounded-lg text-sm font-medium">Lihat</button>
                <button onclick="openModal('editUser', 2)" class="flex-1 px-4 py-2 bg-yellow-50 text-yellow-600 rounded-lg text-sm font-medium">Edit</button>
                <button onclick="confirmDelete(2)" class="px-4 py-2 bg-red-50 text-red-600 rounded-lg text-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Pagination -->
        <div class="bg-white rounded-xl shadow-md p-4">
            <div class="flex items-center justify-between">
                <button class="px-4 py-2 text-sm border border-gray-300 rounded-lg">Previous</button>
                <span class="text-sm text-gray-600">Hal 1 dari 15</span>
                <button class="px-4 py-2 text-sm border border-gray-300 rounded-lg">Next</button>
            </div>
        </div>
    </div>
</div>
@endsection