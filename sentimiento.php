<?php include('cabezera.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Sentimientos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        h1 {
            text-align: center;
            color: #2c3e50;
        }
        textarea {
            width: 100%;
            height: 200px;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
            color: #333;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #ff7e5f;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background-color: #e65b49;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>escribe lo que sientas de nuestra relacion</h1>
        <form action="guardar_sentimiento.php" method="POST">
            <textarea name="sentimiento" placeholder="Escribe tus sentimientos aquí..." required></textarea>
            <button type="submit">Guardar Sentimiento</button>
        </form>
    </div>

</body>
</html>
