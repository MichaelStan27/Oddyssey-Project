require("./bootstrap");

const userDropdownButton = document.querySelector("#user-menu-button");
const userDropdownMenu = document.querySelector("#user-menu");

userDropdownButton.addEventListener("click", () => {
    userDropdownMenu.style.display =
        userDropdownMenu.style.display !== "block" ? "block" : "none";
});
