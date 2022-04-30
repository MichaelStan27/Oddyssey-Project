require("./bootstrap");

// Dropdown menu
const userDropdownButton = document.querySelector("#user-menu-button");
const userDropdownMenu = document.querySelector("#user-menu");

userDropdownButton?.addEventListener("click", () => {
    userDropdownMenu.style.display =
        userDropdownMenu.style.display !== "block" ? "block" : "none";
});

const adminDropdownButton = document.querySelector("#admin-menu-button");
const adminDropdownMenu = document.querySelector("#admin-menu");

adminDropdownButton?.addEventListener("click", () => {
    adminDropdownMenu.style.display =
        adminDropdownMenu.style.display !== "block" ? "block" : "none";
});

// Game detail carousel
const carouselImages = document.querySelectorAll("img[data-carousel='true']");

document
    .querySelector("#carousel-next-btn")
    ?.addEventListener("click", () => changeImage(1));
document
    .querySelector("#carousel-prev-btn")
    ?.addEventListener("click", () => changeImage(-1));

let activeIndex = 0;

function changeImage(n) {
    carouselImages[activeIndex].style.opacity = 0;
    activeIndex =
        activeIndex + n < 0
            ? carouselImages.length - 1
            : (activeIndex + n) % carouselImages.length;
    carouselImages[activeIndex].style.opacity = 1;
}

// Flashcard
const flashCard = document.querySelector("#flash-card") ?? false;

if (flashCard) {
    setTimeout(() => {
        flashCard.style.opacity = 0;
    }, 1500);
}
