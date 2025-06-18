<?php
// models/Venda.php
require_once 'Database.php';

class Venda {
    private $db;
    public function __construct() {
        $this->db = new Database();
    }

    public function salvar($quantidade, $valor_total) {
        $sql = "INSERT INTO vendas (quantidade, valor_total) VALUES (?, ?)";
        $stmt = $this->db->pdo->prepare($sql);
        $stmt->execute([$quantidade, $valor_total]);
        return $this->db->pdo->lastInsertId();
    }
}
