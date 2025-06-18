<?php
// controllers/VendaController.php
require_once __DIR__ . '/../models/Venda.php';

class VendaController {
    public function processarVenda() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $quantidade = intval($_POST['quantidade'] ?? 0);
            if ($quantidade > 0) {
                $valor_total = $quantidade * 10.00;
                $venda = new Venda();
                $venda->salvar($quantidade, $valor_total);
                header('Location: ../views/sucesso.php');
                exit;
            } else {
                $erro = 'Quantidade inválida.';
                include '../views/venda.php';
            }
        } else {
            include '../views/venda.php';
        }
    }
}

// Roteamento simples
$controller = new VendaController();
$controller->processarVenda();
