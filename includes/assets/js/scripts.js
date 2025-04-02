const toggleBtn = document.getElementById('toggle-btn');
const sidebar = document.getElementById('sidebar');
const content = document.getElementById('content');
const themeToggle = document.getElementById('theme-toggle');

toggleBtn.addEventListener('click', () => {
    sidebar.classList.toggle('hide');
    content.classList.toggle('full');
    if (window.innerWidth <= 768) {
        sidebar.classList.toggle('show');
    }
});

// For mobile view
window.addEventListener('resize', () => {
    if (window.innerWidth <= 768) {
        sidebar.classList.add('hide');
        sidebar.classList.remove('show');
        content.classList.add('full');
    } else {
        sidebar.classList.remove('hide');
        sidebar.classList.remove('show');
        content.classList.remove('full');
    }
});

document.body.addEventListener('click', (e) => {
    if (window.innerWidth <= 768 && !sidebar.contains(e.target) && e.target !== toggleBtn) {
        sidebar.classList.add('hide');
        sidebar.classList.remove('show');
    }
});

// Theme toggle
themeToggle.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme');
    sidebar.classList.toggle('dark-theme');
});

//SUB MENU SCHOOL
document.querySelectorAll('.school-menu').forEach(menuItem => {
    menuItem.addEventListener('click', function (e) {
        const submenu = this.nextElementSibling; // Get the submenu next to the clicked menu item
        if (submenu.style.display === 'block') {
            submenu.style.display = 'none'; // Hide submenu if it's currently visible
        } else {
            submenu.style.display = 'block'; // Show submenu if it's currently hidden
        }
        e.preventDefault(); // Prevent default link behavior
    });
});
