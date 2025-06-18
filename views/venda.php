<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Comprar Ingressos - Fitzgerald Park</title>
    <link rel="stylesheet" href="/Amusement_Park/views/assets/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <script>
        function atualizarTotal() {
            const valorIngresso = 10;
            const quantidade = document.getElementById('quantidade').value;
            const total = quantidade ? quantidade * valorIngresso : 0;
            document.getElementById('preco-total').innerText = 'Total: R$ ' + total.toFixed(2).replace('.', ',');
        }
        window.onload = function() {
            document.getElementById('quantidade').addEventListener('input', atualizarTotal);
        };
    </script>
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
            <p id="preco-total">Total: R$ 0,00</p>
            <button type="submit">Comprar</button>
        </form>
        <button type="button" onclick="window.history.back()" style="background:none;border:none;color:#ffcc33;font-weight:bold;font-size:1em;cursor:pointer;margin-top:10px;">Voltar</button>
    </div>
</body>
</html>
