const burgerButton = document.getElementById("toggler");
const overlayMenu = document.getElementById("overlay-full-screen");
const menuLinks = document.querySelectorAll("#overlay-full-screen a");

// burgerButton.addEventListener("click", () => {
//     burgerButton.classList.toggle("menu-open");
//     overlayMenu.classList.toggle("menu-open");
//     overlayMenu.style.display === 'none' ? overlayMenu.style.animation = 'fadeIn 0.5s forwards' : overlayMenu.style.animation = 'fadeOut 0.5s forwards';
//
// });
burgerButton.addEventListener("click", () => {
    burgerButton.classList.toggle("menu-open");
    overlayMenu.classList.toggle("menu-open");

    // Utilisez un délai pour permettre à la transition de s'activer
    setTimeout(() => {
        overlayMenu.classList.toggle("fade-in");
    }, 0.3);
});

menuLinks.forEach((link) => {
    link.addEventListener("click", () => {
        burgerButton.classList.remove("menu-open");
        overlayMenu.classList.remove("menu-open");
        overlayMenu.classList.remove("fade-in");
    });
});



menuLinks.forEach((link) => {
    link.addEventListener("click", () => {
        burgerButton.classList.remove("menu-open");
        overlayMenu.classList.remove("menu-open");
    });
});