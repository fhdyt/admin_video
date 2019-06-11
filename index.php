<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>app-beauty-server</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="assets/jquery-3.4.1.min.js"></script>
    <script src="assets/tinymce/tinymce.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include "views/header.php" ?>
    <div class="container">
    <?php if(isset($_GET['page'])){
    $page = $_GET['page'];
    switch ($page) {
            case 'Siswa':
              include "view/siswa.php";
            break;
      default:
        echo "<center>
  <h3><b><span class='glyphicon glyphicon-ban-circle' aria-hidden='true'></span> 404. Halaman tidak di temukan !</b></h3>
  </center>"; break; } }else{ include "views/dasboard.php"; }
?>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
