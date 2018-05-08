<!DOCTYPE html>
<html>
  <head>
    <title>Açores</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script type="text/javascript">
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 38.2883982, lng: -28.2467441},
          zoom: 8.2
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBXfh7T3kmoQQ42D1ql3XsyA9QXx0hGe4&callback=initMap" async defer></script>
  </body>
</html>
