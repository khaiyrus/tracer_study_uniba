
const sidebar = document.getElementById('sidebar');
const sidebarOverlay = document.getElementById('sidebarOverlay');
const openSidebar = document.getElementById('openSidebar');
const closeSidebar = document.getElementById('closeSidebar');
function toggleSidebar(show) {
    if (show) {
        sidebar.classList.remove('-translate-x-full');
        sidebarOverlay.classList.remove('hidden');
    } else {
        sidebar.classList.add('-translate-x-full');
        sidebarOverlay.classList.add('hidden');
    }
}
openSidebar.addEventListener('click', () => toggleSidebar(true));
closeSidebar.addEventListener('click', () => toggleSidebar(false));
sidebarOverlay.addEventListener('click', () => toggleSidebar(false));


function openModal(type, id = null) {
    const overlay = document.getElementById('modalOverlay');
    const content = document.getElementById('modalContent');
    
    let template;
    if (type === 'addKuesioner' || type === 'editKuesioner') {
        template = document.getElementById('addEditKuesionerModal');
    } else if (type === 'viewKuesioner') {
        template = document.getElementById('viewKuesionerModal');
    }
    
    if (template) {
        content.innerHTML = template.innerHTML;
        
        // Update title for edit mode
        if (type === 'editKuesioner') {
            const title = content.querySelector('#modalTitle');
            if (title) title.textContent = 'Edit Kuesioner';
        }
    }
    
    overlay.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    const overlay = document.getElementById('modalOverlay');
    overlay.classList.add('hidden');
    document.body.style.overflow = '';
}

// Close modal when clicking overlay
document.getElementById('modalOverlay')?.addEventListener('click', function(e) {
    if (e.target === this) {
        closeModal();
    }
});

// Close modal with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeModal();
    }
});

// Confirm delete function
function confirmDelete(id) {
    if (confirm('Apakah Anda yakin ingin menghapus kuesioner ini?')) {
        console.log('Deleting item with ID:', id);
        // Add delete logic here
    }
}