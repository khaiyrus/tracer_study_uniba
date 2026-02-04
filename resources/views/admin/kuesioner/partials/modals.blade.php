<!-- Modal Overlay -->
<div id="modalOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center p-4">
    <div id="modalContent" class="bg-white rounded-xl shadow-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto transform transition-all">
        <!-- Modal will be loaded here -->
    </div>
</div>

<!-- Add/Edit Kuesioner Modal Template -->
<template id="addEditKuesionerModal">
    <div class="sticky top-0 bg-white border-b border-gray-200 px-6 py-4 flex items-center justify-between z-10">
        <h3 class="text-xl font-bold text-gray-900" id="modalTitle">Tambah Kuesioner</h3>
        <button onclick="closeModal()" class="p-2 hover:bg-gray-100 rounded-lg transition-colors">
            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <form class="p-6 space-y-6">
        <!-- Judul Kuesioner -->
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
                Judul Kuesioner <span class="text-red-500">*</span>
            </label>
            <input type="text" placeholder="Masukkan judul kuesioner" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all">
        </div>

        <!-- Tipe Kuesioner -->
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
                Tipe Kuesioner <span class="text-red-500">*</span>
            </label>
            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all">
                <option value="">Pilih tipe kuesioner</option>
                <option value="tracer">Tracer Study</option>
                <option value="exit">Exit Survey</option>
                <option value="satisfaction">Survey Kepuasan Pengguna</option>
            </select>
        </div>

        <!-- Deskripsi -->
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
                Deskripsi <span class="text-red-500">*</span>
            </label>
            <textarea rows="4" placeholder="Masukkan deskripsi kuesioner" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all resize-none"></textarea>
        </div>

        <!-- Target Responden -->
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
                Target Responden <span class="text-red-500">*</span>
            </label>
            <input type="text" placeholder="Contoh: Lulusan 2023" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all">
        </div>

        <!-- Tanggal Mulai & Selesai -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Tanggal Mulai <span class="text-red-500">*</span>
                </label>
                <input type="date" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all">
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">
                    Tanggal Selesai <span class="text-red-500">*</span>
                </label>
                <input type="date" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all">
            </div>
        </div>

        <!-- Status -->
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
                Status <span class="text-red-500">*</span>
            </label>
            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all">
                <option value="draft">Draft</option>
                <option value="pending">Pending Review</option>
                <option value="approved">Approved</option>
                <option value="rejected">Rejected</option>
            </select>
        </div>

        <!-- File Upload -->
        <div>
            <label class="block text-sm font-semibold text-gray-700 mb-2">
                Upload File Kuesioner (Opsional)
            </label>
            <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-blue-500 transition-colors">
                <svg class="w-12 h-12 mx-auto text-gray-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                </svg>
                <p class="text-sm text-gray-600 mb-1">Klik untuk upload atau drag & drop</p>
                <p class="text-xs text-gray-400">PDF, DOCX (Max. 10MB)</p>
                <input type="file" class="hidden" accept=".pdf,.docx">
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex items-center justify-end space-x-3 pt-6 border-t border-gray-200">
            <button type="button" onclick="closeModal()" class="px-6 py-3 border border-gray-300 text-gray-700 rounded-lg font-semibold hover:bg-gray-50 transition-all">
                Batal
            </button>
            <button type="submit" class="px-6 py-3 rounded-lg font-semibold text-white shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all" style="background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);">
                Simpan
            </button>
        </div>
    </form>
</template>

<!-- View Kuesioner Modal Template -->
<template id="viewKuesionerModal">
    <div class="sticky top-0 bg-white border-b border-gray-200 px-6 py-4 flex items-center justify-between z-10">
        <h3 class="text-xl font-bold text-gray-900">Detail Kuesioner</h3>
        <button onclick="closeModal()" class="p-2 hover:bg-gray-100 rounded-lg transition-colors">
            <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <div class="p-6 space-y-6">
        <!-- Header Info -->
        <div class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-lg p-5">
            <h4 class="text-2xl font-bold text-gray-900 mb-2">Tracer Study 2024</h4>
            <p class="text-gray-600 mb-3">Untuk lulusan tahun 2023</p>
            <div class="flex flex-wrap gap-2">
                <span class="px-3 py-1 bg-blue-600 text-white rounded-full text-xs font-semibold">Tracer Study</span>
                <span class="px-3 py-1 bg-green-600 text-white rounded-full text-xs font-semibold">Approved</span>
            </div>
        </div>

        <!-- Detail Info Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-semibold text-gray-500 mb-1">Pembuat</label>
                <p class="text-base font-medium text-gray-900">Admin User</p>
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-500 mb-1">Tanggal Dibuat</label>
                <p class="text-base font-medium text-gray-900">15 Januari 2024</p>
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-500 mb-1">Tanggal Mulai</label>
                <p class="text-base font-medium text-gray-900">20 Januari 2024</p>
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-500 mb-1">Tanggal Selesai</label>
                <p class="text-base font-medium text-gray-900">20 Maret 2024</p>
            </div>
        </div>

        <!-- Deskripsi -->
        <div>
            <label class="block text-sm font-semibold text-gray-500 mb-2">Deskripsi</label>
            <p class="text-base text-gray-700 leading-relaxed">
                Kuesioner ini bertujuan untuk melacak jejak alumni Universitas Brawijaya lulusan tahun 2023. 
                Data yang dikumpulkan akan digunakan untuk evaluasi kurikulum dan peningkatan kualitas pendidikan.
            </p>
        </div>

        <!-- Statistics -->
        <div class="grid grid-cols-3 gap-4">
            <div class="text-center p-4 bg-blue-50 rounded-lg">
                <div class="text-2xl font-bold text-blue-600">245</div>
                <div class="text-xs text-gray-600 mt-1">Total Responden</div>
            </div>
            <div class="text-center p-4 bg-green-50 rounded-lg">
                <div class="text-2xl font-bold text-green-600">198</div>
                <div class="text-xs text-gray-600 mt-1">Sudah Mengisi</div>
            </div>
            <div class="text-center p-4 bg-orange-50 rounded-lg">
                <div class="text-2xl font-bold text-orange-600">47</div>
                <div class="text-xs text-gray-600 mt-1">Belum Mengisi</div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="flex items-center justify-end space-x-3 pt-6 border-t border-gray-200">
            <button onclick="closeModal()" class="px-6 py-3 border border-gray-300 text-gray-700 rounded-lg font-semibold hover:bg-gray-50 transition-all">
                Tutup
            </button>
            <button onclick="openModal('editKuesioner', 1)" class="px-6 py-3 rounded-lg font-semibold text-white shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all" style="background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);">
                Edit
            </button>
        </div>
    </div>
</template>

<script>
// Modal Functions
}
</script>
