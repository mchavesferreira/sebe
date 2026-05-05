<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Formulário POST</title>
</head>

<body>
    <h1>Formulário com método POST</h1>

    <form action="receber_post.php" method="post">
        <label>Nome:</label><br>
        <input type="text" name="nome"><br><br>

        <label>Idade:</label><br>
        <input type="number" name="idade"><br><br>

        <label>Curso:</label><br>
        <input type="text" name="curso"><br><br>

        <button type="submit">Enviar por POST</button>
    </form>
</body>

</html>