<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Aprobación de Nota</title>
    <link rel="stylesheet" href="Examen3.css">
    
</head>
<body>
    <div class="contenedor">
        <h2>Verificar Aprobación</h2>
        <form method="post">
            <input type="text" name="nombre" placeholder="Ingrese Nombres" required><br>
            <input type="text" name="apellidos" placeholder="Ingrese Apellidos" required><br>
            <input type="number" name="nota" placeholder="Ingrese Nota (0-20)" min="0" max="20" required><br>
            <input type="submit" name="verificar" value="Verificar">
        </form>
        

        <?php
        if (isset($_POST['verificar'])) {
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $nota = $_POST['nota'];

            if ($nota >= 11) {
                echo "<div class='resultado aprobado'>$nombre $apellidos tiene $nota: Aprobado ✅</div>";
            } else {
                echo "<div class='resultado desaprobado'>$nombre $apellidos tiene $nota: Desaprobado ❌</div>";
            }
        }
        ?>
    </div>
</body>
</html>