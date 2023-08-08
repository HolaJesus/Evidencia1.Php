<?php
if (isset($_POST['calcular'])) {
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];

    $raiz1 = sqrt($numero1);
    $raiz2 = sqrt($numero2);
    $raiz3 = sqrt($numero3);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cálculo de Raíz Cuadrada</title>
</head>
<body>

<h2>Cálculo de Raíz Cuadrada</h2>

<form method="post" action="">
    <label>Ingrese el primer número:</label>
    <input type="number" name="numero1" required ><br>
    
    <label>Ingrese el segundo número:</label>
    <input type="number" name="numero2" required style="margin-top: 10px;"><br>
    
    <label>Ingrese el tercer número:</label>
    <input type="number" name="numero3" required style="margin-top: 10px;"><br>
    
    <input type="submit" name="calcular" value="Calcular Raíces Cuadradas" style="margin-top: 30px;">
    
</form>
<form method="post" action="menu.php">
        <input type="submit" name="volver" value="Volver al Menú Principal"  style="margin-top:10px; " >
    </form>

<?php if (isset($_POST['calcular'])): ?>
    <p>La raíz cuadrada de <?php echo $numero1; ?> es: <?php echo $raiz1; ?></p>
    <p>La raíz cuadrada de <?php echo $numero2; ?> es: <?php echo $raiz2; ?></p>
    <p>La raíz cuadrada de <?php echo $numero3; ?> es: <?php echo $raiz3; ?></p>
  
<?php endif; ?>

</body>
</html>
