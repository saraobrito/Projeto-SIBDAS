<?php
// private/views/equipamentos/apagar.php
session_start();
require_once __DIR__ . '/../../includes/auth_check.php';
require_once __DIR__ . '/../../../config/db.php';

$id = (int)($_GET['id'] ?? 0);

if ($id > 0) {
    try {
        $stmt = $pdo->prepare('DELETE FROM equipamentos WHERE id = ?');
        $stmt->execute([$id]);
        $_SESSION['mensagem_alerta'] = 'Equipamento apagado com sucesso.';
        $_SESSION['tipo_alerta']     = 'success';
    } catch (PDOException $e) {
        $_SESSION['mensagem_alerta'] = 'Erro ao apagar equipamento.';
        $_SESSION['tipo_alerta']     = 'danger';
    }
}

header('Location: equipamentos.php');
exit();