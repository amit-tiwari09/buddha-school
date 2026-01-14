/**
 * ---------------------------------------------------------------------
 * Core Events Manager
 * ---------------------------------------------------------------------
 * This file is responsible for registering all global UI events
 * used throughout the application.
 * ---------------------------------------------------------------------
 */

/* =======================
   Module Imports
========================== */
import { closeModal, handleImageUpload, openModal } from "./modal";
import { handleMenuClick, markActiveMenu, toggleSidebar } from "./sidebar";
import { toggleTabs } from "./tab";
import { printRow } from "./utility";

/* ============================================================
  Global Click Events.
=============================================================== */
document.addEventListener("click", function (event) {
    // Toggle sidebar visibility
    if (event.target.classList.contains("toggle-sidebar")) {
        toggleSidebar();
    }

    // Handle sidebar submenu toggle
    if (event.target.classList.contains("has-submenu")) {
        handleMenuClick(event.target.id);
    }

    // Open modal window
    if (event.target.classList.contains("open-modal")) {
        openModal(event.target.getAttribute("data-targetModalId"));
    }

    // Close modal window
    if (event.target.classList.contains("close-modal")) {
        closeModal(event.target.getAttribute("data-targetModalId"));
    }

    // Handle tab switching
    if (event.target.classList.contains("tab-button")) {
        toggleTabs(event);
    }

    // handle table row data printing
    if (event.target.classList.contains("print-btn")) {
        printRow(event);
    }
});

document.addEventListener("change", function (event) {
    if (event.target.classList.contains("image-upload&preview")) {
        handleImageUpload(event.target);
    }
});

// Highlight active sidebar menu item on page load
markActiveMenu();
