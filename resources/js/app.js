import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const themeSwitcher = document.getElementById('theme-switcher');

if (localStorage.getItem('dark-mode') === 'true') {
    document.documentElement.classList.add('dark');
}

themeSwitcher.addEventListener('click', () => {
    document.documentElement.classList.toggle('dark');
    if (document.documentElement.classList.contains('dark')) {
        localStorage.setItem('dark-mode', 'true');
    } else {
        localStorage.removeItem('dark-mode');
    }
});
