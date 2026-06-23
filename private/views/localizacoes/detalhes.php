<?php
    session_start();
    require_once __DIR__ . '/../../includes/auth_check.php';
    $page_title = "Detalhes da Localização";
    $titulo = "Gestão de Localizações";
    $subtitulo = "Ficha técnica detalhada da localização";
    $pagina_ativa = 'localizacoes';

    include '../../includes/header.php';

?>

<body style="background-color: #f8fbff;">

    <?php include '../../includes/sidebar.php'; ?>

    <main class="main-content flex-grow-1" style="padding: 0; min-height: 100vh;">
        
        <?php 
            include '../../includes/page_header.php'; 
        ?>

        <section class="seccao-tabela" style="padding: 20px 30px; display: flex; justify-content: center;">
            
            <div class="card w-100 shadow-sm rounded border-0" style="max-width: 900px;">
                <div class="card-body p-5">
                    
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2 class="mb-0 text-dark">
                            <strong><i class="fa-solid fa-map-location-dot me-2" style="color: #1976d2;"></i> Detalhes da Localização</strong> 
                        </h2>
                        
                        <div class="d-flex gap-2">
                            <a href="/Projeto SIBDAS/private/views/localizacoes/editar.php" class="btn btn-outline-warning btn-sm shadow-sm rounded-pill px-3">
                                <i class="fa-regular fa-pen-to-square me-1"></i> Editar
                            </a>
                            <a href="/Projeto SIBDAS/private/views/localizacoes/apagar.php" class="btn btn-outline-danger btn-sm shadow-sm rounded-pill px-3">
                                <i class="fa-solid fa-trash-can me-1"></i> Apagar
                            </a>
                        </div>
                    </div>
                    <hr class="mb-4">

                    <h5 class="fw-bold mb-3" style="color: #1976d2;">1. Estrutura Física</h5>
                    <div class="row bg-light rounded p-3 mb-4 mx-0">
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted small mb-0 text-uppercase fw-bold">Edifício</label>
                            <p class="form-control-plaintext fw-bold fs-5 m-0">Edifício Principal</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted small mb-0 text-uppercase fw-bold">Serviço / Departamento</label>
                            <p class="form-control-plaintext fw-bold text-primary m-0 fs-5">Cuidados Intensivos</p>
                        </div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="form-label text-muted small mb-0 text-uppercase fw-bold">Piso</label>
                            <p class="form-control-plaintext m-0">Piso 1</p>
                        </div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="form-label text-muted small mb-0 text-uppercase fw-bold">Sala / Gabinete</label>
                            <p class="form-control-plaintext m-0">Box 4</p>
                        </div>
                    </div>

                    <h5 class="fw-bold mb-3" style="color: #1976d2;">2. Informações de Gestão Interna</h5>
                    <div class="row bg-light rounded p-3 mb-4 mx-0">
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted small mb-0 text-uppercase fw-bold">Responsável do Serviço / Espaço</label>
                            <p class="form-control-plaintext m-0">Dr. António Silva (Dir. Clínico)</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted small mb-0 text-uppercase fw-bold">Centro de Custo</label>
                            <p class="form-control-plaintext m-0">CC-UCI-01</p>
                        </div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="form-label text-muted small mb-0 text-uppercase fw-bold">Extensão Telefónica</label>
                            <p class="form-control-plaintext m-0"><i class="fa-solid fa-phone me-1 text-muted"></i> 4501</p>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-muted small mb-0 text-uppercase fw-bold">Tipo de Zona</label>
                            <p class="form-control-plaintext m-0">
                                <span class="badge bg-info bg-opacity-10 text-info border border-info rounded-pill px-2">Área Clínica / Tratamento</span>
                            </p>
                        </div>
                    </div>

                    <h5 class="fw-bold mb-3" style="color: #1976d2;">3. Observações e Equipamentos Afetos</h5>
                    <div class="bg-light rounded p-3 border-start border-4 border-info">
                        <label class="form-label text-muted small fw-bold mb-2 text-uppercase"><i class="fa-solid fa-circle-info me-1"></i> Notas Técnicas</label>
                        <p class="m-0 text-dark">Sala equipada para suporte de vida avançado.<br><br>
                        <strong>Equipamentos atualmente alocados a esta localização:</strong><br>
                        <i class="fa-solid fa-microchip text-primary me-1 mt-2"></i> Monitor Multiparamétrico <span class="text-muted">(Cód: 04.002.00)</span><br>
                        <i class="fa-solid fa-lungs text-primary me-1 mt-1"></i> Ventilador Pulmonar <span class="text-muted">(Cód: 07.015.01)</span></p>
                    </div>

                    <div class="d-flex justify-content-end mt-5 border-top pt-4">
                        <a href="/Projeto SIBDAS/private/views/localizacoes/localizacoes.php" class="btn btn-outline-secondary px-4 shadow-sm rounded-pill">
                            <i class="fa-solid fa-arrow-left me-2"></i> Voltar
                        </a>
                    </div>

                </div>
            </div>

        </section>
    </main>

<?php include '../../includes/footer.php'; ?>