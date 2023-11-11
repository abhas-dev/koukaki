const burgerButton = document.getElementById("toggler");
const overlayMenu = document.getElementById("overlay-full-screen");
const menuLinks = document.querySelectorAll("#overlay-full-screen a");
const animationDelay = 500;

function addAnimationClass(element, animationClass, duration) {
    element.classList.add(animationClass);
    setTimeout(() => {
        element.classList.remove(animationClass);
    }, duration);
}

function openMenu() {
    if (!overlayMenu.classList.contains('animate__fadeInDown')) {
        addAnimationClass(overlayMenu, 'animate__fadeInDown', animationDelay);
    }
    burgerButton.classList.add("menu-open");
    overlayMenu.classList.add("menu-open");
}

function closeMenu() {
    burgerButton.classList.remove("menu-open");
    overlayMenu.classList.remove("menu-open");
    addAnimationClass(overlayMenu, 'animate__fadeOutUp', animationDelay);
}

burgerButton.addEventListener("click", () => {
    if (overlayMenu.classList.contains("menu-open")) {
        addAnimationClass(overlayMenu, 'animate__fadeOutUp', 300);
        setTimeout(closeMenu, 300);
    } else {
        openMenu();
    }
});

menuLinks.forEach((link) => {
    link.addEventListener("click", closeMenu);
});