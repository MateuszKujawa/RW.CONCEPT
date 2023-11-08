const expandButtons = document.querySelectorAll('[id^="content-btn-"]');

expandButtons.forEach(button => {
  button.addEventListener("click", () => {
    const articleId = button.id.split("-")[2];
    const longText = document.querySelector(`#content-text-${articleId}`);
    
    // Sprawdź, czy tekst jest ukryty i zmień jego stan
    if (longText.style.display === "none" || longText.style.display === "") {
      longText.style.display = "block";
      button.textContent = "Zwiń";
    } else {
      longText.style.display = "none";
      button.textContent = "Czytaj dalej...";
    }
  });
});