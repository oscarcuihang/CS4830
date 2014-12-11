<?php
  include ('template/header.html');
?>

<style type="text/css">
html,body{
  height:100%;
}

#map-canvas {
  height:90%;
  margin: 0px;
  padding: 0px
}

.navbar-default {
  margin-bottom:0;
}

#panel {
        position: absolute;
        top: 5px;
        left: 50%;
        margin-left: -180px;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
      }
</style>
</head>
        
<body>
        
<?php
  include ('template/navbar.html');
?>

<div id="map-canvas" style="float:left;width:70%;height:100%;"></div>
    <div id="control_panel" style="float:right;width:30%;text-align:left;padding-top:20px">
    <div style="margin:20px;border-width:2px;">
    
    <button id="ut_road" type="submit" onclick="ut_map();" value="http://babbage.cs.missouri.edu/~hcfxd/CS4830/GoogleMapAPI/ut_trip.kml">UT road trip</button>
     </br> 
     <button id="ak_road" type="submit" onclick="ak_map();" value="http://babbage.cs.missouri.edu/~hcfxd/CS4830/GoogleMapAPI/ak_trip.kml">AK road trip</button>

   </br> 
     <button id="ca_1" type="submit" onclick="ca_1();" value="http://babbage.cs.missouri.edu/~hcfxd/CS4830/GoogleMapAPI/ca_1.kml">CA ROUTE 1</button>


   </div>
    <div id="directions_panel" style="margin:20px;background-color:#FFEE77;"></div>
    </div>

<?php
  include ('template/footer.html');
?>


<script>
function initialize() {
    var chicago = new google.maps.LatLng(41.875696,-87.624207);
    var mapOptions = {
      zoom: 3,
      center: chicago
      }

    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    
  }
  google.maps.event.addDomListener(window, 'load', initialize());


function ut_map(){
     var kml_link = document.getElementById('ut_road').value;
  google.maps.event.addDomListener(window, 'load', initialize_ut(kml_link));

 function initialize_ut(kml_link) {
    //console.log(kml_link);
    var chicago = new google.maps.LatLng(41.875696,-87.624207);
    var mapOptions = {
      zoom: 3,
      center: chicago
      }

    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var ctaLayer = new google.maps.KmlLayer({
      url: kml_link
    });
    ctaLayer.setMap(map);
  }
}

 function ak_map(){
      var kml_link = document.getElementById('ak_road').value;
      console.log(kml_link);
function initialize_ak(kml_link) {
    var chicago = new google.maps.LatLng(41.875696,-87.624207);
    var mapOptions = {
      zoom: 3,
      center: chicago
      }

    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var ctaLayer = new google.maps.KmlLayer({
      url: kml_link
    });
    ctaLayer.setMap(map);
  }
  google.maps.event.addDomListener(window, 'load', initialize_ak(kml_link));

 }


function ca_1(){
      var kml_link = document.getElementById('ca_1').value;
      console.log(kml_link);
function initialize_ak(kml_link) {
    var chicago = new google.maps.LatLng(41.875696,-87.624207);
    var mapOptions = {
      zoom: 3,
      center: chicago
      }

    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var ctaLayer = new google.maps.KmlLayer({
      url: kml_link
    });
    ctaLayer.setMap(map);
  }
  google.maps.event.addDomListener(window, 'load', initialize_ak(kml_link));

 }
</script>

        
    
    </body>
</html>