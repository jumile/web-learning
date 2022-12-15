const moreButton = document.querySelector('.gallery__moreButton');
const examples = document.querySelectorAll('.example');
const spans = document.querySelectorAll("button span");
moreButton.addEventListener('click', () => {
    for(let i=2; i<examples.length; i++) {
        examples[i].classList.toggle('example--hidden');
    }
    spans.forEach((span) => {
        span.classList.toggle('button--hidden');
    });   
});
