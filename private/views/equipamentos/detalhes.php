<?php
    $page_title = "Equipamentos Médicos - Hospital Praia Dourada";
    include '../../includes/header.php';
    $pagina_ativa = 'equipamentos';
?>


<body style="background-color: #f8fbff;">

    <?php include '../../includes/sidebar.php'; ?>

<!-- Conteúdo Principal e Navbar-->
    <main class="main-content w-100" style="padding: 0; min-height: 100vh;">
    
    <header class="cabecalho-dashboard border-bottom shadow-sm" style="background-color: #f0f7fd; padding: 20px 30px; margin: 0; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
        <div class="d-flex align-items-center gap-4">
            
            <button class="btn border-0 shadow-sm rounded-3 bg-white p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" title="Abrir Menu">
                <i class="fa-solid fa-bars fs-4" style="color: #1976d2;"></i>
            </button>
            
            <div>
                <h1 style="font-size: 2rem; color: #1976d2; font-weight: bold; margin-bottom: 5px;">Gestão de Equipamentos</h1>
                <p style="color: #666; margin: 0;">Ficha técnica detalhada do dispositivo médico.</p>
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

        <section class="seccao-tabela" style="padding: 20px 30px; display: flex; justify-content: center;">
            
            <div class="card w-100 shadow-sm rounded border-0" style="max-width: 900px;">
                <div class="card-body p-5">
                    
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2 class="mb-0 text-dark">
                            <strong><i class="fa-solid fa-stethoscope me-2" style="color: #1976d2;"></i> Detalhes do Equipamento</strong> 
                        </h2>
                        
                        <div class="d-flex gap-2">
                            <a href="/Projeto SIBDAS/private/views/equipamentos/editar.php" class="btn btn-outline-warning btn-sm shadow-sm rounded-pill px-3">
                                <i class="fa-regular fa-pen-to-square me-1"></i> Editar
                            </a>
                            <a href="/Projeto SIBDAS/private/views/equipamentos/apagar.php" class="btn btn-outline-danger btn-sm shadow-sm rounded-pill px-3">
                                <i class="fa-solid fa-trash-can me-1"></i> Apagar
                            </a>
                        </div>
                    </div>
                    <hr class="mb-4">

                    <h5 class="fw-bold mb-3" style="color: #1976d2;">1. Identificação do Dispositivo</h5>
                    <div class="row bg-light rounded p-3 mb-4 mx-0">
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted small mb-0">Designação do Equipamento</label>
                            <p class="form-control-plaintext fw-bold fs-5 m-0">Ventilador Pulmonar</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted small mb-0">Código Interno</label>
                            <p class="form-control-plaintext fw-bold text-primary m-0">04.002.00</p>
                        </div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <label class="form-label text-muted small mb-0">Marca</label>
                            <p class="form-control-plaintext m-0">Dräger</p>
                        </div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <label class="form-label text-muted small mb-0">Modelo</label>
                            <p class="form-control-plaintext m-0">Evita V500</p>
                        </div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <label class="form-label text-muted small mb-0">Número de Série</label>
                            <p class="form-control-plaintext m-0">DRG-9827364</p>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label text-muted small mb-0">Fabricante</label>
                            <p class="form-control-plaintext m-0">Dräger Medical</p>
                        </div>
                    </div>

                    <h5 class="fw-bold mb-3" style="color: #1976d2;">2. Classificação e Estado Clínico</h5>
                    <div class="row bg-light rounded p-3 mb-4 mx-0">
                        <div class="col-md-3 mb-3 mb-md-0">
                            <label class="form-label text-muted small mb-0">Categoria / Grupo</label>
                            <p class="form-control-plaintext m-0">Suporte de Vida</p>
                        </div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <label class="form-label text-muted small mb-0">Criticidade</label>
                            <p class="form-control-plaintext m-0"><span class="badge bg-danger rounded-pill px-2">Alta</span></p>
                        </div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <label class="form-label text-muted small mb-0">Estado Atual</label>
                            <p class="form-control-plaintext m-0"><span class="badge bg-success bg-opacity-10 text-success border border-success rounded-pill px-2">Ativo</span></p>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label text-muted small mb-0">Localização</label>
                            <p class="form-control-plaintext m-0"><i class="fa-solid fa-location-dot me-1 text-muted"></i> Cuidados Intensivos</p>
                        </div>
                    </div>

                    <h5 class="fw-bold mb-3" style="color: #1976d2;">3. Detalhes de Aquisição</h5>
                    <div class="row bg-light rounded p-3 mb-4 mx-0">
                        <div class="col-md-3 mb-3 mb-md-0">
                            <label class="form-label text-muted small mb-0">Data de Aquisição</label>
                            <p class="form-control-plaintext m-0">12/03/2024</p>
                        </div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <label class="form-label text-muted small mb-0">Ano Fabrico</label>
                            <p class="form-control-plaintext m-0">2024</p>
                        </div>
                        <div class="col-md-3 mb-3 mb-md-0">
                            <label class="form-label text-muted small mb-0">Custo</label>
                            <p class="form-control-plaintext m-0">14.500,00 €</p>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label text-muted small mb-0">Tipo de Entrada</label>
                            <p class="form-control-plaintext m-0">Compra</p>
                        </div>
                    </div>

                    <div class="bg-light rounded p-3 border-start border-4 border-info">
                        <label class="form-label text-muted small fw-bold mb-1"><i class="fa-solid fa-circle-info me-1"></i> Observações Técnicas</label>
                        <p class="m-0 text-dark">Equipamento em perfeito estado de funcionamento. Próxima calibração agendada para Novembro de 2026. Acessórios completos guardados na gaveta inferior do carro de suporte.</p>
                    </div>

                    <div class="d-flex justify-content-end mt-5 border-top pt-4">
                        <a href="/Projeto SIBDAS/private/views/equipamentos/equipamentos.php" class="btn btn-outline-secondary px-4 shadow-sm rounded-pill">
                            <i class="fa-solid fa-arrow-left me-2"></i> Voltar
                        </a>
                    </div>

                </div>
            </div>

        </section>
    </main>

<?php include '../../includes/footer.php'; ?>