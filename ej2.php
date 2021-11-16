<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
    <style>
        input, select, button, p {
            margin: 10px 5px;
        }
    </style>
</head>
<body>
    <form method="POST">
        <label>
            Nombre: <input name="name" type="text">
        </label>
        <br>
        Sexo: 
        <label>
            <input name="sex" type="radio">Masculino
        </label>
        <label>
            <input name="sex" type="radio">Femenino
        </label>
        <br>
        Provincia: 
        <select name="province[]">
            <option value="A Coruña">A Coruña</option>
            <option value="Lugo">Lugo</option>
            <option value="Ourense">Ourense</option>
            <option value="Pontevedra">Pontevedra</option>
        </select>
        <br>
        <button type="submit">Enviar datos</button>
    </form>
    <?php
        extract($_POST);

        if(isset($name) && isset($sex) && isset($province))
        echo "<p>$name usted es del sexo $sex y de la provincia de $province[0]</p>"
    ?>
</body>
</html>