$(document).ready(function () {
  $("#productsDropdownButton").on("click", function () {
    const dropdownMenu = $("#productsDropdown");
    dropdownMenu.toggleClass("active");
  });
  
  $(".nav-toggler").each(function (_, navToggler) {
    const target = $(navToggler).data("target");
    let isOpen = false; // State of navigation process
    const mobileBreakpoint = 1020; // Adjust this value based on your responsive design needs

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

        isOpen = !isOpen; // Change nav state
      }
    });

    // Add click event handling for links in navigation
    $("#navigation a").on("click", function () {
      if (window.innerWidth < mobileBreakpoint) {
        // Hide nav after click event in link only on mobile devices
        $(target).slideUp();
        // Toggle nav icon on "hamburger"
        $(".nav-toggler").html('<i class="fa-solid fa-bars text-white p-3 text-3xl hover:text-yellow-500 duration-300"></i>');
        isOpen = false; // Set state nav on close
      }
    });
  });

  // Add click event handling for links in the dropdown
  $("#productsDropdown a").on("click", function () {
    const target = $(".nav-toggler").data("target");
    
    if (window.innerWidth < mobileBreakpoint) {
      // Hide nav after click event in link only on mobile devices
      $(target).slideUp();
      // Toggle nav icon on "hamburger"
      $(".nav-toggler").html('<i class="fa-solid fa-bars text-white p-3 text-3xl hover:text-yellow-500 duration-300"></i>');
      isOpen = false; // Set state nav on close
    }
  });
});
