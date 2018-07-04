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
              <div id="map" style="width:100%;height:380px;"></div>

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AAIzaSyAZRuFRANvhYEy3YTgZdCIO8EKNcmEY8_I&callback=initialize"></script>

<script type="text/javascript">

  function initialize() {
    
    var mapOptions = {   
        zoom: 8,
        center: new google.maps.LatLng(-6.2297264, 106.6894312), 
        disableDefaultUI: true
    };

    var mapElement = document.getElementById('map');

    var map = new google.maps.Map(mapElement, mapOptions);

    setMarkers(map, officeLocations);

}

var officeLocations = [
//mengambil data dari ambil data
<?php
$data = file_get_contents('ambildata.php');
                $no=1;
                if(json_decode($data,true)){
                  $obj = json_decode($data);
                  foreach($obj->hasil as $item){
?>
//menampilkan nama kampus dan alamat
[<?php echo $item->id ?>,'<?php echo $item->nm_kampus ?>','<?php echo $item->alamat ?>', <?php echo $item->longitude ?>, <?php echo $item->latitude ?>],
<?php 
}
} 
?>    
];

function setMarkers(map, locations)
{
    var globalPin = 'img/marker.png';

    for (var i = 0; i < locations.length; i++) {
       
        var office = locations[i];
        var myLatLng = new google.maps.LatLng(office[4], office[3]);
        var infowindow = new google.maps.InfoWindow({content: contentString});
         
        var contentString = 
            '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h5 id="firstHeading" class="firstHeading">'+ office[1] + '</h5>'+
            '<div id="bodyContent">'+ 
            '<a href=detail.php?id='+office[0]+'>Info Detail</a>'+
            '</div>'+
            '</div>';

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: office[1],
            icon:'img/marker.png'
        });

        google.maps.event.addListener(marker, 'click', getInfoCallback(map, contentString));
    }
}

function getInfoCallback(map, content) {
    var infowindow = new google.maps.InfoWindow({content: content});
    return function() {
            infowindow.setContent(content); 
            infowindow.open(map, this);
        };
}

initialize();
</script>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>

<?php include_once "footer.php"; 