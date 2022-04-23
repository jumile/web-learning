const menuLinks = document.querySelectorAll('header nav ul li a');
const menu = document.querySelector('header nav ul');
const hiddenMenuTicker = document.querySelector('.hidden-menu-ticker');
for(let i=0; i<menuLinks.length; i++) {
    addHandler(menuLinks[i], 'click', function() { 
        menu.className= 'right';
        hiddenMenuTicker.checked=false;
    });
}  