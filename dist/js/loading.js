// Loading page

window.addEventListener('load', function() {
    // Gdy strona zostanie w pełni załadowana
    var loadingOverlay = document.getElementById('loading-overlay');
    var pageContent = document.getElementById('page-content');

    loadingOverlay.style.display = 'none'; // Ukryj animację ładowania
    pageContent.style.display = 'block'; // Wyświetl zawartość strony
    document.body.classList.remove('loading'); // Odblokuj scrollowanie

    AOS.init({
        disable: 'mobile',
        duration: 1000,
        easing: 'ease', 
    });
});



