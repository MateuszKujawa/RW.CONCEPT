const productsDropdownButton = document.getElementById("productsDropdownButton");
const productsDropdown = document.getElementById("productsDropdown");
const productsDropdownElements = productsDropdown.querySelectorAll("a");
const arrowIcon = productsDropdownButton.querySelector("i.fa-chevron-down");

function hideDropdown() {
    productsDropdown.classList.add("hidden");
}

function handleLinkClick(event) {
    hideDropdown();

    if (event.currentTarget.getAttribute("href")) {
        window.location.href = event.currentTarget.getAttribute("href");
    }
    event.stopPropagation();
}

productsDropdownButton.addEventListener("click", (event) => {
    productsDropdown.classList.toggle("hidden");
    event.stopPropagation();
});

document.addEventListener("click", (event) => {
    if (!productsDropdown.contains(event.target) && event.target !== productsDropdownButton) {
        hideDropdown();
    }
});

productsDropdownElements.forEach((element) => {
    element.addEventListener("click", handleLinkClick);
    element.addEventListener("touchstart", handleLinkClick);
});


