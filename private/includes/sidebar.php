<aside class="sidebar offcanvas offcanvas-start bg-white border-end shadow-sm" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
    <div class="offcanvas-header border-bottom bg-light">
        <div class="d-flex align-items-center gap-2">
            <img src="/Projeto SIBDAS/private/includes/img/logo_azul_125.png" alt="Logo" height="30">
            <h6 class="text-primary m-0 fw-bold" id="sidebarMenuLabel" style="color: #1976d2 !important;">Hospital Praia Dourada</h6>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body d-flex flex-column p-0 py-4">
        <ul class="sidebar-menu w-100">
            <li><a href="/Projeto SIBDAS/private/views/index/index_private.php" class="<?= ($pagina_ativa == 'dashboard') ? 'ativo' : '' ?>">Dashboard Geral</a></li>
            <li><a href="/Projeto SIBDAS/private/views/equipamentos/equipamentos.php" class="<?= ($pagina_ativa == 'equipamentos') ? 'ativo' : '' ?>">Equipamentos</a></li>
            <li><a href="/Projeto SIBDAS/private/views/componentes/componentes.php" class="<?= ($pagina_ativa == 'componentes') ? 'ativo' : '' ?>">Componentes</a></li>
            <li><a href="/Projeto SIBDAS/private/views/categorias/categorias.php" class="<?= ($pagina_ativa == 'categorias') ? 'ativo' : '' ?>">Categorias</a></li>
            <li><a href="/Projeto SIBDAS/private/views/localizacoes/localizacoes.php" class="<?= ($pagina_ativa == 'localizacoes') ? 'ativo' : '' ?>">Localizações</a></li>
            <li><a href="/Projeto SIBDAS/private/views/fornecedores/fornecedores.php" class="<?= ($pagina_ativa == 'fornecedores') ? 'ativo' : '' ?>">Fornecedores</a></li>
            <li><a href="/Projeto SIBDAS/private/views/documentacao/documentacao.php" class="<?= ($pagina_ativa == 'documentacao') ? 'ativo' : '' ?>">Documentação</a></li>
            <li><a href="/Projeto SIBDAS/private/views/garantiascontratos/garantiascontratos.php" class="<?= ($pagina_ativa == 'garantiascontratos') ? 'ativo' : '' ?>">Garantias & Contratos</a></li>
            </ul>
    </div>
</aside>