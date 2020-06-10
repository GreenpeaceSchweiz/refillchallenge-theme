function initialize() {
    var searchTextField = document.getElementById('input_1_19');
    var autocomplete = new google.maps.places.Autocomplete(searchTextField);
      autocomplete.addListener('place_changed', function () {

          var inputVal = "";
         /*  var streetInput =  document.getElementById('input_1_19'); */
          var postalCodeInput = document.getElementById('input_1_23');
          var cityInput = document.getElementById('input_1_24');
          var place = autocomplete.getPlace();
          
          postalCode = place.address_components.find((c) => {
              return c.types.includes("postal_code");
          });
          
          street = place.address_components.find((c) => {
              return c.types.includes("route");
          });
          
          city = place.address_components.find((c) => {
              return c.types.includes("locality");
          });
          
          if (street && searchTextField) {
              console.log('searchTextField: ', searchTextField.value.split(',')[0]);
              /* searchTextField.value = street.long_name; */
              searchTextField.value = searchTextField.value.split(',')[0];
          }
          
          if (postalCode && postalCodeInput) {
            postalCodeInput.value = postalCode.long_name;
          }
          
          if (city && cityInput) {
            cityInput.value = city.long_name;
          }

      });
  }
  
document.addEventListener("DOMContentLoaded", function() { 
    google.maps.event.addDomListener(window, 'load', initialize);
});