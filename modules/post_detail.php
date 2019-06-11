<?php
require_once("../config/db.php");
error_reporting(0);
$id    = $_POST['ID'];
$query  = "SELECT * FROM POST WHERE ID='".$id."'";
$result = mysqli_query($mysqli,$query)or die(mysqli_error());
$num_row = mysqli_num_rows($result);
if(empty($num_row)){
  echo "no_data";
}
else{
while($row = mysqli_fetch_array($result))
{
$no++;

  $tanggal = strtotime($row['TANGGAL']);
  $id = date(('m-d'), $tanggal);
  echo "<img src='".$row['COVER']."' class='img-responsive' alt='Responsive image'>";
  echo "<div class='page-header'>
        <h1>".$row['JUDUL']."<small> ".$row['KATEGORI']."</small></h1>
        </div>";
  echo "<br>";
  echo $row['POST'];

}
  }
?>
