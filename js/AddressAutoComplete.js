function initialize() {
    var searchTextField = document.getElementById('input_1_19');
    var autocomplete = new google.maps.places.Autocomplete(searchTextField);
      autocomplete.addListener('place_changed', function () {

          var inputVal = "";
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
                console.log('searchTextField: ', searchTextField.value.split(',')[0]);
              document.getElementById('searchTextField').value = street.long_name;
              document.getElementById('input_1_19').value = "";
              document.getElementById('input_1_19').value = searchTextField.value.split(',')[0];
          }
          
          /* if (streetNumber) {
              document.getElementById('searchTextField').value += " " + streetNumber.long_name;
              document.getElementById('streetnumber').value = streetNumber.long_name;
          } */
          
          if (postalCode)
              document.getElementById('input_1_23').value = "";
              document.getElementById('input_1_23').value = postalCode.long_name;
          
          if (city)
              document.getElementById('input_1_24').value = "";
              document.getElementById('input_1_24').value = city.long_name;
      });
  }
  
document.addEventListener("DOMContentLoaded", function() { 
    google.maps.event.addDomListener(window, 'load', initialize);
});