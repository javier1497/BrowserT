/*function initMap() {
    var options = {
        zoom: 10,
        center: {lat: 25.7617, lng: -80.1918} // cordenadas
    };

    var map = new google.maps.Map(document.getElementById('map'), options);
    
    var marker = new google.maps.Marker({
        position: {lat: 25.7617, lng: -80.1918}, // cordenadas
        map: map
    });

    var contentString = '<div id="content">'+
                        '<h3>Humedad: 76%</h3>'+
                        '</div>';

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });

    marker.addListener('click', function() {
        infowindow.open(map, marker);
    });

    
}*/