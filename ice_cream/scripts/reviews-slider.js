const reviews = document.querySelectorAll('.feedbacks-slider__item');
const buttons = [];
const slider = document.querySelector('.slider-pagination');

let slides = reviews.length; // кол-во отзывов
// создаем пагинацию по кол-ву слайдов
for (let i = 0; i < slides; i++) {
  // создаем пункт списка, присваиваем класс
  let li = document.createElement('li');
  li.classList.add('slider-pagination__item');
  // создаем кнопку, задаем тип, класс, внутр. содержимое
  let btn = document.createElement('button');
  btn.type = 'button';
  btn.classList.add('slider-pagination__button');
  btn.classList.add('slider-btn');
  btn.innerHTML = `<span class="visually-hidden">Feedback # ${i + 1}</span>`;
  // складываем кнопку в массив для дальнейшего добавления click
  buttons.push(btn);
  // добавляем кнопку в пункт списка
  li.appendChild(btn);
  // добавляем пункт списка в список
  slider.appendChild(li);
}
// делаем первую кнопку выделенной ( = первый слайд виден)
buttons[0].classList.add('slider-btn--current');


buttons.forEach((button) => {
  button.addEventListener('click', (e) => {
    let targetBtn = e.target;
    reviews.forEach((item) => {
      item.classList.add('feedbacks-slider__item--hidden');
    });
    buttons.forEach((btn) => {
      btn.classList.remove('slider-btn--current');
    });

    for (let i = 0; i < buttons.length; i++) {
      if (buttons[i] == targetBtn) {
        reviews[i].classList.remove('feedbacks-slider__item--hidden');
        targetBtn.classList.add('slider-btn--current');
      }
    }
  });
});


