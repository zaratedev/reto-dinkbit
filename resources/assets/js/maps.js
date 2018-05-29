;
(function() {
  // Set latitude and length of dinkbit
  const my_place = {
    lat: 19.4036,
    lng: -99.2404
  }


  google.maps.event.addDomListener(window, "load", () => {
    const map = new google.maps.Map(
      document.getElementById('map'), {
        center: my_place,
        zoom: 15
      }
    )

    const marker = new google.maps.Marker({
      map: map,
      position: my_place,
      title: 'dinkbit',
      visible: true
    })
  })
})()
