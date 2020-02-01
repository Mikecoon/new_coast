
ymaps.ready(function () {

    const myMap = new ymaps.Map('map', {
            center: [55.9744511,37.6665107],
            zoom: 16
        }, {
            searchControlProvider: 'yandex#search'
        }),


        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {}, {});

    myMap.geoObjects.add(myPlacemark)

    myMap.behaviors.disable('scrollZoom');

});