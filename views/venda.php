<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Comprar Ingressos - Fitzgerald Park</title>
    <link rel="stylesheet" href="/Amusement_Park/views/assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
</head>
<body>
    <div class="animated-bg">
        <div class="balloon"></div>
        <div class="balloon"></div>
        <div class="balloon"></div>
        <div class="balloon"></div>
        <div class="balloon"></div>
    </div>
    <div class="container">
        <h1>Comprar Ingressos - Fitzgerald Park</h1>
        <?php if (isset($erro)) { echo '<p style="color:red;">' . $erro . '</p>'; } ?>
        <form action="../controllers/VendaController.php" method="post">
            <label for="quantidade">Quantidade de Ingressos:</label>
            <input type="number" name="quantidade" id="quantidade" min="1" required>
            <p>Valor por ingresso: <b>R$ 10,00</b></p>
            <button type="submit">Comprar</button>
        </form>
        <p><a href="home.php">Voltar</a></p>
    </div>
</body>
</html>
