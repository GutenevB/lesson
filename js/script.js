var maps = {

    init:function(){
        this.map();
        this.geo();
    },

    map: function () {
        var map = new GMaps({
            div: '#map',
            lat: -12.043333,
            lng: -77.028333
        });
    },

    geo: function(){
        $('#geocoding_form').submit(function(e){
            e.preventDefault();
            GMaps.geocode({
                address: $('#address').val().trim(),
                callback: function(results, status){
                    if(status=='OK'){
                        var latlng = results[0].geometry.location;
                        maps.map(map).setCenter(latlng.lat(), latlng.lng());
                        maps.map(map).addMarker({
                            lat: latlng.lat(),
                            lng: latlng.lng()
                        });
                    }else{
                        alert('Error');
                    }
                }
            });
        });
    },


}