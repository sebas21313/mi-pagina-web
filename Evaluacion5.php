<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificacion</title>
    <link rel="stylesheet" href="Evaluacion5.css">
</head>
<body>
    <div class="container">

    <h2>Calificacion del Estudiantes</h2>

    <form action="Evaluacion5.php" method="post">

    <label for="txtnombre">Escribe Nombre:</label>
    <input type="text" name="txtnombre" placeholder="Escribe Nombre" required >

    <label for="txtapellidos">Escribe Nombre:</label>
    <input type="text" name="txtapellidos" placeholder="Escribe Apellidos" required >

    <label for="txtcalificacion">Escribe Nombre:</label>
    <input type="text" name="txtcalificacion" placeholder="Escribe Calificacion" required >

    <input type="submit" name="btncalcular" value="Calcular">


    </form>
    <?php
    if(isset($_POST['btncalcular'])){
        $nom=$_POST['txtnombre'];
         $ape=$_POST['txtapellidos'];
         $nota=$_POST['txtcalificacion'];
         $mensaje="";

         if($nota>=18){
            $mensaje="Excelente";
         }
         elseif($nota>=14){
            $mensaje="Bueno";
         }
          elseif($nota>=11){
            $mensaje="Regular";
         }
          elseif($nota<11){
            $mensaje="Deficiente";
         }

       echo "<div class='resultado'>";
        echo "<div class='Nombres'><b>Nombre:</b>$nom</div>";
        echo "<div class='Apellidos'><b>Apellidos:</b> $ape</div>";
        echo "<div class='Calificacion'><b>Calificacion:</b>$nota</div>";
        echo "<div class='Mensaje'><b>Mensaje:</b> $amensaje</div>";
        echo "</div>";


    }


    ?>





    </div>
    
</body>
</html>