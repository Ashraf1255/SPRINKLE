<html>
<head>
  <title>SPRINKLE</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="container ">
    <div class="green">
      <p>SPRINKLE</p>
    </div>

    <div class="icon-bar">
  <a class="active" href="#"><i class="fa fa-home"></i></a> 
  <a href="http://ojo-streamer.herokuapp.com/"><i class="fa fa-globe  "></i></a> 
  <a href="#"><i class="fa fa-envelope"></i></a> 
  <a href="#"><i class="fa fa-newspaper-o"></i></a>
  <a href="#"><i class="fa fa-search"></i></a> 
</div>

   <div id="map" style="margin:0 0 2 0; width:300px;height:250px;background:black"></div>

<script>
function myMap() {
var mapOptions = {
    center: new google.maps.LatLng(51.5, -0.12),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsDexmYd9rjSiFQNLKoRhD2SNb9zCWz04&callback=myMap"></script>

<div class="new">
  <div class="a">
   <h3>Dhaka</h3>

   <p>I'm a paragraph. Click here to add your own text and edit me. Let your users get to know you.</p>
   <button>Read more</button>
 </div>
 <div class="b">
   <h3>London</h3>

   <p>I'm a paragraph. Click here to add your own text and edit me. Let your users get to know you.</p>
   <button>Read more</button>
 </div>
 <div class="c">
   <h3>Europe</h3>

   <p>I'm a paragraph. Click here to add your own text and edit me. Let your users get to know you.</p>
   <button>Read more</button>
 </div>
</div>
</body>
</html>