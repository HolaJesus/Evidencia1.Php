

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Porcentaje</title>
</head>
<body>

<h2>Calculadora de 30%</h2>

<form method="post" action="">
    <label>Ingrese un número:</label>
    <input type="number" name="numero" required><br>
    <input type="submit" name="calcular" value="Calcular 30%" style="margin-top:10px;">
</form>
<form method="post" action="menu.php">
        <input type="submit" name="volver" value="Volver al Menú Principal"  style="margin-top:10px;">
    </form>

<?php

class CalculadoraPorcentaje {
    public function calcular30Porciento($numero) {
        $porcentaje = $numero * 0.3;
        return $porcentaje;
    }
}

if (isset($_POST['calcular'])) {
    $numeroIngresado = $_POST['numero'];

    $calculadora = new CalculadoraPorcentaje();
    $resultado = $calculadora->calcular30Porciento($numeroIngresado);

    echo "<p>El 30% de $numeroIngresado es: $resultado</p>";
    
}

?>

</body>
</html>
