const burgerBtn = document.querySelector('.navigation__burger-btn');
const burgerMenu = document.querySelector('.navigation__list');

burgerBtn.classList.remove('navigation__burger-btn--nojs');
burgerMenu.classList.remove('navigation__list--nojs');

burgerBtn.addEventListener('click', () => {
  burgerMenu.classList.toggle('navigation__list--open');
  burgerBtn.classList.toggle('navigation__burger-btn--open');
});

burgerMenu.addEventListener('click', () => {
  burgerMenu.classList.remove('navigation__list--open');
  burgerBtn.classList.remove('navigation__burger-btn--open');
})
