(function ($) {
  "use strict";

  // Spinner
  var spinner = function () {
    setTimeout(function () {
      if ($("#spinner").length > 0) {
        $("#spinner").removeClass("show");
      }
    }, 1);
  };
  spinner(0);

  // Sticky Navbar
  $(window).scroll(function () {
    if ($(this).scrollTop() > 45) {
      $(".navbar").addClass("sticky-top shadow-sm");
    } else {
      $(".navbar").removeClass("sticky-top shadow-sm");
    }
  });

  // International Tour carousel
  $(".InternationalTour-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1000,
    center: false,
    dots: true,
    loop: true,
    margin: 25,
    nav: false,
    navText: [
      '<i class="bi bi-arrow-left"></i>',
      '<i class="bi bi-arrow-right"></i>',
    ],
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      992: {
        items: 2,
      },
      1200: {
        items: 3,
      },
    },
  });

  // packages carousel
  $(".packages-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1000,
    center: false,
    dots: false,
    loop: true,
    margin: 25,
    nav: true,
    navText: [
      '<i class="bi bi-arrow-left"></i>',
      '<i class="bi bi-arrow-right"></i>',
    ],
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      992: {
        items: 2,
      },
      1200: {
        items: 3,
      },
    },
  });

  // testimonial carousel
  $(".testimonial-carousel").owlCarousel({
    autoplay: true,
    smartSpeed: 1000,
    center: true,
    dots: true,
    loop: true,
    margin: 25,
    nav: true,
    navText: [
      '<i class="bi bi-arrow-left"></i>',
      '<i class="bi bi-arrow-right"></i>',
    ],
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      992: {
        items: 2,
      },
      1200: {
        items: 3,
      },
    },
  });

})(jQuery);

// js

function loadDestinations() {
  const cardsContainer = document.getElementById("destination-cards-container");
  const paginationLinksContainer = document.getElementById("pagination-links");
  const destinationCards = Array.from(
    cardsContainer.getElementsByClassName("destination-card")
  );
  const cardsPerPage = 9;
  let currentPage = 1;

  function displayPage(pageNumber) {
    currentPage = pageNumber;
    const startIndex = (currentPage - 1) * cardsPerPage;
    const endIndex = startIndex + cardsPerPage;

    destinationCards.forEach((card, index) => {
      if (index >= startIndex && index < endIndex) {
        card.style.display = "block";
      } else {
        card.style.display = "none";
      }
    });

    updatePaginationLinks();
  }

  function setupPagination() {
    paginationLinksContainer.innerHTML = ""; // Clear existing links
    const totalPages = Math.ceil(destinationCards.length / cardsPerPage);

    // Previous button
    const prevLink = document.createElement("a");
    prevLink.href = "#";
    prevLink.classList.add(
      "btn",
      "btn-primary",
      "rounded-pill",
      "py-2",
      "px-3",
      "me-2"
    );
    prevLink.innerHTML = '<i class="bi bi-arrow-left"></i> Previous';
    prevLink.addEventListener("click", function (event) {
      event.preventDefault();
      if (currentPage > 1) {
        displayPage(currentPage - 1);
      }
    });
    paginationLinksContainer.appendChild(prevLink);

    for (let i = 1; i <= totalPages; i++) {
      const link = document.createElement("a");
      link.href = "#";
      link.classList.add(
        "btn",
        "btn-primary",
        "rounded-pill",
        "py-2",
        "px-3",
        "me-2"
      );
      link.textContent = i;
      link.addEventListener("click", function (event) {
        event.preventDefault();
        displayPage(i);
      });
      paginationLinksContainer.appendChild(link);
    }

    // Next button
    const nextLink = document.createElement("a");
    nextLink.href = "#";
    nextLink.classList.add(
      "btn",
      "btn-primary",
      "rounded-pill",
      "py-2",
      "px-3",
      "ms-2"
    );
    nextLink.innerHTML = 'Next <i class="bi bi-arrow-right"></i>';
    nextLink.addEventListener("click", function (event) {
      event.preventDefault();
      if (currentPage < totalPages) {
        displayPage(currentPage + 1);
      }
    });
    paginationLinksContainer.appendChild(nextLink);

    updatePaginationLinks();
  }

  function updatePaginationLinks() {
    const links = paginationLinksContainer.getElementsByTagName("a");
    const totalPages = Math.ceil(destinationCards.length / cardsPerPage);

    Array.from(links).forEach((link, index) => {
      // Handle previous/next buttons
      if (link.textContent.includes("Previous")) {
        if (currentPage === 1) {
          link.classList.add("disabled");
        } else {
          link.classList.remove("disabled");
        }
      } else if (link.textContent.includes("Next")) {
        if (currentPage === totalPages) {
          link.classList.add("disabled");
        } else {
          link.classList.remove("disabled");
        }
      } else {
        // Handle page number links
        if (parseInt(link.textContent) === currentPage) {
          link.classList.add("active");
        } else {
          link.classList.remove("active");
        }
      }
    });
  }

  setupPagination(); // Initialize pagination links
  displayPage(1); // Show the first page on load
}
