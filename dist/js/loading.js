// Loading page
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



