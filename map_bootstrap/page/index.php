<?php
	include ('../template/header.html');
?>
	<title></title>

<script>
      var map; 

      function initialize(location)
      {
        console.log(location);

        var current_location = new google.maps.LatLng(location.coords.latitude,location.coords.longitude);

        var mapOptions = {
          zoom: 15,
          center: current_location,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        map = new google.maps.Map(document.getElementById('map_canvas'),
            mapOptions);

        var marker = new google.maps.Marker({
          position: current_location,
          map: map
        });
      }

      $(document).ready(function()
      {
        navigator.geolocation.getCurrentPosition(initialize);
      });
    </script>

</head>
<body>
	
<?php
	include ('../template/navbar.html');
?>

<div class="container">
	<div id="map_canvas"></div>


</div>

<?php
	include ('../template/copyrights.html');
	include ('../template/footer.html');
?>