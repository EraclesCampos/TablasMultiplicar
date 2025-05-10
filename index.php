<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de multiplicar</title>
    <link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
    <div class="global-container">
        <h1>Tablas de multiplicar</h1>
        <form action="index.php" method="post">
            <label for="form-input-number">Ingresa un numero:</label>
            <input type="number" name="number" id="form-input-number" required>
            <input type="submit" id="form-input-submit" value="Generar tabla">
        </form>
        <?php
            if(isset($_POST["number"])){
        ?>
        <div class="result-container">
            <?php 
                    $number = (int)$_POST["number"];
                    if($number > 0){
                        echo "<h2>Tabla del $number</h2>";
                        echo "<table>";
                        for($i = 1; $i<= 10; $i++){
                            echo "<tr>";
                            echo "<td>$number x $i = " . ($number * $i) . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    } 
                    else {
                        echo "<h2>Por favor ingresa un numero valido</h2>";
                    }
                    ?>
                </div>
                <?php
            }
            else echo"<h3>Ingresa un numero para generar la tabla de multiplicar</h3>"
        ?>
    </div>
</body>
</html>