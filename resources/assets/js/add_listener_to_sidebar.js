/**
 * Update local store whether sidebar should be shown or not
 */
let toggleSidebarItem = function() {
    if (sidebarShouldBeShown()) {
        window.localStorage.removeItem('remember_sidebar');
    } else {
        window.localStorage.setItem('remember_sidebar', 'true');
    }
};

let sidebarCollapseButton = document.getElementsByClassName('sidebar-minimizer')[0];
sidebarCollapseButton.addEventListener('click', toggleSidebarItem);
