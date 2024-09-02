import './bootstrap';
import 'flowbite';

document.addEventListener('DOMContentLoaded', (event) => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('opacity-100', 'translate-y-0', 'visible', 'pointer-events-auto');
                entry.target.classList.remove('opacity-0', 'translate-y-4', 'invisible', 'pointer-events-none');
            } else {
                entry.target.classList.remove('opacity-100', 'translate-y-0', 'visible', 'pointer-events-auto');
                entry.target.classList.add('opacity-0', 'translate-y-4', 'invisible', 'pointer-events-none');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '-10px 0px'
    });

    document.querySelectorAll('[data-project-card]').forEach(card => {
        card.classList.add('opacity-0', 'translate-y-4', 'invisible', 'pointer-events-none');
        observer.observe(card);
    });
});
