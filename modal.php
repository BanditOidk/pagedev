<?php 
include("conexion.php");
$idUser = $_REQUEST['id'];
$query = "SELECT * FROM productos WHERE id_producto = $idUser;";
$consulta = pg_query($conexion, $query);
$data = pg_fetch_assoc($consulta);
 ?>

 <!DOCTYPE html>
 
 <html>
 
 <head>
 	<title>datos de producto</title>
	 <link rel="stylesheet" href="css/estilos.css?<?=date('Y-m-d H:i:s')?>">
 </head>
 <body>
 <?php include "template/header.php"; ?>
 <br> <br> <br> <br> <br> <br> <br> <br>
 <section id="modal">
 <!-- <div class="container"> -->
         <h1><?php echo $data['nombre'];?></h1>
		 
 		 <img src="data:image/jpg;base64, <?php echo base64_encode($data['imagen']); ?>" >
		 
         <p ><?php echo $data['descripcion']; ?></p>
		 
		 <a>s/.<?php echo $data ['precio']; ?></a>
		 <!-- </div> -->
		 </section>
		 
 </body>
 <?php include "template/footer.php"; ?>
 </html>