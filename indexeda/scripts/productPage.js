const cards = document.querySelectorAll('.food-item');
const prodPage = document.querySelector('.product-page');
const backLink = document.querySelector('.back');

cards.forEach((card) => {    
    card.addEventListener('click', (e) => {
        let btn = card.querySelector('.food-cart');               
        if(e.target !== btn) {
            prodPage.style.display='block';
            document.body.style.overflow='hidden';                 
        }
    });
});

backLink.addEventListener('click', (e) => {
    e.preventDefault();
    prodPage.style.display='none';
    document.body.style.overflow='';
})