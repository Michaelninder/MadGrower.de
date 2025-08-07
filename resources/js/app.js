import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    const themeSwitcher = document.getElementById('theme-switcher');
    const html = document.documentElement;

    const setInitialIconState = () => {
        if (html.classList.contains('dark')) {
            document.getElementById('moon-icon').style.transform = 'rotate(0deg) scale(1)';
            document.getElementById('moon-icon').style.opacity = '1';
            document.getElementById('sun-icon').style.transform = 'rotate(180deg) scale(0)';
            document.getElementById('sun-icon').style.opacity = '0';
        } else {
            document.getElementById('sun-icon').style.transform = 'rotate(0deg) scale(1)';
            document.getElementById('sun-icon').style.opacity = '1';
            document.getElementById('moon-icon').style.transform = 'rotate(-180deg) scale(0)';
            document.getElementById('moon-icon').style.opacity = '0';
        }
    };

    if (localStorage.getItem('dark-mode') === 'true') {
        html.classList.add('dark');
    }

    setInitialIconState();

    themeSwitcher.addEventListener('click', () => {
        html.classList.toggle('dark');
        if (html.classList.contains('dark')) {
            localStorage.setItem('dark-mode', 'true');
        } else {
            localStorage.removeItem('dark-mode');
        }
        setInitialIconState();
    });
});

