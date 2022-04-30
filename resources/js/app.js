require("./bootstrap");

const userDropdownButton = document.querySelector("#user-menu-button");
const userDropdownMenu = document.querySelector("#user-menu");

userDropdownButton.addEventListener("click", () => {
    userDropdownMenu.style.display =
        userDropdownMenu.style.display !== "block" ? "block" : "none";
});

const adminDropdownButton = document.querySelector("#admin-menu-button");
const adminDropdownMenu = document.querySelector("#admin-menu");

adminDropdownButton.addEventListener("click", () => {
    adminDropdownMenu.style.display =
        adminDropdownMenu.style.display !== "block" ? "block" : "none";
});

const flashCard = document.querySelector("#flash-card");

setTimeout(() => {
    flashCard.style.opacity = 0;
}, 1500);
