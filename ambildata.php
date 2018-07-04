<?php
include "koneksi.php";
$Q = mysqli_query($connect,"SELECT * FROM gundar");

if($Q){
 $posts = array();
      if(mysqli_num_rows($Q))
      {
             while($post = mysqli_fetch_array($Q)){
                     $posts[] = $post;
             }
      }  
      $data = json_encode(array('hasil'=>$posts));
      //$data = json_encode($posts);
      echo $data;                     
}

?>