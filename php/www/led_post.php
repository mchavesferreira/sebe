<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Controle de LED com POST</title>
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
        background-color: green;
        box-shadow: 0 0 30px green;
    }

    .apagado {
        background-color: #333;
    }

    button {
        padding: 10px 20px;
        margin-right: 10px;
        cursor: pointer;
    }
    </style>
</head>

<body>
    <h1>Controle de LED com método POST</h1>

    <form method="post" action="led_post.php">
        <button type="submit" name="led" value="aceso">Acender LED</button>
        <button type="submit" name="led" value="apagado">Apagar LED</button>
    </form>

    <hr>

    <?php
    $estado = $_POST["led"] ?? "apagado";

    if ($estado == "aceso") {
        echo "<h2>LED ACESO</h2>";
        echo "<div class='led aceso'></div>";
    } else {
        echo "<h2>LED APAGADO</h2>";
        echo "<div class='led apagado'></div>";
    }
    ?>

    <p>Como o método usado é POST, o valor enviado não aparece diretamente na URL.</p>
</body>

</html>