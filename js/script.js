    const mobileMenuButton = document.getElementById("mobileMenuButton");

    const closeMobileMenuButton = document.getElementById("closeMobileMenuButton");

    const mobileNav = document.querySelector(".mobileNav");

    mobileMenuButton.addEventListener("click", () => {
      mobileNav.classList.remove("hidden");
      mobileMenuButton.classList.add("hidden");
      closeMobileMenuButton.classList.remove("hidden");
    });

    closeMobileMenuButton.addEventListener("click", () => {
      mobileMenuButton.classList.remove("hidden");
      closeMobileMenuButton.classList.add("hidden");
      mobileNav.classList.add("hidden");
});
