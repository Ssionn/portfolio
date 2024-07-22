import './bootstrap';
import 'flowbite';

document.addEventListener('DOMContentLoaded', (event) => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('opacity-100', 'translate-y-0');
                entry.target.classList.remove('opacity-0', 'translate-y-4');
            } else {
                entry.target.classList.remove('opacity-100', 'translate-y-0');
                entry.target.classList.add('opacity-0', 'translate-y-4');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '-100px 0px'
    });

    document.querySelectorAll('[data-project-card]').forEach(card => {
        observer.observe(card);
    });
});
