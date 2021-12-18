// var google;
function initMap() {
    const myLatLng = { lat: -3.22958, lng: 114.59891 };
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 10,
      center: myLatLng,
    });
  
    new google.maps.Marker({
      position: myLatLng,
      map,
      title: "SMP-SMA GIBS",
    });
  }
