<?php
include_once 'users.php';
$map = new Users();
$map ->getUsers();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript">
        $(document).ready(function(){

           var map = new GMaps({
                div: '#map',
                lat: -12.043333,
                lng: -77.028333
            });
            $('#geocoding_form').submit(function(e){
                e.preventDefault();
                GMaps.geocode({
                    address: $('#address').val().trim(),
                    callback: function(results, status){
                        if(status=='OK'){
                            var latlng = results[0].geometry.location;
                            map.setCenter(latlng.lat(), latlng.lng());
                            map.addMarker({
                                lat: latlng.lat(),
                                lng: latlng.lng()
                            });
                        }
                    }
                });
            });
        });
    </script>
</head>
<body>
<form id="geocoding_form" method="post">
    <div><a href="manage_veiw.php">Manage users</a></div>
    <div id="map"></div>
    <input id="address" type="text">
    <input type="submit" value="Search" />
</form>