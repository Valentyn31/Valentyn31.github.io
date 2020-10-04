const customLogo = document.querySelector('.custom-logo');
const cards = document.querySelector('.cards');
const burgerBtn = document.querySelector('.burger-btn');
const headerMenu = document.querySelector('.header-nav .menu');
console.log(headerMenu);
let rotateLogoDeg = 0;

customLogo.addEventListener('mouseover', () => {

  if (rotateLogoDeg == 0)
  customLogo.classList.add('trans');

  rotateLogoDeg += 90;

  if (rotateLogoDeg == 90) 
    customLogo.classList.add('r-90-l');
  if (rotateLogoDeg == 180)
    customLogo.classList.add('r-180-l');
  if (rotateLogoDeg == 270)
    customLogo.classList.add('r-270-l');
  if (rotateLogoDeg == 360) {
    customLogo.classList.add('r-360-l');
  }
});

customLogo.addEventListener('mouseout', () => {
  if (rotateLogoDeg == 360) {
    customLogo.classList.remove('trans');
    rotateLogoDeg = 0;
    customLogo.classList.remove('r-90-l', 'r-180-l', 'r-270-l', 'r-360-l');
  }
});

if (cards !== null) {
  cards.addEventListener('click', (event) => {
    
    const target = event.target;
    const element = target.closest('svg');

    if (element !== null) {
      const card = element.closest('.card');
      console.log(card);
      const front = card.querySelector('.front');
      const back = card.querySelector('.back');
      card.classList.toggle('is-flip');

    }
      
  });
}

burgerBtn.addEventListener('click', () => {
  burgerBtn.classList.toggle('active-burger');
  headerMenu.classList.toggle('visible-menu');
});

jQuery(document).ready(function($){
  $('.news-slider').slick({
    fade: true,
    arrows: false,
    dots: true,
    autoplay: true,
    autoplaySpeed: 4000,
  });
});

jQuery(document).ready(function($){
  $('.test-slider').slick({
    vertical: true,
    verticalSwiping: true,
    nextArrow: '<button type="button" class="slick-next blick">Наступний</button>',
    autoplay: true,
    autoplaySpeed: 8000,
    responsive: [
      {
        breakpoint: 576,
        settings: {
          verticalSwiping: false,
        }
      },
    ]
  });
});
