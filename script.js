document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("menu-toggle");
    const mainNav = document.getElementById("main-nav");

    if (menuToggle && mainNav) {
        menuToggle.addEventListener("click", function () {
            mainNav.classList.toggle("active");
            const isExpanded = mainNav.classList.contains("active");
            menuToggle.setAttribute("aria-expanded", isExpanded);
        });

        document.addEventListener("click", function (event) {
            if (!mainNav.contains(event.target) && !menuToggle.contains(event.target) && mainNav.classList.contains("active")) {
                mainNav.classList.remove("active");
                menuToggle.setAttribute("aria-expanded", "false");
            }
        });
    }

    const profileBtn = document.getElementById("profile-btn");
    const dropdown = document.getElementById("dropdown");

    if (profileBtn && dropdown) {
        profileBtn.addEventListener("click", function () {
            dropdown.classList.toggle("active");
            const isExpanded = dropdown.classList.contains("active");
            profileBtn.setAttribute("aria-expanded", isExpanded);
        });

        document.addEventListener("click", function (event) {
            if (!profileBtn.contains(event.target) && !dropdown.contains(event.target)) {
                dropdown.classList.remove("active");
                profileBtn.setAttribute("aria-expanded", "false");
            }
        });
    }
});

document.getElementById("menu-btn").addEventListener("click", function () {
    document.getElementById("menu-dropdown").classList.toggle("active");
});