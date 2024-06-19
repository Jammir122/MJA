const menu = document.querySelector(".menu");
const openMenuBoton = document.querySelector(".open-menu");
const closeMenuBoton = document.querySelector(".Close-menu");

function toggleMenu(){
    menu.classList.toggle("menu_opened");
}

openMenuBoton.addEventListener("click", toggleMenu);
closeMenuBoton.addEventListener("click", toggleMenu);

const menuLinks = document.querySelectorAll('.menu a[href^="#"]');

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      const id = entry.target.getAttribute("id");
      const menuLink = document.querySelector(`.menu a[href="#${id}"]`);

      if (entry.isIntersecting) {
        document.querySelector(".menu a.selected").classList.remove("selected");
        menuLink.classList.add("selected");
      }
    });
  },
  { rootMargin: "-10% 0px -90% 0px" } // Ajusta los valores según la distancia deseada
);

menuLinks.forEach((menuLink) => {
  menuLink.addEventListener("click", function () {
    menu.classList.remove("menu_opened");
  });

  const hash = menuLink.getAttribute("href");
  const target = document.querySelector(hash);
  if (target) {
    observer.observe(target);
  }
});

// Observador para el footer
const footer = document.querySelector("footer");
const footerLink = document.querySelector('.menu a[href="#footer"]');

if (footer && footerLink) {
  const footerObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          document.querySelector(".menu a.selected").classList.remove("selected");
          footerLink.classList.add("selected");
        }
      });
    },
    { rootMargin: "0px 0px 0px 0px" }
  );

  footerObserver.observe(footer);
}

// Evento de scroll para verificar si la página está en la parte superior
window.addEventListener("scroll", () => {
  if (window.scrollY === 0) {
    // Quitar la clase 'selected' de todos los enlaces
    document.querySelectorAll(".menu a.selected").forEach((link) => {
      link.classList.remove("selected");
    });
    // Añadir la clase 'selected' al primer enlace del menú
    if (menuLinks.length > 0) {
      menuLinks[0].classList.add("selected");
    }
  }
});
