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

document.querySelectorAll('.faq-item').forEach(item => {
    item.addEventListener('click', () => {

        const isActive = item.classList.contains('active');

        // fecha todos
        document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('active'));

        // abre só o clicado
        if (!isActive) {
            item.classList.add('active');
        }
    });
});

const chatBtn = document.getElementById('chat-btn');
const chatbox = document.getElementById('chatbox');
const closeChat = document.getElementById('close-chat');
const content = document.getElementById('chat-content');
const input = document.getElementById('chat-input');

chatBtn.onclick = () => chatbox.style.display = 'flex';
closeChat.onclick = () => chatbox.style.display = 'none';

function addMsg(text, type) {
    const div = document.createElement('div');
    div.className = type === 'user' ? 'user-msg' : 'bot-msg';
    div.innerText = text;
    content.appendChild(div);
    content.scrollTop = content.scrollHeight;
}

function responder(msg) {
    msg = msg.toLowerCase();

    if (msg.includes('dói') || msg.includes('dor')) {
        return "A depilação é bem tranquila 😊 Sensação leve de beliscão.";
    }

    if (msg.includes('sess') || msg.includes('quantas')) {
        return "Normalmente de 6 a 10 sessões para melhor resultado.";
    }

    if (msg.includes('preço') || msg.includes('valor')) {
        return "Os valores variam por área 😉 Clique em 'Agendar' para ver tudo.";
    }

    if (msg.includes('antes')) {
        return "Evite sol e não use cera. Raspe com lâmina antes.";
    }

    if (msg.includes('depois') || msg.includes('cuidados')) {
        return "Use protetor solar e evite exposição ao sol.";
    }

    return "Não entendi 🤔 Quer falar direto comigo? https://wa.me/5549920014288";
}

function send() {
    const text = input.value.trim();
    if (!text) return;

    addMsg(text, 'user');

    setTimeout(() => {
        addMsg(responder(text), 'bot');
    }, 400);

    input.value = '';
}

input.addEventListener('keypress', e => {
    if (e.key === 'Enter') send();
});

function quick(text) {
    input.value = text;
    send();
}
