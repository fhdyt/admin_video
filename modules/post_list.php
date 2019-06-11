<?php
require_once("../config/db.php");
error_reporting(0);
$query  = "SELECT * FROM VIDEO ORDER BY ID DESC";
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
	echo "<tr class='".$class."'>";
	//echo "<td></td>";
    echo "<td>".$row['ID_VIDEO']."</td>";
    echo "<td>".$row['JUDUL']."</td>";
    echo "<td>".$row['KATEGORI']."</td>";
    echo "<td>".$row['IMAGE']."</td>";
    echo "<td>".$row['VIDEO']."</td>";
  //  echo "<td><a class='btn btn-default detail_post' onclick='post_detail(".$row['ID'].")'>Detail</a> </td>";
    echo "</tr>";
}
  }
?>
