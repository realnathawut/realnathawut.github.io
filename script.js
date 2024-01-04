document.addEventListener('DOMContentLoaded', function () {
    var burgerMenu = document.querySelector('.burger-menu');
    var navLinks = document.querySelector('.nav-links');
    var overlay = document.querySelector('.overlay');

    burgerMenu.addEventListener('click', function () {
        burgerMenu.classList.toggle('open');
        navLinks.classList.toggle('show');
        overlay.classList.toggle('show');

        if (navLinks.classList.contains('show')) {
            document.body.style.backgroundColor = 'transparent';
        } else {
            document.body.style.backgroundColor = '';
        }
    });

    overlay.addEventListener('click', function () {
        burgerMenu.classList.remove('open');
        navLinks.classList.remove('show');
        overlay.classList.remove('show');
        document.body.style.backgroundColor = '';
    });
});
