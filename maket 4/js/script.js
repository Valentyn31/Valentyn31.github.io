const textInputs = document.querySelectorAll('.text-input');
const submitBtn = document.querySelector('.submit-btn');

submitBtn.addEventListener('click', () => {
    textInputs.forEach( element => {
        const value = element.value;

        element.classList.remove('red-input',);

        if (!value) {
            element.classList.add('red-input',);
            element.style.borderColor = "#bababa";
        }

        element.onclick = function () {
            element.classList.remove('red-input');
        };
    });
});;

$(document).ready(function(){
    $('.reviews-slider').slick({
      dots: true,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 10000,
      fade: true,
    });
  });;
$(document).ready(function(){
    $('.our-mentors-slider').slick({
      dots: true,
      arrows: false,
      autoplay: true,
      autoplaySpeed: 10000,
    });
  });;
let scroller = document.querySelectorAll('.scroll');
 
function scrollTo(element) {

    window.scroll({
        left: 0,
        top: element.offsetTop -50,
        behavior: 'smooth'
    });
}

scroller.forEach(item => {
    
    var href = item.dataset.menu;
    var block = document.getElementById(`${href}`);
    
    item.addEventListener('click', (event) => {
        event.preventDefault();

        scrollTo(block);
    })
});




;
$(document).ready(function(){
    $('.courses-slider').slick({
        arrows: false,
        slidesToShow: 3,
        responsive: [
            {
                breakpoint: 850,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                  autoplay: true,
                  autoplaySpeed: 5000,
                  dots: true,
                }
            },
            {
                breakpoint: 601,
                settings: {
                  slidesToShow: 1,
                  dots: true,
                }
            }
        ]
    });
  });
;
const menuNav = document.querySelector('.menu-nav');
const headerBtn = document.querySelector('.header-btn');
const menuBtn = document.querySelector('.menu-btn');

menuBtn.addEventListener('click', () => {
    menuNav.classList.toggle('visible');
    headerBtn.classList.toggle('visible');
});


;



