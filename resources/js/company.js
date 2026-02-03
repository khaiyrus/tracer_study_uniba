export function initMobileNavigation() {
    console.log('Initializing mobile navigation...');
    
    // Get DOM elements
    const hamburgerBtn = document.getElementById('hamburger-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const closeIcon = document.getElementById('close-icon');
    
    // Check if all elements exist
    if (!hamburgerBtn || !mobileMenu || !hamburgerIcon || !closeIcon) {
        console.warn('Mobile navigation elements not found');
        console.log('hamburgerBtn:', hamburgerBtn);
        console.log('mobileMenu:', mobileMenu);
        console.log('hamburgerIcon:', hamburgerIcon);
        console.log('closeIcon:', closeIcon);
        return;
    }
    
    console.log('All mobile navigation elements found!');
    
    function openMobileMenu() {
        console.log('Opening mobile menu...');
        
        // Show menu
        mobileMenu.classList.remove('hidden');
        mobileMenu.classList.add('block');
        
        // Switch icons
        hamburgerIcon.classList.add('hidden');
        closeIcon.classList.remove('hidden');
        
        // Update ARIA attributes
        hamburgerBtn.setAttribute('aria-expanded', 'true');
        mobileMenu.setAttribute('aria-hidden', 'false');
        
        // Prevent body scroll
        document.body.style.overflow = 'hidden';
    }
    
    function closeMobileMenu() {
        console.log('Closing mobile menu...');
        
        // Hide menu
        mobileMenu.classList.add('hidden');
        mobileMenu.classList.remove('block');
        
        // Switch icons
        hamburgerIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
        
        // Update ARIA attributes
        hamburgerBtn.setAttribute('aria-expanded', 'false');
        mobileMenu.setAttribute('aria-hidden', 'true');
        
        // Restore body scroll
        document.body.style.overflow = '';
    }
    
    // Function to toggle mobile menu
    function toggleMobileMenu() {
        const isHidden = mobileMenu.classList.contains('hidden');
        console.log('Toggle clicked. Menu is hidden:', isHidden);
        
        if (isHidden) {
            openMobileMenu();
        } else {
            closeMobileMenu();
        }
    }
    
    // Event: Click hamburger button
    hamburgerBtn.addEventListener('click', function(event) {
        event.preventDefault();
        event.stopPropagation();
        console.log('Hamburger button clicked');
        toggleMobileMenu();
    });
    
    // Event: Click outside to close (mobile only)
    document.addEventListener('click', function(event) {
        if (window.innerWidth >= 1024) return;
        
        const isClickInsideMenu = mobileMenu.contains(event.target);
        const isClickOnButton = hamburgerBtn.contains(event.target);
        
        if (!isClickInsideMenu && !isClickOnButton && !mobileMenu.classList.contains('hidden')) {
            console.log('Clicked outside, closing menu');
            closeMobileMenu();
        }
    });
    
    // Event: Escape key to close menu
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && !mobileMenu.classList.contains('hidden')) {
            console.log('Escape pressed, closing menu');
            closeMobileMenu();
        }
    });
    
    // Event: Close menu when clicking links inside mobile menu
    const mobileLinks = mobileMenu.querySelectorAll('a, button[type="submit"]');
    mobileLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            if (window.innerWidth < 1024) {
                console.log('Mobile link clicked, closing menu');
                setTimeout(closeMobileMenu, 300);
            }
        });
    });
    
    // Event: Window resize
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            if (window.innerWidth >= 1024 && !mobileMenu.classList.contains('hidden')) {
                closeMobileMenu();
            }
        }, 250);
    });
    
    // Initialize: Set initial ARIA attributes
    hamburgerBtn.setAttribute('aria-expanded', 'false');
    mobileMenu.setAttribute('aria-hidden', 'true');
    
    console.log('Mobile navigation initialized successfully');
}

// Scroll to top functionality
export function initScrollToTop() {
    const scrollButton = document.getElementById('scrollToTop');
    
    if (!scrollButton) {
        console.warn('Scroll to top button not found');
        return;
    }
    
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            scrollButton.classList.remove('hidden');
        } else {
            scrollButton.classList.add('hidden');
        }
    });
    
    scrollButton.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}

