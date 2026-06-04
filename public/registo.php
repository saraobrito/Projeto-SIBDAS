<?php include 'includes/header.php'; ?>

<body class="body-auth">

    <div class="auth-card" style="padding: 25px 30px;">
        <img src="/Projeto SIBDAS/public/includes/img/logo_cores_125.png" alt="Logo" style="height: 45px; margin-bottom: 10px;">
        <h2 style="font-size: 1.8rem; margin-bottom: 20px;">Criar Conta</h2>
        
        <form action="/Projeto SIBDAS/public/login.php" method="POST">
            <div class="custom-input-group" style="margin-bottom: 12px;">
                <label for="nome" style="margin-bottom: 5px;"><i class="fa-solid fa-user me-2 text-primary-soft"></i>Nome Completo</label>
                <input type="text" id="nome" name="nome" placeholder="Insira o seu nome" required style="padding: 8px 15px;">
            </div>
            
            <div class="custom-input-group" style="margin-bottom: 12px;">
                <label for="email" style="margin-bottom: 5px;"><i class="fa-solid fa-envelope me-2 text-primary-soft"></i>E-mail</label>
                <input type="email" id="email" name="email" placeholder="Insira o seu e-mail" required style="padding: 8px 15px;">
            </div>
            
            <div class="custom-input-group" style="margin-bottom: 12px;">
                <label for="password" style="margin-bottom: 5px;"><i class="fa-solid fa-key me-2 text-primary-soft"></i>Password</label>
                <input type="password" id="password" name="password" placeholder="Crie uma password" required style="padding: 8px 15px;">
            </div>
            
            <button type="submit" class="btn-auth-submit" style="margin-top: 5px; padding: 10px;"><i class="fa-solid fa-user-check me-2"></i>Registar</button>
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