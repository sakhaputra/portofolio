document.addEventListener('DOMContentLoaded', function() {
    const dashboardBtn = document.getElementById('dashboardBtn');
    const readMoreBtn = document.getElementById('readMoreBtn');
    const profileContent = document.getElementById('profile-content');

    dashboardBtn.addEventListener('click', function() {
        window.location.href = 'dashboard.php';
    });

    // Load profile content
    fetch('profil.php')
        .then(response => response.text())
        .then(data => {
            profileContent.innerHTML = data;
        });

    let isExpanded = false;
    readMoreBtn.addEventListener('click', function() {
        if (isExpanded) {
            profileContent.style.maxHeight = '200px';
            readMoreBtn.textContent = 'Baca Selengkapnya';
        } else {
            profileContent.style.maxHeight = 'none';
            readMoreBtn.textContent = 'Sembunyikan';
        }
        isExpanded = !isExpanded;
    });
});