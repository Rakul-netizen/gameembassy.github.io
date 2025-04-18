$(document).ready(function () {

    let currentPath = window.location.pathname;

    $('.navlink').each(function () {
        let linkPath = $(this).attr('href');
        if (linkPath === currentPath) {
            $(this).addClass('active');
        }
    });
});


document.getElementById('menu-toggle').addEventListener('click', function () {
    document.getElementById('myNavbar').classList.toggle('show');
});
