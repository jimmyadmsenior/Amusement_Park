<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Comprar Ingressos - Ftizgerald Park</title>
</head>
<body>
    <h1>Comprar Ingressos - Ftizgerald Park</h1>
    <?php if (isset($erro)) { echo '<p style="color:red;">' . $erro . '</p>'; } ?>
    <form action="../controllers/VendaController.php" method="post">
        <label for="quantidade">Quantidade de Ingressos:</label>
        <input type="number" name="quantidade" id="quantidade" min="1" required>
        <p>Valor por ingresso: R$ 10,00</p>
        <button type="submit">Comprar</button>
    </form>
    <p><a href="home.php">Voltar</a></p>
</body>
</html>
