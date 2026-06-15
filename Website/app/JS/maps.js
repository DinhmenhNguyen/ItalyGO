function initMap() {
    const italy = { lat: 41.8719, lng: 12.5674 };
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 6,
        center: italy,
    });
    const marker = new google.maps.Marker({
        position: italy,
        map: map,
    });
}
//AIzaSyCr02wZMhDlmK5WE3wZ4zlaZP3v7I2DEoo