<img
    class="application-logo"
    src="{{ asset('img/logo.png') }}"
    alt="Application Logo"
    {{ $attributes }}
/>

<style>
    .application-logo {
        width: 69px;
        height: 69px;
        transform: rotate(0deg) scale(0.75);
        transition: transform 0.69s ease-in-out;
        animation: logo-pulse 2.5s ease-in-out infinite;
        animation-duration: 1s;
    }

    .application-logo:hover {
        transform: rotate(360deg) scale(0.7);
        animation: logo-rotate 0.69s ease-in-out forwards;
    }

    .application-logo.reverse-rotate {
        animation: logo-rotate-reverse 0.69s ease-in-out forwards;
    }

    @keyframes logo-pulse {
        0% {
            transform: scale(0.75);
        }
        50% {
            transform: scale(0.88);
        }
        100% {
            transform: scale(0.75);
        }
    }
    @keyframes logo-rotate {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }
    @keyframes logo-rotate-reverse {
        0% {
            transform: rotate(360deg);
        }
        100% {
            transform: rotate(0deg);
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const logo = document.querySelector('.application-logo');

        logo.addEventListener('mouseenter', () => {
            logo.classList.remove('reverse-rotate');
        });

        logo.addEventListener('mouseleave', () => {
            logo.classList.add('reverse-rotate');
        });

        logo.addEventListener('animationend', (event) => {
            if (event.animationName === 'logo-rotate-reverse') {
                logo.classList.remove('reverse-rotate');
            }
        });
    });
</script>