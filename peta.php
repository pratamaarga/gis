<?php
$title = "Peta Persebaran Universitas Gunadarma";
include_once "header.php";
?>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard centered">
            <div class="panel-heading">
              <h2 class="panel-title"><strong> - TAMPILAN PETA - </strong></h2>
            </div>
            <div class="panel-body">
              <div id="map_div" style="width:98%;height:400px;"></div>

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AAIzaSyAZRuFRANvhYEy3YTgZdCIO8EKNcmEY8_I&callback=initMap"></script>

<script type="text/javascript">

/*
 * declare map as a global variable
 */
var map;

/*
 * use google maps api built-in mechanism to attach dom events
 */
google.maps.event.addDomListener(window, "load", function () {

  /*
   * create map
   */
  var map = new google.maps.Map(document.getElementById("map_div"), {
    center: new google.maps.LatLng(-6.2297264, 106.6894312),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  /*
   * create infowindow (which will be used by markers)
   */
  var infoWindow = new google.maps.InfoWindow();

  /*
   * marker creater function (acts as a closure for html parameter)
   */
  function createMarker(options, html) {
    var marker = new google.maps.Marker(options);
    if (html) {
      google.maps.event.addListener(marker, "click", function () {
        infoWindow.setContent(html);
        infoWindow.open(options.map, this);
      });
    }
    return marker;
  }

  /*
   * add markers to map
   */
  var marker0 = createMarker({
    position: new google.maps.LatLng(33.808678, -117.918921),
    map: map,
    icon: "http://1.bp.blogspot.com/_GZzKwf6g1o8/S6xwK6CSghI/AAAAAAAAA98/_iA3r4Ehclk/s1600/marker-green.png"
  }, "<h1>Marker 0</h1><p>This is the home marker.</p>");

  var marker1 = createMarker({
    position: new google.maps.LatLng(-6.1940985, 106.8463771),
    map: map
  }, "<h2>Universitas Gunadarma</h2><p>Kampus A Kenari</p>");

  var marker2 = createMarker({
    position: new google.maps.LatLng(-6.196810, 106.853008),
    map: map
  }, "<h2>Universitas Gunadarma</h2><p>Kampus B Salemba</p>");

  var marker3 = createMarker({
    position: new google.maps.LatLng(-6.197173, 106.851931),
    map: map
  }, "<h2>Universitas Gunadarma</h2><p>Kampus C Salemba</p>");

  var marker4 = createMarker({
    position: new google.maps.LatLng(-6.368309, 106.833205),
    map: map
  }, "<h2>Universitas Gunadarma</h2><p>Kampus D Depok</p>");

   var marker5 = createMarker({
    position: new google.maps.LatLng(-6.354573, 106.841646),
    map: map
  }, "<h2>Universitas Gunadarma</h2><p>Kampus E Depok</p>");

    var marker6 = createMarker({
    position: new google.maps.LatLng(-6.354182, 106.843619),
    map: map
  }, "<h2>Universitas Gunadarma</h2><p>Kampus G Depok</p>");

     var marker7 = createMarker({
    position: new google.maps.LatLng(-6.352864, 106.836725),
    map: map
  }, "<h2>Universitas Gunadarma</h2><p>Kampus H Depok</p>");

      var marker8 = createMarker({
    position: new google.maps.LatLng(-6.249135, 106.970524),
    map: map
  }, "<h2>Universitas Gunadarma</h2><p>Kampus J1 Kalimalang</p>");

       var marker9 = createMarker({
    position: new google.maps.LatLng(-6.352251, 106.850522),
    map: map
  }, "<h2>Universitas Gunadarma</h2><p>Kampus F3 Depok</p>");

      var marker10 = createMarker({
    position: new google.maps.LatLng(-6.373825, 106.864170),
    map: map
  }, "<h2>Universitas Gunadarma</h2><p>Kampus F4 Depok</p>");

      var marker11 = createMarker({
    position: new google.maps.LatLng(-6.369271, 106.837015),
    map: map
  }, "<h2>Universitas Gunadarma</h2><p>Kampus F5 Depok</p>");

      var marker12 = createMarker({
    position: new google.maps.LatLng(-6.137748, 106.735575),
    map: map
  }, "<h2>Universitas Gunadarma</h2><p>Kampus L2 Cengkareng</p>");

      var marker13 = createMarker({
    position: new google.maps.LatLng(-6.261709, 107.022090),
    map: map
  }, "<h2>Universitas Gunadarma</h2><p>Kampus J3 Bekasi</p>");

      var marker14 = createMarker({
    position: new google.maps.LatLng(-6.232006, 106.616095),
    map: map
  }, "<h2>Universitas Gunadarma</h2><p>Kampus K Tanggerang</p>");
    
});
</script>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>

<?php include_once "footer.php"; 