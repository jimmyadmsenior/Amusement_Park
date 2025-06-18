<?php
// models/Database.php
class Database {
    private $host = 'sql108.infinityfree.com';
    private $db   = 'if0_39262292_fitzgerald';
    private $user = 'if0_39262292';
    private $pass = '0bZgNxFMsy4PM'; // senha do painel InfinityFree
    private $charset = 'utf8mb4';
    public $pdo;

    public function __construct() {
        $dsn = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";
        try {
            $this->pdo = new PDO($dsn, $this->user, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Erro ao conectar ao banco de dados: ' . $e->getMessage());
        }
    }
}
