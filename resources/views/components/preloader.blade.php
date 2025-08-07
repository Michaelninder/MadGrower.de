<style>
    .preloader {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: #24272B;
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 1;
        transition: opacity 0.5s ease-out;
    }

    .preloader.hidden {
        opacity: 0;
        pointer-events: none;
    }

    .preloader img {
        width: 100px;
        height: 100px;
        /*animation:pulse 1.2s ease-in-out infinite, spin 1s ease-in-out infinite;*/
        /*animation: loader 1.4s ease-in-out infinite;*/
    }

    .preloader-spinner {
        animation: spin 1.4s ease-in-out infinite;
    }
    .preloader-pulse {
        animation: pulse 1.4s ease-in-out infinite;
    }

    
    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.75);
        }
        100% {
            transform: scale(1);
        }
    }
</style>

<div class="preloader">
    <div class="preloader-spinner">
        <div class="preloader-pulse">
            <img src="{{ asset('img/logo.png') }}" alt="Loading...">
        </div>
    </div>
</div>

<script>
    window.addEventListener('load', function() {
        const preloader = document.querySelector('.preloader');
        const minDisplayTime = 80000;
        const startTime = Date.now();

        function hidePreloader() {
            const elapsedTime = Date.now() - startTime;
            const remainingTime = minDisplayTime - elapsedTime;

            setTimeout(() => {
                preloader.classList.add('hidden');
            }, Math.max(0, remainingTime));
        }

        if (document.readyState === 'complete') {
            hidePreloader();
        } else {
            window.addEventListener('load', hidePreloader);
        }
    });
</script>