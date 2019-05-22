/**
 * Collapse the sidebar
 */
let collapseSidebar = function() {
    let body = document.getElementsByTagName('body')[0];
    body.classList.remove('brand-minimized');
    body.classList.remove('sidebar-minimized');
};

/**
 * Set cookie if sidebar is collapsed and remove cookie if it's decollapsed.
 */
let toggleSidebarCookie = function() {
    if (sidebarCookieExists()) {
        document.cookie = "remember_sidebar=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
    } else {
        document.cookie = "remember_sidebar=true"
    }
};

/**
 * Check if the remember_sidebar cookie exists. Returns true if it does, false if it doesn't.
 * @returns {number}
 */
let sidebarCookieExists = function() {
    return document.cookie.split(';').filter((item) => item.trim().startsWith('remember_sidebar=')).length;
};

let init = function () {
    if (sidebarCookieExists()) {
        collapseSidebar();
    }

    let sidebarCollapseButton = document.getElementsByClassName('sidebar-minimizer')[0];
    sidebarCollapseButton.addEventListener('click', toggleSidebarCookie)
};

// Wait for the page to finish loading before executing scripts.
window.addEventListener('load', init);
