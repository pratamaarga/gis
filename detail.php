<?php 
$id = $_GET['id'];
#include_once "http://localhost/PI/ambildata_id.php";
$data = file_get_contents("http://localhost/PI/ambildata_id.php?id=".$id);
$obj = json_decode($data);
$titles="";
$ids="";
$tlp="";
$alamat="";
$web="";
$kota="";
$prov="";
$lat=0;
$long=0;
$lat1 = "";
$long1 = "";

foreach($obj->hasil as $item){
  $titles.=$item->nm_kampus;
  $ids.=$item->id;
  $tlp.=$item->no_hp;
  $alamat.=$item->alamat;
  $web.=$item->website;
  $kota.=$item->kota;
  $prov.=$item->provinsi;
  $lat1.=((float)$item->latitude);
  $long1.=((float)$item->longitude);
  $lat = (float) $lat1;
  $long = (float) $long1;
  
  //echo "initialize($lat,$long);\n";
}

$title = "Detail dan Lokasi : ".$titles;
include_once "header.php"; ?>
      <div class="row">
      <div class="col-md-5">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - Lokasi - </strong></h4>
            </div>
            <div class="panel-body">
              <div id="map" style="width:100%;height:380px;"></div>
              <script>

              function myMap() {
              var mapCanvas = document.getElementById("map");
              var myCenter = new google.maps.LatLng(<?php echo $lat ?>,<?php echo $long ?>); 
              var mapOptions = {center: myCenter, zoom: 18};
              var map = new google.maps.Map(mapCanvas,mapOptions);
              var marker = new google.maps.Marker({
              position: myCenter,
              animation: google.maps.Animation.BOUNCE
              });
               marker.setMap(map);
              }
              </script>

              <script src="https://maps.googleapis.com/maps/api/js?key=AAIzaSyAZRuFRANvhYEy3YTgZdCIO8EKNcmEY8_I&callback=myMap"></script>

            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - Detail - </strong></h4>
            </div>
            <div class="panel-body">
             <table class="table">
               <tr>
                 <th>Item</th>
                 <th>Detail</th>
               </tr>
               <tr>
                 <td>Kampus</td>
                 <td><h4><?php echo $titles ?></h4></td>
               </tr>
               <tr>
                 <td>Kota</td>
                 <td><h4><?php echo $kota ?></h4></td>
               </tr>
               <tr>
                 <td>Provinsi</td>
                 <td><h4><?php echo $prov ?></h4></td>
               </tr>
               <tr>
                 <td>Alamat</td>
                 <td><h4><?php echo $alamat ?></h4></td>
               </tr>
               <tr>
                 <td>No Tlp</td>
                 <td><h4><?php echo $tlp ?></h4></td>
               </tr>
               <tr>
                 <td>Petunjuk</td>
                 <td><h4>Untuk menggunakan GPS,klik pada bagian view on google di lokasi dan klik direction yang akan mengarahkan langsung ketempat tujuan.</h4></td>
               </tr>
             </table>
            </div>
            </div>
          </div>

        </body>
        </div>
      </div>
    </div>
    <?php include_once "footer.php"; ?>