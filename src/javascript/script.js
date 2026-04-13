$(document).ready(function () {

  $("#mobile_btn").on("click", function () {
    $("#mobile_menu").toggleClass("active");
    $("#mobile_btn").find("i").toggleClass("fa-x");
  });

  $("#mobile_menu a").on("click", function () {
    $("#mobile_menu").removeClass("active");
    $("#mobile_btn").find("i").removeClass("fa-x");
  });

  const header = $("header");
  const navItems = $(".nav-item");

  function setActiveNavByScroll() {
    const scrollPosition = $(window).scrollTop() + header.outerHeight() + 20;

    if ($(window).scrollTop() <= 0) {
      header.css("box-shadow", "none");
    } else {
      header.css("box-shadow", "0px 6px 20px rgba(0, 0, 0, 0.10)");
    }

    let currentId = null;

    $("section[id]").each(function () {
      const sectionTop = $(this).offset().top;
      const sectionBottom = sectionTop + $(this).outerHeight();

      if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
        currentId = $(this).attr("id");
        return false;
      }
    });

    if (currentId) {
      navItems.removeClass("active");
      navItems.each(function () {
        const link = $(this).find("a").attr("href");
        if (link === "#" + currentId) {
          $(this).addClass("active");
        }
      });
    }
  }

  $(window).on("scroll", setActiveNavByScroll);
  setActiveNavByScroll();

  if (typeof ScrollReveal !== "undefined") {
    ScrollReveal().reveal("#cta", {
      origin: "left",
      duration: 2000,
      distance: "20%",
    });

    ScrollReveal().reveal(".dish:not(.combo-extra)", {
      origin: "left",
      duration: 1200,
      distance: "15%",
      interval: 80,
    });

    ScrollReveal().reveal("#testimonial_chef", {
      origin: "left",
      duration: 1000,
      distance: "20%",
    });

    ScrollReveal().reveal(".feedback", {
      origin: "right",
      duration: 1000,
      distance: "20%",
    });
  }

});

(function () {

  const section = document.querySelector("#combos");
  if (!section) return;

  const buttons = section.querySelectorAll(".filter-btn");
  if (!buttons.length) return;

  const cards = section.querySelectorAll(".dish.combo-extra");

  function applyFilter(filter) {

    cards.forEach(card => {

      const publico = (card.dataset.publico || "").toLowerCase();

      if (filter === "todos" || publico === filter) {
        card.style.display = "";
      } else {
        card.style.display = "none";
      }

    });

  }

  buttons.forEach(btn => {

    btn.addEventListener("click", () => {

      buttons.forEach(b => b.classList.remove("active"));
      btn.classList.add("active");

      applyFilter(btn.dataset.filter);

    });

  });

})();

document.addEventListener("DOMContentLoaded", function () {

  const sections = document.querySelectorAll(".menu-section");

  sections.forEach(section => {

    const grid = section.querySelector(".dishes-grid");
    const cards = grid.querySelectorAll(".dish");

    const btnMais = section.querySelector(".btn-ver-mais");
    const btnMenos = section.querySelector(".btn-ver-menos");

    // esconder depois do 4
    cards.forEach((card, index) => {
      if (index >= 4) {
        card.style.display = "none";
      }
    });

    if (btnMenos) btnMenos.style.display = "none";

    if (btnMais) {
      btnMais.addEventListener("click", () => {

        cards.forEach(card => {
          card.style.display = "block";
        });

        btnMais.style.display = "none";
        if (btnMenos) btnMenos.style.display = "inline-flex";
      });
    }

    if (btnMenos) {
      btnMenos.addEventListener("click", () => {

        cards.forEach((card, index) => {
          if (index >= 4) {
            card.style.display = "none";
          } else {
            card.style.display = "block";
          }
        });

        btnMenos.style.display = "none";
        if (btnMais) btnMais.style.display = "inline-flex";
      });
    }

  });

});