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

  function showTarget(targetSelector, btnVerMais) {
    const target = document.querySelector(targetSelector);
    if (!target) return;

    target.classList.add("show");
    if (btnVerMais) btnVerMais.style.display = "none";
  }

  function hideTarget(targetSelector) {
    const target = document.querySelector(targetSelector);
    if (!target) return;

    target.classList.remove("show");

    const section = target.closest("section") || document;
    const verMais = section.querySelector('.btn-ver-mais[data-target="' + targetSelector + '"]');
    if (verMais) verMais.style.display = "inline-flex";
  }

  document.querySelectorAll(".btn-ver-mais").forEach((btn) => {
    btn.addEventListener("click", () => {
      const targetSelector = btn.getAttribute("data-target");
      if (!targetSelector) return;
      showTarget(targetSelector, btn);
    });
  });

  document.querySelectorAll(".btn-ver-menos").forEach((btn) => {
    btn.addEventListener("click", () => {
      const targetSelector = btn.getAttribute("data-target");
      if (!targetSelector) return;
      hideTarget(targetSelector);
    });
  });

  const toggleCombosBtn = document.getElementById("toggle-combos");
  const verMaisContainer = document.getElementById("ver-mais-container");

  if (toggleCombosBtn && verMaisContainer) {
    toggleCombosBtn.addEventListener("click", () => {
      verMaisContainer.classList.toggle("show");

      toggleCombosBtn.innerText = verMaisContainer.classList.contains("show")
        ? "Ver menos"
        : "Ver Combos";
    });
  }
});


(function () {
  const section = document.querySelector("#combos");
  if (!section) return;

  const buttons = section.querySelectorAll(".filter-btn");
  if (!buttons.length) return;

  const topGrid = section.querySelector("#dishes-combos");
  const extraContainer = section.querySelector("#combos-extra");
  const extraGrid = section.querySelector("#combos-extra .dishes-grid");

  const btnVerMaisCombos = section.querySelector('.btn-ver-mais[data-target="#combos-extra"]');
  const verMaisWrapperCombos = btnVerMaisCombos ? btnVerMaisCombos.closest(".ver-mais-wrapper") : null;

  const allCards = [
    ...Array.from(topGrid.querySelectorAll(".dish.combo-extra")),
    ...Array.from(extraGrid.querySelectorAll(".dish.combo-extra"))
  ];

  allCards.forEach(card => {
    if (!card.dataset.home) {
      card.dataset.home = card.closest("#dishes-combos") ? "top" : "extra";
    }
  });

  function move(card, dest) {
    dest.appendChild(card);
  }

  function show(card) {
    card.hidden = false;
  }

  function hide(card) {
    card.hidden = true;
  }

function applyFilter(filter) {
  if (!topGrid || !extraGrid) return;

  if (filter === "todos") {
    allCards.forEach(card => {
      (card.dataset.home === "top" ? topGrid : extraGrid).appendChild(card);
      card.hidden = false;
    });

    if (verMaisWrapperCombos) verMaisWrapperCombos.style.display = "";
    if (btnVerMaisCombos) btnVerMaisCombos.style.display = "inline-flex";

    if (extraContainer) {
      extraContainer.style.display = "";
      extraContainer.classList.remove("show");
    }

    return;
  }

  if (extraContainer) extraContainer.style.display = "none";
  if (verMaisWrapperCombos) verMaisWrapperCombos.style.display = "none";
  if (btnVerMaisCombos) btnVerMaisCombos.style.display = "none";

  const match = [];
  const rest = [];

  allCards.forEach(card => {
    const publico = (card.dataset.publico || "").toLowerCase();
    if (publico === filter) match.push(card);
    else rest.push(card);
  });

  match.forEach(card => {
    topGrid.appendChild(card);
    card.hidden = false;
  });

  rest.forEach(card => {
    extraGrid.appendChild(card);
    card.hidden = true;
  });
}


  buttons.forEach(btn => {
    btn.addEventListener("click", () => {
      buttons.forEach(b => b.classList.remove("active"));
      btn.classList.add("active");
      applyFilter(btn.dataset.filter);
      section.scrollIntoView({ behavior: "smooth", block: "start" });
    });
  });

  applyFilter("todos");
})();
