function initialize() {
    var searchTextField = document.getElementById('input_1_19');
    var autocomplete = new google.maps.places.Autocomplete(searchTextField);
    var postalCodeInput = document.getElementById('input_1_23');
    var postalCodeLabel = document.getElementById('gfield_description_1_23');
    var cityInput = document.getElementById('input_1_24');
    var cityLabel = document.getElementById('gfield_description_1_24');

    autocomplete.addListener('place_changed', function () {
        var place = autocomplete.getPlace();
        
        if (!!place.address_components) {
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
                searchTextField.value = searchTextField.value.split(',')[0];
            }
            
            if (postalCode && postalCodeInput) {
                postalCodeInput.value = postalCode.long_name;
                postalCodeLabel.classList.add("complete");
            }
            
            if (city && cityInput) {
                cityInput.value = city.long_name;
                cityLabel.classList.add("complete");
            }
        }

    });
}
  
document.addEventListener("DOMContentLoaded", function() { 
    google.maps.event.addDomListener(window, 'load', initialize);
});
