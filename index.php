<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css?<?=date('Y-m-d H:i:s')?>">
    <link rel="icon" type="image/x-icon" href="images/logo.jgp">
    
    <title>Inicio</title>
</head>


<body>
<?php include "template/header.php"; ?>
    <br><br><br><br><br><br><br>
    <section id="computadoras">
    <h2>Nuestras Computadoras</h2>
        <div class="container">
                 <?php 
        include("conexion.php");
        $query = "SELECT * FROM productos";
        $consulta = pg_query($conexion, $query);
            while($row = pg_fetch_assoc($consulta)){
            ?>
            <a href="modal.php?id=<?php echo $row['id_producto']; ?>"><img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>" width="380"
            height="300"></a>

        <?php
        }
        ?>
            
        </div>
        </div>
        </section>
        <br><br><br><br><br>
        <section id="masvendido">
        <h2>Mas vendido</h2>
            <div class="container">     
                <?php 
        include("conexion.php");
        $query = "SELECT * FROM productos";
        $consulta = pg_query($conexion, $query);
            while($row = pg_fetch_assoc($consulta)){
            ?>
            <a href="modal.php?id=<?php echo $row['id_producto']; ?>"><img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>" width="380"
            height="300"></a>

        <?php
        }
        ?>
            
            </div>
        </section> 
        
    <br><br><br><br><br>
    <section id="marcas">
        <div class="container">
        <?php 
        include("conexion.php");
        $query = "SELECT * FROM marcas ";
        $consulta = pg_query($conexion, $query);
        while($row = pg_fetch_assoc($consulta)){
            ?>
          <img src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']); ?>" width="200"
            height="78">

        <?php
        }
        ?>
            </div>
      
        </section>
        <br><br><br>
        <?php include "template/footer.php"; ?>

</body>
</html>