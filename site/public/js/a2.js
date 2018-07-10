  google.maps.event.addDomListener(window, 'load', intilize);
    function intilize() {
        var autocomplete = new google.maps.places.Autocomplete(document.getElementById("txtautocomplete2"));

        google.maps.event.addListener(autocomplete, 'place_changed', function () {

        var place = autocomplete.getPlace();
        var location = "Address: " + place.formatted_address ;
        var Latitude = place.geometry.location.lat();
        var Longitude = place.geometry.location.lng();

       // document.getElementById('lblresult').innerHTML = location;
       // document.getElementById('lat').innerHTML = Longitude;
       // document.getElementById('long').innerHTML = Latitude;
        document.getElementById("lat2").value = Latitude;
        document.getElementById("long2").value = Longitude;
        });

    };





 // autocomplet : this function will be executed every time we change the text
