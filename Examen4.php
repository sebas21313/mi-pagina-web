<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Descuento en Tienda</title>
    <link rel="stylesheet" href="Examen4.css">
    
</head>
<body>
    <div class="contenedor">
        <h2>Compra en Tienda</h2>
        <form method="post">
            <input type="text" name="nombre" placeholder="Ingrese Nombres" required><br>
            <input type="text" name="apellidos" placeholder="Ingrese Apellidos" required><br>
            <input type="number" name="monto" placeholder="Monto de la compra" min="1" required><br>
            <select name="tarjeta" required>
                <option value="">¿Tiene tarjeta de membresía?</option>
                <option value="si">Sí</option>
                <option value="no">No</option>
            </select><br>
            <input type="submit" name="calcular" value="Calcular Pago">
        </form>
        

        <?php
        if (isset($_POST['calcular'])) {
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $monto = $_POST['monto'];
            $tarjeta = $_POST['tarjeta'];

            if ($tarjeta == "si") {
                $descuento = $monto * 0.10;
                $total = $monto - $descuento;
                echo "<div class='resultado descuento'>$nombre $apellidos tiene tarjeta: 
                      Monto original S/ $monto <br> Descuento 10%: S/ $descuento <br> 
                      Total a pagar: S/ $total ✅</div>";
            } else {
                echo "<div class='resultado normal'>$nombre $apellidos no tiene tarjeta: 
                      Total a pagar: S/ $monto</div>";
            }
        }
        ?>
    </div>
</body>
</html>