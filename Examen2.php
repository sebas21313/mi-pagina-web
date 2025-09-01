<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Número positivo o negativo</title>
    <link rel="stylesheet" href="Examen2.css">
   
</head>
<body>
    <div class="contenedor">
        <h2>Verificar número</h2>
        <form method="post">
            <input type="number" name="numero" placeholder="Ingrese un número" required><br>
            <input type="submit" name="verificar" value="Verificar">
        </form>

        <?php
        if (isset($_POST['verificar'])) {
            $numero = $_POST['numero'];
            if ($numero > 0) {
                echo "<div class='resultado positivo'>$numero es un número positivo ✅</div>";
            } elseif ($numero < 0) {
                echo "<div class='resultado negativo'>$numero es un número negativo ❌</div>";
            } else {
                echo "<div class='resultado cero'>El número ingresado es CERO 🔵</div>";
            }
        }
        ?>
    </div>
</body>
</html>