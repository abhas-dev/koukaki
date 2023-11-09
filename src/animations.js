document.addEventListener('DOMContentLoaded', function() {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            entry.isIntersecting ? entry.target.classList.add('show') : entry.target.classList.remove('show');
        })}, {

    });

    const sections = document.querySelectorAll('#story, #studio');
    sections.forEach(section => observer.observe(section));
});