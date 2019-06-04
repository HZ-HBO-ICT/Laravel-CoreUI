/**
 * Show the sidebar
 */
let showSidebar = function() {
    let body = document.getElementsByTagName('body')[0];
    body.classList.remove('brand-minimized');
    body.classList.remove('sidebar-minimized');
};

/**
 * Returns true if sidebar should be shown, false if it shouldn't.
 * @returns {boolean}
 */
let sidebarShouldBeShown = function() {
    return window.localStorage.getItem('remember_sidebar') === 'true';
};

if (sidebarShouldBeShown()) {
    showSidebar();
}
