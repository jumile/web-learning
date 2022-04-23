ymaps.ready(function () {
    var myMap = new ymaps.Map('map', {  
            center: [59.938926, 30.323087],
            zoom: 17
        }, {
            searchControlProvider: 'yandex#search'
        }),        
        MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        ),
        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            hintContent: 'Собственный значок метки',
            balloonContent: 'Это красивая метка'
        }, {            
            iconLayout: 'default#image',
            iconImageHref: 'img/map_label.png',
            iconImageSize: [32, 58],
            iconImageOffset: [-5, -38]
        });
    myMap.geoObjects
        .add(myPlacemark)       
});