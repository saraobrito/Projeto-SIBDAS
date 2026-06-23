<header class="cabecalho-dashboard border-bottom shadow-sm" style="background-color: #f0f7fd; padding: 20px 30px; margin: 0; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
    <div class="d-flex align-items-center gap-4">
        <button class="btn border-0 shadow-sm rounded-3 bg-white p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu">
            <i class="fa-solid fa-bars fs-4" style="color: #1976d2;"></i>
        </button>
        <div>
            <h1 style="font-size: 2rem; color: #1976d2; font-weight: bold; margin-bottom: 5px;">
                <?php echo isset($titulo) ? $titulo : 'Dashboard'; ?>
            </h1>
            <p style="color: #666; margin: 0;">
                <?php echo isset($subtitulo) ? $subtitulo : 'Bem-vindo ao sistema.'; ?>
            </p>
        </div>
    </div>

    <div class="dropdown">
        <button class="btn dropdown-toggle shadow-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false" 
                style="background: white; padding: 10px 20px; border-radius: 20px; border: 1px solid #e3f2fd; color: #333;">
            <i class="fa-regular fa-user me-1 text-primary"></i> 
            <strong>Utilizador</strong> 
            <span class="text-muted ms-1" style="font-weight: normal; font-size: 0.9rem;">
                - <?php echo date('d/m'); ?>
            </span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow border-0">
            <li><a class="dropdown-item" href="/Projeto SIBDAS/private/views/perfil/definicoes.php">
                <i class="fa-solid fa-gear me-2 text-muted"></i>Definições de Perfil
            </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-danger" href="/Projeto SIBDAS/public/logout.php">
                <i class="fa-solid fa-right-from-bracket me-2"></i>Sair
            </a></li>
        </ul>
    </div>
</header>