// Smooth scroll for anchor links
export function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href === '#') return;
            
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
}
// -----------section------------statistik--------
// Data untuk setiap tahun
const yearData = {
    2024: {
        title: "Hasil Pelaksanaan Tracer Study Tahun 2024",
        subtitle: "(Responden Lulusan 2023)",
        stats: {
            lulusan: "16.184",
            mengisi: "13.811",
            belum: "2.373",
            persen: "85,3%"
        },
        chartData: {
            labels: ['FH', 'FEB', 'FIA', 'FP', 'FAPET', 'FT', 'FK', 'FPIK', 'FMIPA', 'FTP', 'FISIP', 'FIB', 'FKH', 'FILKOM', 'FKG', 'FIKES', 'FV', 'UB Kediri', 'SP'],
            lulusan: [799, 1386, 1409, 1189, 696, 1428, 1090, 956, 845, 905, 1257, 763, 337, 904, 246, 470, 1262, 183, 91],
            responden: [710, 1260, 1120, 668, 1326, 1090, 956, 924, 632, 808, 823, 1176, 628, 268, 744, 175, 429, 1167, 134, 72]
        }
    },
    2023: {
        title: "Hasil Pelaksanaan Tracer Study Tahun 2023",
        subtitle: "(Responden Lulusan 2022)",
        stats: {
            lulusan: "15.234",
            mengisi: "12.456",
            belum: "2.778",
            persen: "81,8%"
        },
        chartData: {
            labels: ['FH', 'FEB', 'FIA', 'FP', 'FAPET', 'FT', 'FK', 'FPIK', 'FMIPA', 'FTP', 'FISIP', 'FIB', 'FKH', 'FILKOM', 'FKG', 'FIKES', 'FV', 'UB Kediri', 'SP'],
            lulusan: [750, 1300, 1350, 1100, 650, 1400, 1050, 920, 800, 880, 1200, 740, 320, 880, 230, 450, 1200, 170, 85],
            responden: [680, 1180, 1080, 640, 1280, 1050, 920, 890, 610, 780, 800, 1130, 600, 250, 720, 160, 410, 1120, 125, 68]
        }
    },
    // Tambahkan data untuk tahun lainnya...
};

let myChart = null;

// Function to initialize chart
function initChart(year = 2024) {
    const ctx = document.getElementById('fakultasChart');
    const data = yearData[year].chartData;
    
    // Destroy existing chart if exists
    if (myChart) {
        myChart.destroy();
    }
    
    myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: data.labels,
            datasets: [
                {
                    label: 'Lulusan',
                    data: data.lulusan,
                    backgroundColor: '#3b82f6',
                    borderRadius: 4,
                    barThickness: 'flex',
                    maxBarThickness: 40
                },
                {
                    label: 'Responden',
                    data: data.responden,
                    backgroundColor: '#f59e0b',
                    borderRadius: 4,
                    barThickness: 'flex',
                    maxBarThickness: 40
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: 'rgba(0, 0, 0, 0.8)',
                    padding: 12,
                    titleFont: {
                        size: 14,
                        weight: 'bold'
                    },
                    bodyFont: {
                        size: 13
                    },
                    borderColor: 'rgba(255, 255, 255, 0.1)',
                    borderWidth: 1
                }
            },
            scales: {
                x: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        font: {
                            size: 11,
                            weight: '500'
                        },
                        color: '#4b5563'
                    }
                },
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.05)'
                    },
                    ticks: {
                        font: {
                            size: 12
                        },
                        color: '#6b7280'
                    }
                }
            }
        }
    });
}

function changeYear(year) {
    const data = yearData[year];

    document.getElementById('year-title').textContent = data.title;
    document.getElementById('year-subtitle').textContent = data.subtitle;

    document.getElementById('stat-lulusan').textContent = data.stats.lulusan;
    document.getElementById('stat-mengisi').textContent = data.stats.mengisi;
    document.getElementById('stat-belum').textContent = data.stats.belum;
    document.getElementById('stat-persen').textContent = data.stats.persen;

    document.querySelectorAll('.year-tab').forEach(tab => {
        tab.classList.remove('year-tab-active');
        tab.style.backgroundColor = '#6b7280';
        tab.style.color = 'white';
    });
    
    const activeTab = document.getElementById(`tab-${year}`);
    activeTab.classList.add('year-tab-active');

    initChart(year);
}

document.addEventListener('DOMContentLoaded', function() {
    initChart(2024);
});