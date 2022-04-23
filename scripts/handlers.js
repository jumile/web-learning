function addHandler(element, ev, fun) {
    try{
        element.addEventListener(ev, fun);
    } catch(err) {
        element.attachEvent('on'+ev, fun);
    }
}
function cancelReaction(e) {
    var e= e||event;
    try {
        e.preventDefault();
    } catch(err) {
        e.returnValue=false;
    }
}