<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=0, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="estilo.css link4">
</head>
<body>
<?php
    $conexion = new mysqli(
        "127.0.0.1",
        "root",
        "admin123",
        "link4"
    );
   $sql = "SELECT * FROM cuentas where id = 1";
   $resultado = $ conexion -> query($sql);
   if ($fila = $resultado ->fetch_assoc()) {
    $usuario = $fila["usuario"];
   }  
?>
<div id="fondo borroso">
   <section>
    <img src="" alt="">
   <h1>@<?php echo $usuario; ?></h1>
   </div id="enlaces">
</section>



<section>
    <img src="https://static01.nyt.com/images/2019/03/10/style/02momo-1/02momo-1-videoSixteenByNineJumbo1600.jpg" alt="">
  <h1>@usuario1</h1>

<div id= "Fondo-borroso">
    <a href="#">
        enlace1
    <a href="#">
        enlace1
    <a href="#">
        enlace1
    <a href="#">
        enlace1
    </a>
    
</div></section> 
</body>
</html>