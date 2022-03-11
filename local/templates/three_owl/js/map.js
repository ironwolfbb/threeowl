if (document.getElementById('map-wrap')) {
    ymaps.ready(init);

function init() {
    // Создание карты.
    var myMap = new ymaps.Map("map-wrap", {
        center: centerMap,
        zoom: 17,
    });

    //на мобильных устройствах... (проверяем по userAgent браузера)
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        //... отключаем перетаскивание карты
        myMap.behaviors.disable('drag');
    }

    // создаем метки
    window.myObjects = ymaps.geoQuery({
        type: "FeatureCollection",
        features: point,
    }).addToMap(myMap);
}
}