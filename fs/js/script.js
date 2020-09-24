const logoImg = document.querySelector('#logo-img');
const cards = document.querySelector('.cards');
let rotateLogoDeg = 0;

logoImg.addEventListener('mouseover', () => {

  if (rotateLogoDeg == 0)
    logoImg.classList.add('trans');

  rotateLogoDeg += 90;

  if (rotateLogoDeg == 90) 
    logoImg.classList.add('r-90-l');
  if (rotateLogoDeg == 180)
    logoImg.classList.add('r-180-l');
  if (rotateLogoDeg == 270)
    logoImg.classList.add('r-270-l');
  if (rotateLogoDeg == 360) {
    logoImg.classList.add('r-360-l');
  }
});

logoImg.addEventListener('mouseout', () => {
  if (rotateLogoDeg == 360) {
    logoImg.classList.remove('trans');
    rotateLogoDeg = 0;
    logoImg.classList.remove('r-90-l', 'r-180-l', 'r-270-l', 'r-360-l');
  }
});

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

$(document).ready(function(){
  $('.news-slider').slick({
    fade: true,
    arrows: false,
    dots: true,
    autoplay: true,
    autoplaySpeed: 4000,
  });
});

$(document).ready(function(){
  $('.test-slider').slick({
    vertical: true,
    verticalSwiping: true,
    nextArrow: '<button type="button" class="slick-next blick">Наступний</button>',
    autoplay: true,
    autoplaySpeed: 8000,
  });
});
