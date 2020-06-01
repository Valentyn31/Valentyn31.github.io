const fIcon = document.getElementById('f-open-btn');
const sIcon = document.getElementById('s-open-btn');
const tIcon = document.getElementById('t-open-btn');
const firstClose = document.getElementById('card-close-btn1');
const secondClose = document.getElementById('card-close-btn2');
const thirdClose = document.getElementById('card-close-btn3');
const firstCard = document.getElementById('first-card');
const secondCard = document.getElementById('second-card');
const thirdCard = document.getElementById('third-card');
const loginButton = document.querySelector('.login-button');
const promoLoginBtn = document.getElementById('promo-login-btn');
const modalLogin = document.querySelector('.modal-login');
const dialogCloseBtn = document.querySelector('.dialog-close__btn');
const registerUrl = document.querySelector('.register-url');
const forgotPassword = document.getElementById('forgot-password');
const modalRegister = document.querySelector('.modal-register');
const regCloseBtn = document.getElementById('reg-close-btn');
const modalForgot = document.querySelector('.modal-forgot');
const gotCloseBtn = document.getElementById('got-close-btn');

fIcon.addEventListener('click', function () {
    firstCard.classList.add('is-flip');  
});
firstClose.addEventListener('click', function () {
    firstCard.classList.remove('is-flip');
});
sIcon.addEventListener('click', function () {
    secondCard.classList.add('is-flip');
});
secondClose.addEventListener('click', function () {
    secondCard.classList.remove('is-flip');
});
tIcon.addEventListener('click', function () {
    thirdCard.classList.add('is-flip');
});
thirdClose.addEventListener('click', function () {
    thirdCard.classList.remove('is-flip');
});
loginButton.addEventListener('click', () => {
    modalLogin.style.display = 'flex';
});
promoLoginBtn.addEventListener('click', () => {
    modalLogin.style.display = 'flex';
});
dialogCloseBtn.addEventListener('click', () => {
    modalLogin.style.display = 'none';
});
registerUrl.addEventListener('click', (event) => {
    event.preventDefault();
    modalLogin.style.display = 'none';
    modalRegister.style.display = 'flex';
});
forgotPassword.addEventListener('click', (event) => {
    event.preventDefault();
    modalForgot.style.display = "flex";
    modalLogin.style.display = "none";
});
regCloseBtn.addEventListener('click', () => {
    modalRegister.style.display = 'none';
})
gotCloseBtn.addEventListener('click', () => {
    modalForgot.style.display = 'none';
});

new Swiper('.swiper-container', 
    {
    loop: true,
    speed: 500,
    effect: "slide",
    autoplay: {
        delay: 8000
    }
});
let wow = new WOW(
    {
        offset: 50,
        mobile: false
    }
)
wow.init();