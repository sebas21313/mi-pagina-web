<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
    
</head>
<body>
    <div class="padre">
   
 <h2> Hallar la calificacion</h2>
    <form action="" method="post">


Escribe Nombre:
<input type="text" name="txtnombre" placeholder="Escribe Nombre" required>

Escribe Apellidos:
<input type="text" name="txtapellidos" placeholder="Escribe Nombre" required>

Escribe Calificacion:
<input type="text" name="txtcalificacion" placeholder="Escribe Calificacion" required>

<input type="submit" name="btncalcular" value="Calcular">


    </form>
    <?php

    

    if(isset($_POST['btncalcular'])){
        $nom=$_POST['txtnombre'];
        $ape=$_POST['txtapellidos'];
        $nota=$_POST['txtcalificacion'];
        $amensaje="";

        if($nota>=18){
            $amensaje="Excelente";
        }
        elseif($nota>=14){
            $amensaje="Bueno";
        }
         elseif($nota>=11){
            $amensaje="Regular";
        }
        else{
            $amensaje="Deficiente";
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