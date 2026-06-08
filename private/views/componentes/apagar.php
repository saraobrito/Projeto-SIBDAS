<?php
    $page_title = "Apagar Componente - Hospital Praia Dourada";
    include '../../includes/header.php';
    $pagina_ativa = 'componentes';
?>


<body style="background-color: #f8fbff;">

    <?php include '../../includes/sidebar.php'; ?>


    <main class="main-content w-100" style="padding: 0; min-height: 100vh;">
        
        <header class="cabecalho-dashboard border-bottom shadow-sm" style="background-color: #f0f7fd; padding: 20px 30px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
            <div class="d-flex align-items-center gap-4">
                <button class="btn border-0 shadow-sm rounded-3 bg-white p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu">
                    <i class="fa-solid fa-bars fs-4" style="color: #1976d2;"></i>
                </button>
                <div>
                    <h1 style="font-size: 2rem; color: #1976d2; font-weight: bold; margin-bottom: 5px;">Gestão de Componentes</h1>
                    <p style="color: #666; margin: 0;">Remoção de componentes do inventário.</p>
                </div>
            </div>
        </header>

        <section class="p-2" style="margin-top: 40px;">
            <div class="d-flex justify-content-center">
                <div class="card w-100 shadow-sm rounded p-4 border-0" style="max-width: 600px; background-color: #fff;">

                    <div class="text-warning display-4 mb-2 text-center">
                        <i class="fa-solid fa-microchip"></i>
                    </div>

                    <p class="mb-2 fs-5 text-muted text-center">Tem a certeza que deseja eliminar este componente?</p>
                    <h3 class="mb-3 text-dark text-center"><strong>Sensor SpO2</strong></h3>
                    
                    <div class="mb-3 p-3 bg-light rounded text-start mx-auto" style="max-width: 400px;">
                        <span class="d-block mb-2 text-secondary">
                            <i class="fa-solid fa-hashtag me-2"></i>Série: <strong>SN-2026-X99</strong>
                        </span> 
                        <span class="d-block mb-2 text-secondary">
                            <i class="fa-solid fa-laptop-medical me-2"></i>Equipamento Pai: <strong>Monitor MP5</strong>
                        </span> 
                    </div>
                    
                    <div class="alert alert-warning text-start mx-auto mb-4" role="alert" style="max-width: 450px; border-radius: 15px;">
                        <i class="fa-solid fa-circle-exclamation me-2"></i>
                        <strong>Atenção:</strong> Ao eliminar, este componente deixará de estar associado ao equipamento pai.
                    </div>
                    
                    <div class="d-flex justify-content-center gap-3 mt-2">
                        <a href="/Projeto SIBDAS/private/views/componentes/componentes.php" class="btn btn-outline-secondary px-4 py-2">
                            <i class="fa-solid fa-xmark me-2"></i>Cancelar
                        </a>
                        <a href="/Projeto SIBDAS/private/views/componentes/componentes.php" class="btn btn-danger px-4 py-2">
                            <i class="fa-solid fa-trash-can me-2"></i>Sim, Eliminar
                        </a>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>
</div>

<?php include '../../includes/footer.php'; ?>