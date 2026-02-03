import './bootstrap';
import '../css/app.css';
import { initMobileNavigation, initScrollToTop, initSmoothScroll } from './company';

// Initialize all functionality when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    console.log('DOM Content Loaded - Initializing...');
    
    // Initialize mobile navigation
    initMobileNavigation();
    
    // Initialize scroll to top button
    initScrollToTop();
    
    initSmoothScroll();
});

// Hot Module Replacement
if (import.meta.hot) {
    import.meta.hot.accept();
}

// Import admin and alumni scripts
import './admin';
import './alumni';

// Alpine.js
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// Conditional CSS loading based on body class
if (document.body.classList.contains('company')) {
    import('../css/company.css');
}

if (document.body.classList.contains('admin')) {
    import('../css/admin.css');
}

if (document.body.classList.contains('alumni')) {
    import('../css/alumni.css');
}