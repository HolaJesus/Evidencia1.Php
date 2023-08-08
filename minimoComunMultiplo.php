<!DOCTYPE html>
<html>
<head>
    <title>Cálculo del MCM</title>
</head>
<body>

<h2>Cálculo del Mínimo Común Múltiplo (MCM)</h2>

<form method="post" action="">
    <label>Ingrese el primer número:</label>
    <input type="number" name="numero1" required ><br>
    
    <label>Ingrese el segundo número:</label>
    <input type="number" name="numero2" required style="margin-top: 10px;"><br>
    
    <input type="submit" name="calcular" value="Calcular MCM">
</form>
<form method="post" action="menu.php">
        <input type="submit" name="volver" value="Volver al Menú Principal"  style="margin-top:10px;">
    </form>

<?php
function calcularMCM($a, $b) {
    $maximo = max($a, $b);
    while (true) {
        if ($maximo % $a == 0 && $maximo % $b == 0) {
            return $maximo;
        }
        $maximo++;
    }
}

if (isset($_POST['calcular'])) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    
    $mcm = calcularMCM($numero1, $numero2);
    
    echo "<p>El Mínimo Común Múltiplo de $numero1 y $numero2 es: $mcm</p>";
}
?>

</body>
</html>
