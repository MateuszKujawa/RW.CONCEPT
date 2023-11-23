$(document).ready(function () {
  $("#productsDropdownButton").on("click", function () {
    const dropdownMenu = $("#productsDropdown");
    dropdownMenu.toggleClass("active");
  });
  
  $(".nav-toggler").each(function (_, navToggler) {
    const target = $(navToggler).data("target");
    let isOpen = false;
    const mobileBreakpoint = 1020;

    $(navToggler).on("click", function () {
      if (window.innerWidth < mobileBreakpoint) {
        // Close the menu only on mobile devices
        $(target).animate({
          height: "toggle",
        });

        // Replace icon "X" to "Hamburger"
        if (isOpen) {
          $(navToggler).html('<i class="fa-solid fa-bars text-white p-3 text-3xl hover:text-yellow-500 duration-300"></i>');
        } else {
          $(navToggler).html('<i class="fa-solid fa-times text-white p-3 text-3xl hover:text-yellow-500 duration-300"></i>');
        }

        isOpen = !isOpen;
      }
    });

    // Add click event handling for links in navigation
    $("#navigation a").on("click", function () {
      if (window.innerWidth < mobileBreakpoint) {
        $(target).slideUp();
        $(".nav-toggler").html('<i class="fa-solid fa-bars text-white p-3 text-3xl hover:text-yellow-500 duration-300"></i>');
        isOpen = false;
      }
    });
  });

  // Add click event handling for links in the dropdown
  $("#productsDropdown a").on("click", function () {
    const target = $(".nav-toggler").data("target");
    
    if (window.innerWidth < mobileBreakpoint) {
      $(target).slideUp();
      $(".nav-toggler").html('<i class="fa-solid fa-bars text-white p-3 text-3xl hover:text-yellow-500 duration-300"></i>');
      isOpen = false;
    }
  });
});
