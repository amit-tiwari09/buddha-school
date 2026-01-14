import "./bootstrap";

/* ============================================================
  Handles tasks that should run once the page has fully loaded.
=============================================================== */
window.addEventListener("load", function () {
    let preloader = document.getElementById("loader");
    if (preloader) {
        preloader.classList.add("hidden");
    }
});
