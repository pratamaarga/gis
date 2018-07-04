<?php
include "koneksi.php";
@$id = $_GET['id'];
$Q = mysqli_query($connect,"SELECT * FROM gundar where id=".$id);

if($Q){
 $posts = array();
      if(mysqli_num_rows($Q))
      {
             while($post = mysqli_fetch_assoc($Q)){
                     $posts[] = $post;
             }
      }  
      $data = json_encode(array('hasil'=>$posts)); 
      echo $data;            
}

?>


