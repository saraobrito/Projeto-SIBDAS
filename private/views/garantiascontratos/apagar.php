<?php
    $page_title = "Apagar Garantia/Contrato";
    $titulo = "Gestão de Garantias & Contratos";
    $subtitulo = "Remoção de registos de garantia ou manutenção.";
    $pagina_ativa = 'garantiascontratos';

    include '../../includes/header.php';

?>

<body style="background-color: #f8fbff;">

    <?php include '../../includes/sidebar.php'; ?>

    <main class="main-content w-100" style="padding: 0; min-height: 100vh;">
    
        <?php 
            include '../../includes/page_header.php'; 
        ?>

        <section class="p-2" style="margin-top: 40px;">
            <div class="d-flex justify-content-center">
                <div class="card w-100 shadow-sm rounded p-4 border-0" style="max-width: 600px; background-color: #fff;">

                    <div class="text-warning display-4 mb-2 text-center">
                        <i class="fa-solid fa-file-contract"></i>
                    </div>

                    <p class="mb-2 fs-5 text-muted text-center">Tem a certeza que deseja eliminar este contrato/garantia?</p>
                    <h3 class="mb-3 text-dark text-center"><strong>Ventilador V500</strong></h3>
                    
                    <div class="mb-3 p-3 bg-light rounded text-start mx-auto" style="max-width: 400px;">
                        <span class="d-block mb-2 text-secondary">
                            <i class="fa-solid fa-tag me-2"></i>Equipamento: <strong>04.002.00</strong>
                        </span> 
                        <span class="d-block mb-2 text-secondary">
                            <i class="fa-solid fa-calendar-xmark me-2"></i>Data Fim: <strong>15/07/2026</strong>
                        </span> 
                        <span class="d-block text-secondary">
                            <i class="fa-solid fa-user-tie me-2"></i>Entidade: <strong>Dräger Portugal</strong>
                        </span> 
                    </div>
                    
                    <div class="alert alert-warning text-start mx-auto mb-4" role="alert" style="max-width: 450px; border-radius: 15px;">
                        <i class="fa-solid fa-circle-exclamation me-2"></i>
                        <strong>Atenção:</strong> Esta ação é irreversível e deixará o equipamento sem registo de cobertura de manutenção.
                    </div>
                    
                    <div class="d-flex justify-content-center gap-3 mt-2">
                        <a href="/Projeto SIBDAS/private/views/garantiascontratos/garantiascontratos.php" class="btn btn-outline-secondary px-4 py-2">
                            <i class="fa-solid fa-xmark me-2"></i>Cancelar
                        </a>
                        <a href="/Projeto SIBDAS/private/views/garantiascontratos/garantiascontratos.php" class="btn btn-danger px-4 py-2">
                            <i class="fa-solid fa-trash-can me-2"></i>Sim, Eliminar
                        </a>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>
</div>

<?php include '../../includes/footer.php'; ?>