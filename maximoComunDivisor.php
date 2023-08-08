<!DOCTYPE html>
<html>
<head>
    <title>Cálculo del maximo comungo</title>
</head>
<body>

<h2>Cálculo del Máximo Común Divisor (MCD)</h2>

<form method="post" action="">
    <label>Ingrese el primer número:</label>
    <input type="number" name="numero1" required><br>

    <label>Ingrese el segundo número:</label>
    <input type="number" name="numero2" required style="margin-top: 10px;"><br>

    <input type="submit" name="calcular" value="Calcular MCD">
</form>
<form method="post" action="menu.php">
        <input type="submit" name="volver" value="Volver al Menú Principal"  style="margin-top:10px;">
    </form>

<?php
function calcularMCD($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

if (isset($_POST['calcular'])) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    $mcd = calcularMCD($numero1, $numero2);

    echo "<p>El Máximo Común Divisor de $numero1 y $numero2 es: $mcd</p>";
}
?>

</body>
</html>
