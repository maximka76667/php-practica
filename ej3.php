<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centímetros</title>
    <style>
        body {
            padding: 50px;
        }

        form {
            display: flex;
            flex-direction: column;
            padding: 40px 40px 20px;
            width: 200px;
            margin: 0 auto;
            border-radius: 15px;
            background-color: #f1f1f1;
        }

        input,
        button {
            width: 100%;
            margin: 5px 0;
            font-size: 18px;
        }

        button {
            height: 40px;
            transition: all 0.3s;
            outline: 0;
            border: 0;
            border-radius: 10px;
            margin-top: 15px;
            background-color: #fff;
        }

        button:hover {
            background-color: orange;
            color: #fff;
        }

        table {
            border: 1px solid grey;
            margin: 40px auto;
        }

        td {
            padding: 10px;
            text-align: center;
            border: 1px solid grey;
        }

        tr:nth-child(2n) > td {
            background-color: orange;
        }
    </style>
</head>
<body>
    <form>
        <label>Inicial: 
            <input name="inicial" type="text">
        </label>
        <br>
        <label>Final: 
            <input name="final" type="text">
        </label>
        <br>
        <button type="submit">Calcular</button>
    </form>
    <table>
        <tr>
            <td>Centímetros</td>
            <td>Pulgadas</td>
        </tr>
    <?php
        extract($_GET);

        if(isset($inicial) && $inicial && isset($inicial) && $final) 
            for($i = $inicial; $i <= $final; $i++) 
                echo "<tr>
                    <td>$i</td>
                    <td>" , $i * 0.39 , "</td>
                </tr>";
    ?>
    </table>
</body>
</html>