let reserve = document.querySelector('.info .button-reserve2');
let submit = document.querySelector('.popup-content .button-reserve2');
let popup = document.querySelector('.popup');
let thankPopup = document.querySelector('.thank-popup');


function popUpHide(elem) {
    elem.classList.add('hidden');
}
function popUpShow(elem) {
    elem.classList.remove('hidden');
}
function addHandler(element, ev, fun) {
    try{
        element.addEventListener(ev, fun);
    } catch(err) {
        element.attachEvent('on'+ev, fun);
    }
}

addHandler(reserve, 'click', function() {popUpShow(popup)});
addHandler(popup, 'click', (ev) => {
    let target = ev.target;
    if(target.classList.contains('close-button') || target.classList.contains('popup')) {
        popUpHide(popup);
    }
});
addHandler(submit, 'click', function(ev) {
    ev.preventDefault();
    popUpHide(popup);
    popUpShow(thankPopup);
});
addHandler(thankPopup, 'click', (ev) => {
    let target = ev.target;
    if(target.classList.contains('close-button') || target.classList.contains('thank-popup') || target.classList.contains('button') ) {
        popUpHide(thankPopup);
    }
});
