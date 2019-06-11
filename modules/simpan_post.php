<?php
require_once("../config/db.php");
$judul    = $_POST['judul'];
$kategori    = $_POST['kategori'];
$id_video    = $_POST['id_video'];
$image = "https://".$_SERVER['SERVER_NAME']."/image/".$id_video.".png";
$video = "https://".$_SERVER['SERVER_NAME']."/video/".$id_video.".mp4";
$cover = $host.$cover_nama;
   $query  = 'INSERT INTO VIDEO (ID_VIDEO, JUDUL, KATEGORI, IMAGE, VIDEO)
   VALUES ("'.$id_video.'","'.$judul.'","'.$kategori.'","'.$image.'","'.$video.'")';
   $result = mysqli_query($mysqli,$query) or die(mysqli_error());
   if( $result==true )
   {
    echo $post;
   }
   else
   {
     echo "Gagal";
   }
?>
