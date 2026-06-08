<?php
    $page_title = "Apagar Documento - Hospital Praia Dourada";
    include '../../includes/header.php';
    $pagina_ativa = 'documentacao';
?>

<body style="background-color: #f8fbff;">

    <?php include '../../includes/sidebar.php'; ?>

<!-- Conteúdo Principal -->
<main class="main-content w-100" style="padding: 0; min-height: 100vh;">
    
    <header class="cabecalho-dashboard border-bottom shadow-sm" style="background-color: #f0f7fd; padding: 20px 30px; margin: 0; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
        <div class="d-flex align-items-center gap-4">
            <button class="btn border-0 shadow-sm rounded-3 bg-white p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" title="Abrir Menu">
                <i class="fa-solid fa-bars fs-4" style="color: #1976d2;"></i>
            </button>
            <div>
                <h1 style="font-size: 2rem; color: #1976d2; font-weight: bold; margin-bottom: 5px;">Gestão de Documentação</h1>
                <p style="color: #666; margin: 0;">Remoção de manuais e certificados do sistema.</p>
            </div>
        </div>
        
        <div class="dropdown">
            <button class="btn dropdown-toggle shadow-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false" 
                    style="background: white; padding: 10px 20px; border-radius: 20px; border: 1px solid #e3f2fd; color: #333;">
                <i class="fa-regular fa-user me-1 text-primary"></i> <strong>Utilizador</strong> - Data
            </button>
            <ul class="dropdown-menu dropdown-menu-end shadow border-0">
                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-key me-2 text-muted"></i>Alterar palavra-passe</a></li>
                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-gear me-2 text-muted"></i>Definições</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger" href="../../../public/index.html"><i class="fa-solid fa-right-from-bracket me-2"></i>Sair</a></li>
            </ul>
        </div>
    </header>

    <section class="p-2">
        <div class="d-flex justify-content-center mt-2">
            <div class="card w-100 shadow-sm rounded text-center p-4 border-0" style="max-width: 600px; background-color: #fff;">

                <div class="text-warning display-4 mb-2">
                    <i class="fa-solid fa-file-circle-xmark"></i>
                </div>

                <p class="mb-2 fs-5 text-muted">Tem a certeza que deseja eliminar este documento?</p>
                <h3 class="mb-3 text-dark"><strong>Manual_Utilizador_V500.pdf</strong></h3>
                
                <div class="mb-3 p-3 bg-light rounded text-start mx-auto" style="max-width: 400px;">
                    <span class="d-block mb-2 text-secondary">
                        <i class="fa-solid fa-tag me-2"></i>Categoria: <strong>Manual de Utilizador</strong>
                    </span> 
                    <span class="d-block mb-2 text-secondary">
                        <i class="fa-solid fa-microchip me-2"></i>Equipamento: <strong>Ventilador Pulmonar</strong>
                    </span> 
                    <span class="d-block text-secondary">
                        <i class="fa-solid fa-calendar-days me-2"></i>Data Upload: <strong>12/05/2026</strong>
                    </span> 
                </div>

                <div class="d-flex justify-content-center gap-3 mt-2">
                    <a href="/Projeto SIBDAS/private/views/documentacao/documentacao.php" class="btn btn-outline-secondary px-4 py-2">
                        <i class="fa-solid fa-xmark me-2"></i>Cancelar
                    </a>
                    <a href="/Projeto SIBDAS/private/views/documentacao/documentacao.php" class="btn btn-danger px-4 py-2">
                        <i class="fa-solid fa-trash-can me-2"></i>Sim, Eliminar
                    </a>
                </div>
                
            </div>
        </div>
    </section>
</main>

<?php include '../../includes/footer.php'; ?>