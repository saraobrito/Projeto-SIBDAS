<?php
// public/registo.php
session_start();

if (isset($_SESSION['utilizador_id'])) {
    header('Location: /Projeto SIBDAS/private/views/index/index_private.php');
    exit();
}

$erro    = '';
$sucesso = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once __DIR__ . '/../config/db.php';

    $nome     = trim($_POST['nome']     ?? '');
    $email    = trim($_POST['email']    ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($nome === '' || $email === '' || $password === '') {
        $erro = 'Preencha todos os campos obrigatórios.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro = 'E-mail inválido.';
    } elseif (strlen($password) < 6) {
        $erro = 'A palavra-passe deve ter pelo menos 6 caracteres.';
    } else {
        $stmt = $pdo->prepare('SELECT id FROM utilizadores WHERE email = ? LIMIT 1');
        $stmt->execute([$email]);
        if ($stmt->fetch()) {
            $erro = 'Já existe uma conta com esse e-mail.';
        } else {
            $hash = password_hash($password, PASSWORD_BCRYPT);
            $stmt = $pdo->prepare('INSERT INTO utilizadores (nome, email, password_hash, nivel_acesso) VALUES (?, ?, ?, ?)');
            $stmt->execute([$nome, $email, $hash, 'consulta']);
            $sucesso = 'Conta criada com sucesso! Pode fazer login.';
        }
    }
}

include 'includes/header.php';
?>

<body class="body-auth">

    <div class="auth-card" style="padding: 25px 30px;">
        <img src="/Projeto SIBDAS/public/includes/img/logo_cores_125.png" alt="Logo" style="height: 45px; margin-bottom: 10px;">
        <h2 style="font-size: 1.8rem; margin-bottom: 20px;">Criar Conta</h2>

        <?php if ($erro !== ''): ?>
            <div class="alert alert-danger rounded-3 py-2 px-3 mb-3" style="font-size:0.9rem;">
                <i class="fa-solid fa-circle-exclamation me-2"></i><?= htmlspecialchars($erro) ?>
            </div>
        <?php endif; ?>
        <?php if ($sucesso !== ''): ?>
            <div class="alert alert-success rounded-3 py-2 px-3 mb-3" style="font-size:0.9rem;">
                <i class="fa-solid fa-check-circle me-2"></i><?= htmlspecialchars($sucesso) ?>
            </div>
        <?php endif; ?>

        <form action="/Projeto SIBDAS/public/registo.php" method="POST">
            <div class="custom-input-group" style="margin-bottom: 12px;">
                <label for="nome"><i class="fa-solid fa-user me-2 text-primary-soft"></i>Nome Completo</label>
                <input type="text" id="nome" name="nome"
                       value="<?= htmlspecialchars($_POST['nome'] ?? '') ?>"
                       placeholder="Insira o seu nome" required style="padding: 8px 15px;">
            </div>

            <div class="custom-input-group" style="margin-bottom: 12px;">
                <label for="email"><i class="fa-solid fa-envelope me-2 text-primary-soft"></i>E-mail</label>
                <input type="email" id="email" name="email"
                       value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
                       placeholder="Insira o seu e-mail" required style="padding: 8px 15px;">
            </div>

            <div class="custom-input-group" style="margin-bottom: 12px;">
                <label for="password"><i class="fa-solid fa-key me-2 text-primary-soft"></i>Password</label>
                <input type="password" id="password" name="password" placeholder="Mínimo 6 caracteres" required style="padding: 8px 15px;">
            </div>

            <button type="submit" class="btn-auth-submit" style="margin-top: 5px; padding: 10px;">
                <i class="fa-solid fa-user-check me-2"></i>Registar
            </button>
        </form>

        <div style="margin-top: 20px; border-top: 1px solid #eee; padding-top: 15px;">
            <p class="auth-link" style="margin-bottom: 10px; color: #666;">
                Já tem conta? <a href="/Projeto SIBDAS/public/login.php" style="font-weight: 700; margin-left: 5px;">Fazer Login</a>
            </p>
            <p class="auth-link" style="margin-bottom: 0;">
                <a href="/Projeto SIBDAS/public/index.php"><i class="fa-solid fa-arrow-left me-2"></i>Voltar à página principal</a>
            </p>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>