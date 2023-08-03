const s = document.querySelectorAll('.square input');
const cards = document.querySelectorAll('.cards .card');
s.forEach((item, index) => {
    let card = cards[index];
    item.addEventListener('click', function() { filterSquare(this, card) });
});
function filterSquare(elem, card) {
    if(!elem.checked) card.style.display='none';
    else card.style.display='block';
}

const g = document.querySelectorAll('.gadgets input');
const cardsGadgets = document.querySelectorAll('.cards .info img');
g.forEach((i) => {
    i.addEventListener('click', function() { filterGadgets(this) });
}); 
function filterGadgets(elem) {     
    const newCardsGadgets=[];     
    for(let i in cardsGadgets) {
        let title = cardsGadgets[i].alt;
        if(elem.value==title) {
            let par = cardsGadgets[i].parentNode.parentNode.parentNode;
            newCardsGadgets.push(par);
        } 
    }   
    for(let j=0; j<newCardsGadgets.length; j++) {
        let card=newCardsGadgets[j];
        if(!elem.checked) card.style.display='none';
        else card.style.display='block';
    }       
}

const checkboxes = document.querySelectorAll('.filter input[type="checkbox"]');
const nonFilter=document.getElementById('non-filter');
nonFilter.addEventListener('click', function(e) { e.preventDefault(); filterCancel() });
function filterCancel() {
    checkboxes.forEach( (checkbox) => {
        if(!checkbox.checked) {
            checkbox.checked=true;
            cards.forEach((card) => {
                card.style.display='block';
            });
        }
    });
}

const filter = document.querySelector('.filter');
const filterTablet = document.querySelector('.filter_button');
filterTablet.addEventListener('click', function() {popUpFilter(filter)});
const closeButtonFilter = document.getElementById('close-filter');
closeButtonFilter.addEventListener('click', function() {popUpHide(filter)});
const applyFilter = document.getElementById('apply-filter');
applyFilter.addEventListener('click', function() {  popUpHide(filter); });
function popUpFilter(elem) {
    elem.style.display='block';
}
function popUpHide(elem) {
    elem.style.display="none";
}


