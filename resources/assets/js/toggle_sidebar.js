/**
 * Show the sidebar
 */
// Wrap in a function to ensure no collisions with other code
(() => {
    // Whether we need to collapse the sidebar or not, it will happen instantly.
    // Smoothness in transitions will be enabled after loading the page
    window.setTimeout(() => {
        let sidebar = document.getElementById('sidebar');
        sidebar.classList.remove('c-no-transition');
    }, 150);

    let showSidebar = function () {
        let sidebar = document.getElementById('sidebar');
        sidebar.classList.add('c-sidebar-lg-show');
    };

    /**
     * Returns true if sidebar should be shown, false if it shouldn't.
     * @returns {boolean}
     */
    let sidebarShouldBeShown = function () {
        let item = window.localStorage.getItem('remember_sidebar');
        return (item === null || item === 'true');
    };

    if (sidebarShouldBeShown()) {
        showSidebar();
    }
})();