<?php include 'includes/header.php'; ?>

<body class="body-auth">

    <div class="auth-card" style="padding: 25px 30px;">
        <img src="/Projeto SIBDAS/public/includes/img/logo_cores_125.png" alt="Logo" style="height: 50px; margin-bottom: 10px;">
        <h2 style="font-size: 1.6rem; margin-bottom: 5px;">Acesso Profissional</h2>
        <p class="subtitle" style="margin-bottom: 20px;">Área reservada a funcionários e corpo clínico.</p>
        
        <form action="/Projeto SIBDAS/private/index_private.php">
            <div class="custom-input-group" style="margin-bottom: 15px;">
                <label for="email" style="margin-bottom: 5px;"><i class="fa-solid fa-envelope me-2 text-primary-soft"></i>E-mail</label>
                <input type="email" id="email" name="email" placeholder="Insira o seu e-mail" required style="padding: 10px 15px;">
            </div>
            
            <div class="custom-input-group" style="margin-bottom: 15px;">
                <label style="margin-bottom: 5px;"><i class="fa-solid fa-lock me-2 text-primary-soft"></i>Palavra-passe</label>
                <input type="password" placeholder="••••••••" required style="padding: 10px 15px;">
            </div>
            
            <button type="submit" class="btn-auth-submit" style="margin-top: 5px; padding: 10px;"><i class="fa-solid fa-right-to-bracket me-2"></i>Entrar</button>
        </form>
        
        <div style="margin-top: 20px; border-top: 1px solid #eee; padding-top: 15px;">
            <a href="/Projeto SIBDAS/public/registo.php" class="btn-nova-conta" style="padding: 10px;"><i class="fa-solid fa-user-plus me-2"></i>Criar Nova Conta</a>
        </div>
        
        <p class="auth-link" style="margin-top: 15px; margin-bottom: 0;">
            <a href="/Projeto SIBDAS/public/index.php"><i class="fa-solid fa-arrow-left me-2"></i>Voltar à página principal</a>
        </p>
    </div>

<?php include 'includes/footer.php'; ?>