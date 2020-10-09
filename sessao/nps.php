<?php
    session_start();

    $_SESSION['user'] = "Usuário";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NPS</title>
</head>
<body>
    <center>
        <h2>Avalie nosso Serviço!</h2>
        <br>
        <form action="npsAction.php" method="POST">
            <p>Como foi seu atendimento?</p>
            <input type="radio" id="pessimo" name="avaliacao" value="Péssimo">
            <label for="pessimo">Péssimo</label><br>
            <input type="radio" id="ruim" name="avaliacao" value="Ruim">
            <label for="ruim">Ruim</label><br>
            <input type="radio" id="regular" name="avaliacao" value="Regular">
            <label for="regular">Regular</label><br>
            <input type="radio" id="bom" name="avaliacao" value="Bom">
            <label for="bom">Bom</label><br>
            <input type="radio" id="excelente" name="avaliacao" value="Excelente">
            <label for="excelente">Excelente</label>

            <br><br>

            <p>Justifique sua resposta:</p>
            <textarea id="justificativa" name="justificativa" rows="4" cols="50"></textarea>

            <br>

            <input type="submit" value="Enviar">
        </form>
    </center>
</body>
</html>