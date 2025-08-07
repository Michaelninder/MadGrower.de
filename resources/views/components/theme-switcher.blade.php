<button id="theme-switcher" class="relative p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-700 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
    <div class="relative w-6 h-6">
        <i id="sun-icon" class="bi bi-sun-fill absolute inset-0 h-6 w-6"></i>
        <i id="moon-icon" class="bi bi-moon-fill absolute inset-0 h-6 w-6"></i>
    </div>
</button>

<style>
    #sun-icon, #moon-icon {
        transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
    }
    .dark #sun-icon {
        transform: rotate(180deg) scale(0);
        opacity: 0;
    }
    .dark #moon-icon {
        transform: rotate(0deg) scale(1);
        opacity: 1;
    }
    #sun-icon {
        transform: rotate(0deg) scale(1);
        opacity: 1;
    }
    #moon-icon {
        transform: rotate(-180deg) scale(0);
        opacity: 0;
    }
</style>
