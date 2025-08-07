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
    }

    .preloader img {
        width: 100px;
        height: 100px;
        animation: spin 2s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>

<div class="preloader">
    <img src="{{ asset('img/logo.png') }}" alt="Loading...">
</div>

<script>
    window.addEventListener('load', function() {
        const preloader = document.querySelector('.preloader');
        preloader.style.display = 'none';
    });
</script>
