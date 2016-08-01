<?php

  $content = array(
    'title' => 'Monopoly',
    'heading' => array(
      'main' => 'Monopoly',
      'sub' => 'Everything you may need to know about the properties'
    )
  );

  include_once('includes/html_header.php');
  include_once('includes/body_header.php');
  include_once('includes/navigation.php');
?>

  <section>
      <div class="container">
        <h1><?php
          if ($_POST['txt_name']) {
            $name = $_POST['txt_name'];
            $characters = strlen($name);
            echo "Hello " . $name . ".";
            echo "Your name has " . $characters . " letters in it.";
          }
        ?></h1>
          <form method="post" action="form.php">
            <input type="text" name="txt_name" />
            <input type="submit" value="Submit" />
          </form>
      </div>
  </section>
  <div id="map-canvas"></div>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>

   <script>
var map;

function initialize() {
 var mapOptions = {
   zoom: 6,
   mapTypeId: google.maps.MapTypeId.ROADMAP
 };
 map = new google.maps.Map(document.getElementById('map-canvas'),
     mapOptions);

 // Try HTML5 geolocation
 if(navigator.geolocation) {
   navigator.geolocation.getCurrentPosition(function(position) {
          initialLocation = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
          map.setCenter(initialLocation);
          var infowindow = new google.maps.InfoWindow({
            map: map,
            position: initialLocation ,
            content: 'Location found using W3C standard'
          });
          var marker = new google.maps.Marker({
            position: initialLocation,
            map: map
          });
        }, function() {
          handleNoGeolocation(true);
        });
 } else {
   // Browser doesn't support Geolocation
   handleNoGeolocation(false);
 }
}

function handleNoGeolocation(errorFlag) {
 if (errorFlag) {
   var content = 'Error: The Geolocation service failed.';
 } else {
   var content = 'Error: Your browser doesn\'t support geolocation.';
 }

 var options = {
   map: map,
   position: new google.maps.LatLng(60, 105),
   content: content
 };

 var infowindow = new google.maps.InfoWindow(options);
 map.setCenter(options.position);
}

google.maps.event.addDomListener(window, 'load', initialize);

   </script>

<?php
  include_once('includes/html_footer.php');
?>
