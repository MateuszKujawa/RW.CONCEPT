window.addEventListener('load', function() {
    var loadingOverlay = document.getElementById('loading-overlay');
    var pageContent = document.getElementById('page-content');

    loadingOverlay.style.display = 'none';
    pageContent.style.display = 'block';
    document.body.classList.remove('loading');

    AOS.init({
        disable: 'mobile',
        duration: 1000,
        easing: 'ease', 
    });
});

// Monitorowanie załadowania filmu
document.addEventListener('DOMContentLoaded', function() {
    const video = document.querySelectorAll('#video');
    const loadingOverlay = document.getElementById('loading-overlay');

    video.addEventListener('loadeddata', () => {
        // Zdarzenie wywoływane, gdy dane wideo zostały załadowane
        loadingOverlay.style.display = 'none'; // Ukryj ekran ładowania
    });

    video.addEventListener('error', () => {
        // Zdarzenie wywoływane, gdy wystąpi błąd ładowania wideo
        loadingOverlay.innerHTML = '<p>Wystąpił błąd podczas ładowania filmu.</p>';
    });
});