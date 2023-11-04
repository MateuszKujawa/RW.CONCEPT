function swapElements() {
    const mobileElement = document.getElementById('mobileElement');
    const desktopElement = document.getElementById('desktopElement');
    const isMobile = window.matchMedia('(max-width: 1220px)').matches;

    if (isMobile) {
        // Usuń element desktopowy i dodaj element mobilny
        desktopElement.style.display = 'none';
        mobileElement.style.display = 'block';
    } else {
        // Usuń element mobilny i dodaj element desktopowy
        mobileElement.style.display = 'none';
        desktopElement.style.display = 'block';
    }
}

window.addEventListener('load', swapElements);
window.addEventListener('resize', swapElements);