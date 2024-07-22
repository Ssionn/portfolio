import './bootstrap';
import 'flowbite';

document.addEventListener('DOMContentLoaded', (event) => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('opacity-100', 'translate-y-0');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1
    });

    document.querySelectorAll('[data-project-card]').forEach(card => {
        observer.observe(card);
    });
});
