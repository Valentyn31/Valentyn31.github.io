'use strict';

/***** variables *****/
const menuNav = document.getElementById('menu-nav');
const headerLink = document.querySelectorAll('.menu-nav__link');
const burger = document.getElementById('burger');
const introducing = document.getElementById('introducing');
const menuNavLink = document.querySelectorAll('.menu-nav__link');
/***** variables *****/

/***** menu scroll *****/
let scrollTo = (element) => {
  element.scrollIntoView({
    behavior: 'smooth',
    block: 'start'
  });
}

menuNav.addEventListener('click', event => {
    event.preventDefault();
    
    let target = event.target;
    
    if (target.classList.contains('menu-nav__link') && 
    !target.classList.contains('active-link')) {
      let href = target.getAttribute('href');
      let section = document.getElementById(href);
      
      scrollTo(section);
    }
});
/***** menu scroll *****/

/***** dropdown *****/
burger.addEventListener('click', () => {
  burger.classList.toggle('active-btn');
  menuNav.classList.toggle('visible');
  menuNavLink.forEach(link => {
    link.classList.toggle('hide');

    if (link.classList.contains('hide')) {
      link.classList.add('revers');
    }
    else {
      link.classList.remove('revers');
    }
  })
});
/***** dropdown *****/

/***** slider1 *****/
$(document).ready(function(){
  $('.items').slick({
    slidesToShow: 4,
    arrows: false,
    dots: false,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          autoplay: true,
          autoplaySpeed: 2000,
          dots: true,
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          dots: true,
        }
      },
    ],
  });
});
/***** slider1 *****/

/***** slider2 *****/
$(document).ready(function(){
  $('.slider2').slick({
    slidesToShow: 2,
    slidesToScroll: 2,
    arrows: false,
    dots: true,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      },
    ],
  });
});
/***** slider2 *****/
