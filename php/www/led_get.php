<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Controle de LED com GET</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 30px;
    }

    .led {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        border: 3px solid #333;
        margin: 20px 0;
    }

    .aceso {
        background-color: yellow;
        box-shadow: 0 0 30px yellow;
    }

    .apagado {
        background-color: #444;
        box-shadow: none;
    }

    a {
        display: inline-block;
        padding: 10px 20px;
        margin-right: 10px;
        background-color: #ddd;
        color: #000;
        text-decoration: none;
        border-radius: 5px;
    }

    a:hover {
        background-color: #bbb;
    }
    </style>
</head>

<body>
    <h1>Controle de LED com método GET</h1>

    <?php
    $estado = $_GET["led"] ?? "apagado";

    if ($estado == "aceso") {
        echo "<h2>LED ACESO</h2>";
        echo "<div class='led aceso'></div>";
    } else {
        echo "<h2>LED APAGADO</h2>";
        echo "<div class='led apagado'></div>";
    }
    ?>

    <a href="led_get.php?led=aceso">Acender LED</a>
    <a href="led_get.php?led=apagado">Apagar LED</a>

    <hr>

    <p>Observe que o valor do LED aparece na URL.</p>

    <p>Exemplos:</p>

    <pre>http://localhost:8000/led_get.php?led=aceso</pre>
    <pre>http://localhost:8000/led_get.php?led=apagado</pre>
</body>

</html>