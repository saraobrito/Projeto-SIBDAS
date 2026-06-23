<?php
    session_start();
    require_once __DIR__ . '/../../includes/auth_check.php';
    $page_title = "Detalhes do Componente";
    $titulo = "Gestão de Componentes";
    $subtitulo = "Ficha técnica detalhada do componente";
    $pagina_ativa = 'componentes';

    include '../../includes/header.php';

?>

<body style="background-color: #f8fbff;">

    <?php include '../../includes/sidebar.php'; ?>

    <main class="main-content flex-grow-1" style="padding: 0; min-height: 100vh;">
        
        <?php 
            include '../../includes/page_header.php'; 
        ?>

        <section style="padding: 30px; display: flex; justify-content: center;">
            <div class="card w-100 shadow-sm rounded-4 border-0" style="max-width: 900px;">
                <div class="card-body p-5">
                    
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2 class="mb-0 text-dark fw-bold">
                            <i class="fa-solid fa-microchip me-2" style="color: #1976d2;"></i> Detalhes do Componente
                        </h2>
                        <div class="d-flex gap-2">
                            <a href="/Projeto SIBDAS/private/views/componentes/editar.php" class="btn btn-outline-warning btn-sm shadow-sm rounded-pill px-3">
                                <i class="fa-regular fa-pen-to-square me-1"></i> Editar
                            </a>
                            <a href="/Projeto SIBDAS/private/views/componentes/apagar.php" class="btn btn-outline-danger btn-sm shadow-sm rounded-pill px-3">
                                <i class="fa-solid fa-trash-can me-1"></i> Apagar
                            </a>
                        </div>
                    </div>
                    <hr class="mb-4">

                    <h5 class="fw-bold mb-3" style="color: #1976d2;">1. Identificação</h5>
                    <div class="row bg-light rounded-4 p-3 mb-4 mx-0">
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted small mb-0 text-uppercase fw-bold">Designação</label>
                            <p class="form-control-plaintext fw-bold fs-5 m-0 text-dark">Sensor SpO2</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted small mb-0 text-uppercase fw-bold">Número de Série</label>
                            <p class="form-control-plaintext fw-bold text-primary m-0 fs-5">SN-2026-X99</p>
                        </div>
                    </div>

                    <h5 class="fw-bold mb-3" style="color: #1976d2;">2. Equipamento Associado</h5>
                    <div class="row bg-light rounded-4 p-3 mb-4 mx-0">
                        <div class="col-md-12">
                            <label class="form-label text-muted small mb-0 text-uppercase fw-bold">Equipamento Pai</label>
                            <p class="form-control-plaintext m-0 fs-6">
                                <i class="fa-solid fa-laptop-medical me-2 text-primary"></i> <strong>Monitor MP5</strong> <span class="text-muted">(Cód: 04.002.00)</span>
                            </p>
                        </div>
                    </div>

                    <h5 class="fw-bold mb-3" style="color: #1976d2;">3. Estado e Manutenção</h5>
                    <div class="row bg-light rounded-4 p-3 mb-4 mx-0">
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted small mb-0 text-uppercase fw-bold">Estado Atual</label>
                            <p class="form-control-plaintext m-0">
                                <span class="badge bg-success bg-opacity-10 text-success border border-success rounded-pill px-3">Operacional</span>
                            </p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted small mb-0 text-uppercase fw-bold">Última Substituição</label>
                            <p class="form-control-plaintext m-0">10/01/2026</p>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mt-4 border-top pt-4">
                        <a href="/Projeto SIBDAS/private/views/componentes/componentes.php" class="btn btn-outline-secondary px-4 shadow-sm rounded-pill">
                            <i class="fa-solid fa-arrow-left me-2"></i> Voltar
                        </a>
                    </div>

                </div>
            </div>
        </section>
    </main>
</div>

<?php include '../../includes/footer.php'; ?>