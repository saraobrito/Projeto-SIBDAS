<?php
// ============================================================
// config/db.php  —  Ligação à base de dados (PDO)
// ============================================================

define('DB_HOST', 'localhost');
define('DB_NAME', 'sibdas');
define('DB_USER', 'root');       // utilizador padrão do Laragon
define('DB_PASS', '');           // password padrão do Laragon (vazia)
define('DB_CHARSET', 'utf8mb4');

try {
    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET;
    $pdo = new PDO($dsn, DB_USER, DB_PASS, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ]);
} catch (PDOException $e) {
    die('Erro de ligação à base de dados: ' . $e->getMessage());
}