<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matematica</title>
</head>
<body>
    <form>
        <label>Primer número: <br><input type="text" name="a"></label>
        <br>
        <label>Segundo número: <br><input type="text" name="b"></label>
        <br>
        <button type="submit">Calcular</button>
        <style>
            body {
                padding: 50px;
            }

            form {
                margin: 0 0 40px;
            }

            input {
                margin-bottom: 20px;
            }
        </style>
    </form>
    <?php
        extract($_GET);

        if(isset($a) && isset($b)) {
            echo "<p>Suma: " , $a + $b , "</p>";
            echo "<p>Resta: " , $a - $b , "</p>";
            echo "<p>Multiplicación: " , $a * $b , "</p>";
            echo "<p>Cociente: " , $a / $b , "</p>";
            echo "<p>Resto: " , $a % $b , "</p>";
        }

    ?>
</body>
</html>