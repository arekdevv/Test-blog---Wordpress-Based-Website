const hamburger = document.querySelector('.hamburger');
const container = document.querySelector('.container');
const nav_container = document.querySelector('.nav-container');
const navigation_ul = document.querySelector('.navigation-ul');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active');
    navigation_ul.classList.toggle('active');
});

window.addEventListener('resize', () => {
    if (document.body.clientWidth > 1600) {
        hamburger.classList.remove('active');
        navigation_ul.classList.remove('active');
    }
});

window.addEventListener('scroll', () => {
    nav_container.classList.toggle('sticky', window.scrollY > 0);
    container.classList.toggle('sticky', window.scrollY > 0);
    navigation_ul.classList.toggle('sticky', window.scrollY > 0);
});