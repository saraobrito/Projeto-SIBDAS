<?php
    $page_title = "Detalhes da Garantia/Contrato";
    $titulo = "Gestão de Garantias & Contratos";
    $subtitulo = "Ficha técnica detalhada da garantia ou manutenção.";
    $pagina_ativa = 'garantiascontratos';

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
                            <i class="fa-solid fa-file-contract me-2" style="color: #1976d2;"></i> Detalhes do Contrato
                        </h2>
                        <div class="d-flex gap-2">
                            <a href="/Projeto SIBDAS/private/views/garantiascontratos/editar.php" class="btn btn-outline-warning btn-sm shadow-sm rounded-pill px-3">
                                <i class="fa-regular fa-pen-to-square me-1"></i> Editar
                            </a>
                            <a href="/Projeto SIBDAS/private/views/garantiascontratos/apagar.php" class="btn btn-outline-danger btn-sm shadow-sm rounded-pill px-3">
                                <i class="fa-solid fa-trash-can me-1"></i> Apagar
                            </a>
                        </div>
                    </div>
                    <hr class="mb-4">

                    <h5 class="fw-bold mb-3" style="color: #1976d2;">1. Equipamento Associado</h5>
                    <div class="row bg-light rounded-4 p-3 mb-4 mx-0">
                        <div class="col-md-12">
                            <label class="form-label text-muted small mb-0 text-uppercase fw-bold">Equipamento</label>
                            <p class="form-control-plaintext fw-bold fs-5 m-0 text-dark">Ventilador Pulmonar V500 <span class="text-muted fs-6">(Cód: 04.002.00)</span></p>
                        </div>
                    </div>

                    <h5 class="fw-bold mb-3" style="color: #1976d2;">2. Prazos de Garantia</h5>
                    <div class="row bg-light rounded-4 p-3 mb-4 mx-0">
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted small mb-0 text-uppercase fw-bold">Data de Início</label>
                            <p class="form-control-plaintext m-0 fs-6"><i class="fa-solid fa-calendar-check me-2 text-success"></i> 15/07/2024</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted small mb-0 text-uppercase fw-bold">Data de Fim</label>
                            <p class="form-control-plaintext m-0 fs-6 text-danger fw-bold"><i class="fa-solid fa-calendar-xmark me-2"></i> 15/07/2026</p>
                        </div>
                    </div>

                    <h5 class="fw-bold mb-3" style="color: #1976d2;">3. Detalhes de Manutenção</h5>
                    <div class="row bg-light rounded-4 p-3 mb-4 mx-0">
                        <div class="col-md-4 mb-3">
                            <label class="form-label text-muted small mb-0 text-uppercase fw-bold">Tipo de Contrato</label>
                            <p class="form-control-plaintext m-0">Manutenção Preventiva</p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label text-muted small mb-0 text-uppercase fw-bold">Entidade Responsável</label>
                            <p class="form-control-plaintext m-0">Dräger Portugal, Lda</p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label text-muted small mb-0 text-uppercase fw-bold">Periodicidade</label>
                            <p class="form-control-plaintext m-0">Anual</p>
                        </div>
                    </div>

                    <h5 class="fw-bold mb-3" style="color: #1976d2;">4. Observações</h5>
                    <div class="bg-light rounded-4 p-3 border-start border-4 border-info">
                        <p class="m-0 text-dark">Contrato renovado em Junho de 2026. Inclui cobertura total para peças de desgaste e deslocação técnica gratuita.</p>
                    </div>

                    <div class="d-flex justify-content-end mt-5 border-top pt-4">
                        <a href="/Projeto SIBDAS/private/views/garantiascontratos/garantiascontratos.php" class="btn btn-outline-secondary px-4 shadow-sm rounded-pill">
                            <i class="fa-solid fa-arrow-left me-2"></i> Voltar
                        </a>
                    </div>

                </div>
            </div>
        </section>
    </main>
</div>

<?php include '../../includes/footer.php'; ?>