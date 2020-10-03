/**
 * Update local store whether sidebar should be shown or not
 */
// Wrap in a function to ensure no collisions with other code
(() => {
    let sidebar = document.getElementById('sidebar');

    sidebar.addEventListener('classtoggle', () => {
        let collapsed = sidebar.classList.contains('c-sidebar-lg-show') ? 'true' : 'false';
        window.localStorage.setItem('remember_sidebar', collapsed);
    });
})();