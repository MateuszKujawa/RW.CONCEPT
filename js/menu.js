$(document).ready(function () {
    $(".nav-toggler").each(function (_, navToggler) {
      const target = $(navToggler).data("target");
      const isOpen = false; // State of navigation process
  
      $(navToggler).on("click", function () {
        $(target).animate({
          height: "toggle",
        });
  
        // Replace icon "X" to "Hamburger"
        if (isOpen) {
          $(navToggler).html('<i class="fa-solid fa-bars text-white p-3 text-2xl hover:text-yellow-500 duration-300"></i>');
        } else {
          $(navToggler).html('<i class="fa-solid fa-times text-white p-3 text-2xl hover:text-yellow-500 duration-300"></i>');
        }
  
        isOpen = !isOpen; // Change nav state
      });
  
      // Add click event handling for links in navigation
      $("#navigation a").on("click", function () {
        // Hide nav after click event in link
        $("#navigation").slideUp();
        // Toggle nav icon on "hamburger"
        $(".nav-toggler").html('<i class="fa-solid fa-bars" style="color: #ffffff;"></i>');
        isOpen = false; // Set state nav on close
      });
    });
  });
