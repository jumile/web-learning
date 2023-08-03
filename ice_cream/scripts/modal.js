const modal = document.querySelectorAll('.popup');
const openButtons = document.querySelectorAll('a[href^="#"]:not(a[href="#"])');

modal.forEach((item) => {
  item.classList.add('popup--hidden');
  item.classList.remove('popup--nojs');
});

openButtons.forEach((btn) => {
  btn.addEventListener('click', (e) => {
    let id = btn.getAttribute('href');
    id = id.substring(1);
    let target = document.getElementById(id);
    if (target.classList.contains('popup')) {
      e.preventDefault();
      target.classList.remove('popup--hidden')
    }
  });
});

modal.forEach((targetModal) => {
  targetModal.addEventListener('click', (e) => {
    let target = e.target;
    if (target.classList.contains('popup') || target.classList.contains('close-modal') || target.classList.contains('close-svg')) {
      targetModal.classList.add('popup--hidden');
    }
  });
});

