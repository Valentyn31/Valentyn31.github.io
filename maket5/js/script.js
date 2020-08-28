$(document).ready(function(){
  $('.testimonials__plans').slick({
    arrows: false,
    slidesToShow: 2,
    slidesToScroll: 2,
    dots: true,
  });
});;
const menuNav = document.getElementById('menu-nav');
const headerLink = document.querySelectorAll('.header__link');

menuNav.addEventListener('click', event => {
    event.preventDefault();
    headerLink.forEach(link => link.classList.remove('active-link'));

    let target = event.target;
    if (target.classList.contains('header__link')) {
        target.classList.add('active-link');
    }
});
