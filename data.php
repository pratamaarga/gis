<?php 
$title = "Daftar Kampus Universitas Gunadarma";
include_once "header.php";
  ?>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - <?php echo $title ?> - </strong></h2>
            </div>
            <div class="panel-body">
              <table class="table table-bordered table-striped table-admin">
              <thead>
                <tr>
                  <th width="10%">No.</th>
                  <th width="20%">Kampus</th>
                  <th width="30%">Alamat</th>
                  <th width="13%">Kota</th>
                  <th width="15%">Provinsi</th>
                  <th width="27%">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php

              #include "ambildata.php";

                $data = file_get_contents('http://localhost/PI/ambildata.php');
                //echo $data;
                $no=0;
                if(json_decode($data,true)){
                  $obj = json_decode($data);
                    foreach($obj->hasil as $item){
                  
                  $no++; 
              ?>
              <tr> 
                <td><?php echo $no; ?></td>
                <td><?php echo $item->nm_kampus; ?></td>
                <td><?php echo $item->alamat; ?></td>
                <td><?php echo $item->kota; ?></td>
                <td><?php echo $item->provinsi; ?></td>
                <td class="ctr">
                  <div class="btn-group">
                    <a target="_blank" href="detail.php?id=<?php echo $item->id; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
                    <i class="fa fa-map-marker"> </i> Detail dan Lokasi</a>&nbsp;
                  </div>
                </td>
              </tr>
              <?php } 
              }?>
              </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include_once "footer.php" ?>
