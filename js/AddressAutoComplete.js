function initialize() {
    var input = document.getElementById('input_1_19');
    var autocomplete = new google.maps.places.Autocomplete(input);
      autocomplete.addListener('place_changed', function () {
          
          var place = autocomplete.getPlace();
          
          postalCode = place.address_components.find((c) => {
              return c.types.includes("postal_code");
          });
          
          street = place.address_components.find((c) => {
              return c.types.includes("route");
          });
          
         /*  streetNumber = place.address_components.find((c) => {
              return c.types.includes("street_number");
          }); */
          
          city = place.address_components.find((c) => {
              return c.types.includes("locality");
          });
          
          if (street) {
              document.getElementById('searchTextField').value = street.long_name;
              document.getElementById('input_1_19').value = street.long_name;
          }
          
          /* if (streetNumber) {
              document.getElementById('searchTextField').value += " " + streetNumber.long_name;
              document.getElementById('streetnumber').value = streetNumber.long_name;
          } */
          
          if (postalCode)
              document.getElementById('input_1_23').value = postalCode.long_name;
          
          if (city)
              document.getElementById('input_1_24').value = city.long_name;
      });
  }
  google.maps.event.addDomListener(window, 'load', initialize);