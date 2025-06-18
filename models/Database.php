<?php
// models/Database.php
class Database {
    private $host;
    private $db;
    private $user;
    private $pass;
    private $charset = 'utf8mb4';
    public $pdo;

    public function __construct() {
        // Detecta ambiente local ou produção
        if ($_SERVER['SERVER_NAME'] === 'localhost') {
            // Ambiente local
            $this->host = 'localhost';
            $this->db   = 'amusement_park';
            $this->user = 'root';
            $this->pass = '';
        } else {
            // Produção (InfinityFree)
            $this->host = 'sql108.infinityfree.com';
            $this->db   = 'if0_39262292_fitzgerald';
            $this->user = 'if0_39262292';
            $this->pass = '0bZgNxFMsy4PM';
        }
        $dsn = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";
        try {
            $this->pdo = new PDO($dsn, $this->user, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Erro ao conectar ao banco de dados: ' . $e->getMessage());
        }
    }
}
