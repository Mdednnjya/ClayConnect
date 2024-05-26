function initMap() {
    var location = {lat: -7.953889, lng: 112.619472};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 8,
        center: location
    });
    var marker = new google.maps.Marker({
        position: location,
        map: map
    });
}
