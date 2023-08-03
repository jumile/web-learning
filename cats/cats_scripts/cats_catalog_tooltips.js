$(document).ready(function() {
    $('.card .info p img').tooltip({
        position: {
            my: "left-31% bottom-10", // точка на блоке с пдсказкой, для к-ой задаем позиционирвоание
            at: "center top", // точка на элементе, относительно к-ой будет позиционирование                  
        },
        classes: {
            "ui-tooltip": 'ui-tooltip arrow'
        }
    })
}); 
     