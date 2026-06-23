<?php
// public/login.php  —  Autenticação real com sessão PHP
session_start();

// Se já está autenticado, redireciona para o dashboard
if (isset($_SESSION['utilizador_id'])) {
    header('Location: /Projeto SIBDAS/private/views/index/index_private.php');
    exit();
}

$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once __DIR__ . '/../config/db.php';

    $email    = trim($_POST['email']    ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($email === '' || $password === '') {
        $erro = 'Preencha o e-mail e a palavra-passe.';
    } else {
        $stmt = $pdo->prepare('SELECT id, nome, email, password_hash, nivel_acesso FROM utilizadores WHERE email = ? AND ativo = 1 LIMIT 1');
        $stmt->execute([$email]);
        $utilizador = $stmt->fetch();

        if ($utilizador && password_verify($password, $utilizador['password_hash'])) {
            $_SESSION['utilizador_id']    = $utilizador['id'];
            $_SESSION['utilizador_nome']  = $utilizador['nome'];
            $_SESSION['utilizador_email'] = $utilizador['email'];
            $_SESSION['nivel_acesso']     = $utilizador['nivel_acesso'];

            header('Location: /Projeto SIBDAS/private/views/index/index_private.php');
            exit();
        } else {
            $erro = 'E-mail ou palavra-passe incorretos.';
        }
    }
}

include 'includes/header.php';
?>

<body class="body-auth">

    <div class="auth-card" style="padding: 25px 30px;">
        <img src="/Projeto SIBDAS/public/includes/img/logo_cores_125.png" alt="Logo" style="height: 50px; margin-bottom: 10px;">
        <h2 style="font-size: 1.6rem; margin-bottom: 5px;">Acesso Profissional</h2>
        <p class="subtitle" style="margin-bottom: 20px;">Área reservada a funcionários e corpo clínico.</p>

        <?php if ($erro !== ''): ?>
            <div class="alert alert-danger rounded-3 py-2 px-3 mb-3" style="font-size: 0.9rem;">
                <i class="fa-solid fa-circle-exclamation me-2"></i><?= htmlspecialchars($erro) ?>
            </div>
        <?php endif; ?>

        <form action="/Projeto SIBDAS/public/login.php" method="POST">
            <div class="custom-input-group" style="margin-bottom: 15px;">
                <label for="email"><i class="fa-solid fa-envelope me-2 text-primary-soft"></i>E-mail</label>
                <input type="email" id="email" name="email" placeholder="Insira o seu e-mail"
                       value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required style="padding: 10px 15px;">
            </div>

            <div class="custom-input-group" style="margin-bottom: 15px;">
                <label><i class="fa-solid fa-lock me-2 text-primary-soft"></i>Palavra-passe</label>
                <input type="password" name="password" placeholder="••••••••" required style="padding: 10px 15px;">
            </div>

            <button type="submit" class="btn-auth-submit" style="margin-top: 5px; padding: 10px;">
                <i class="fa-solid fa-right-to-bracket me-2"></i>Entrar
            </button>
        </form>

        <div style="margin-top: 20px; border-top: 1px solid #eee; padding-top: 15px;">
            <a href="/Projeto SIBDAS/public/registo.php" class="btn-nova-conta" style="padding: 10px;">
                <i class="fa-solid fa-user-plus me-2"></i>Criar Nova Conta
            </a>
        </div>

        <p class="auth-link" style="margin-top: 15px; margin-bottom: 0;">
            <a href="/Projeto SIBDAS/public/index.php"><i class="fa-solid fa-arrow-left me-2"></i>Voltar à página principal</a>
        </p>
    </div>

<?php include 'includes/footer.php'; ?>