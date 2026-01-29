import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    // --- 1. Scroll Animations (Intersection Observer) ---
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1 // Trigger when 10% of the element is visible
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target); // Only animate once
            }
        });
    }, observerOptions);

    const animatedElements = document.querySelectorAll('.animate-on-scroll');
    animatedElements.forEach(el => observer.observe(el));

    // --- 2. Navbar Scroll Effect ---
    const navbar = document.querySelector('nav');
    const header = document.querySelector('header');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 20) {
            header.classList.add('py-2');
            header.classList.remove('md:p-6', 'p-4');
            navbar.classList.add('bg-white/90', 'shadow-md', 'backdrop-blur-md');
            navbar.classList.remove('glass', 'rounded-full');
            navbar.classList.add('rounded-none', 'w-full', 'max-w-full'); // Make it full width sticky
        } else {
            header.classList.remove('py-2');
            header.classList.add('md:p-6', 'p-4');
            navbar.classList.remove('bg-white/90', 'shadow-md', 'backdrop-blur-md', 'rounded-none', 'w-full', 'max-w-full');
            navbar.classList.add('glass', 'rounded-full');
        }
    });

    // --- 3. Mobile Menu Toggle ---
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuLinks = document.querySelectorAll('.mobile-nav-link');

    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            // Animate hamburger icon if needed, or simple toggle
        });

        // Close menu when a link is clicked
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });
    }
});

