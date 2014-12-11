<?php
  include ('template/header.html');
?>

<style type="text/css">
html,body{
  height:100%;
}
#main, #main>.row {
  height:100%;
}

#left {
  height:100%;
    overflow-y:scroll;
}

#map-canvas {
  width:33.3333%;
    height:calc(100% - 0);
    position:absolute;
    right:0;
    top:50px;
    bottom:0;
}

.navbar-default {
  margin-bottom:0;
}
</style>
</head>
        
<body>
        
<?php
  include ('template/navbar.html');
?>

<div id="map-canvas"></div>
<div class="container-fluid" id="main">
  <div class="row">
    <div class="col-xs-8" id="left">
    
      <h2>Bootstrap Google Maps Demo</h2>
      
      <!-- item list -->
      <div class="panel panel-default">
        <div class="panel-heading"><a href="">Item heading</a></div>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
        Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
        dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
        Aliquam in felis sit amet augue.</p>
      
      <hr>
      
      <div class="panel panel-default">
        <div class="panel-heading"><a href="">Item heading</a></div>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
        Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
        dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
        Aliquam in felis sit amet augue.</p>
      
      <hr>
      
      <div class="panel panel-default">
        <div class="panel-heading"><a href="">Item heading</a></div>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
        Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
        dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
        Aliquam in felis sit amet augue.</p>
      
      <hr>
      
      <div class="panel panel-default">
        <div class="panel-heading"><a href="">Item heading</a></div>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
        Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
        dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
        Aliquam in felis sit amet augue.</p>
      
      <hr>
      <!-- /item list -->
      
      <p>
      <a href="">info</a> | <a href="">sth</a>
      </p>
      
      <hr> 
        
      <p>
      <a href="" target="_ext" class="center-block btn btn-primary">More</a>
      </p>
        
      <hr>      

    </div>
    <div class="col-xs-4"><!--map-canvas will be postioned here--></div>
    
  </div>
</div>


<?php
  include ('template/footer.html');
?>
         <script type='text/javascript'>
        
        $(document).ready(function() {
        
            function initialize() {
        getLocation(); 
      }
      google.maps.event.addDomListener(window, 'load', initialize);

      function getLocation(){
        if(navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(success, error);
        } else {
          // default location
        }
      }

      function success(position){
        var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

        var mapOptions = {
          center: latlng,
          scrollWheel: false,
          zoom: 12
        };
        
        var marker = new google.maps.Marker({
            position: latlng,
            url: '/',
            animation: google.maps.Animation.DROP
        });
        
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
        
        marker.setMap(map);
      }

      function error(msg){
        if (msg.code == 1) {
            //PERMISSION_DENIED 
        } else if (msg.code == 2) {
            //POSITION_UNAVAILABLE 
        } else {
        }   //TIMEOUT
      }
        
        });
        
        </script>
        
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-40413119-1', 'bootply.com');
          ga('send', 'pageview');
        </script>
    </body>
</html>