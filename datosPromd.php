<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Promedios</title>
    <style>
        .form-group {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<h2>Calculadora de Promedios</h2>

<form method="post" action="">
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<div class='form-group'>";
        echo "<label>Ingrese el promedio $i:</label>";
        echo "<input type='number' name='promedio$i' step='0.01' required>";
        echo "</div>";
    }
    ?>
    <br>
    <input type="submit" name="calcular" value="Calcular" style="margin-top: 30px;">
</form>
<form method="post" action="menu.php">
        <input type="submit" name="volver" value="Volver al Menú Principal"  style="margin-top:10px;">
    </form>

<?php
if (isset($_POST['calcular'])) {
    $suma = 0;
    for ($i = 1; $i <= 10; $i++) {
        $promedio = $_POST["promedio$i"];
        $suma += $promedio;
    }
    
    $promedioTotal = $suma / 10;
    echo "<p>El promedio de los 10 valores ingresados es: $promedioTotal</p>";
}
?>

</body>
</html>
