const productsDropdownButton = document.getElementById("productsDropdownButton");
const productsDropdown = document.getElementById("productsDropdown");
const arrowIcon = productsDropdownButton.querySelector("i.fa-chevron-down");

productsDropdownButton.addEventListener("click", (event) => {
    productsDropdown.classList.toggle("hidden");
    arrowIcon.classList.toggle("rotate-180"); // Zmieniamy toggle, aby dodać lub usunąć klasę w zależności od obecnego stanu
    event.stopPropagation();
});

document.addEventListener("click", (event) => {
    if (!productsDropdown.contains(event.target) && event.target !== productsDropdownButton) {
        productsDropdown.classList.add("hidden");
        arrowIcon.classList.remove("rotate-180");
    }
});