const productsDropdownButton = document.getElementById("productsDropdownButton");
const productsDropdown = document.getElementById("productsDropdown");
const productsDropdownElements = productsDropdown.querySelectorAll("a");
const arrowIcon = productsDropdownButton.querySelector("i.fa-chevron-down");

// Funkcja do ukrywania dropdowna
function hideDropdown() {
    productsDropdown.classList.add("hidden");
}

// Funkcja do obsługi kliknięcia w link
function handleLinkClick(event) {
    // Dodaj tutaj inne działania, które chcesz wykonać po kliknięciu w link

    // Ukryj dropdown
    hideDropdown();

    // Sprawdź, czy link ma atrybut href
    if (event.currentTarget.getAttribute("href")) {
        // Przenieś do odpowiedniego artykułu
        window.location.href = event.currentTarget.getAttribute("href");
    }

    // Zatrzymaj propagację zdarzenia, aby nie uruchamiać nasłuchiwacza zdarzeń dla dokumentu
    event.stopPropagation();
}

// Nasłuchiwacz zdarzeń dla przycisku dropdowna
productsDropdownButton.addEventListener("click", (event) => {
    productsDropdown.classList.toggle("hidden");
    event.stopPropagation();
});

// Nasłuchiwacz zdarzeń dla dokumentu
document.addEventListener("click", (event) => {
    if (!productsDropdown.contains(event.target) && event.target !== productsDropdownButton) {
        hideDropdown();
    }
});

// Nasłuchiwacz zdarzeń dla każdego elementu <a> w dropdownie
productsDropdownElements.forEach((element) => {
    // Nasłuchiwacz zdarzeń dla kliknięcia myszą
    element.addEventListener("click", handleLinkClick);

    // Nasłuchiwacz zdarzeń dla dotknięcia na urządzeniach mobilnych
    element.addEventListener("touchstart", handleLinkClick);
});


