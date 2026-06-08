<?php
    $page_title = "Detalhes do Fornecedor - Hospital Praia Dourada";
    include '../../includes/header.php';
    $pagina_ativa = 'fornecedores';
?>

<body style="background-color: #f8fbff;">

    <?php include '../../includes/sidebar.php'; ?>

    <main class="main-content flex-grow-1" style="padding: 0; min-height: 100vh;">
        
        <header class="cabecalho-dashboard border-bottom shadow-sm" style="background-color: #f0f7fd; padding: 20px 30px; margin: 0; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
            <div class="d-flex align-items-center gap-4">
                <button class="btn border-0 shadow-sm rounded-3 bg-white p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" title="Abrir Menu">
                    <i class="fa-solid fa-bars fs-4" style="color: #1976d2;"></i>
                </button>
                <div>
                    <h1 style="font-size: 2rem; color: #1976d2; font-weight: bold; margin-bottom: 5px;">Gestão de Fornecedores</h1>
                    <p style="color: #666; margin: 0;">Registo e gestão de fabricantes, distribuidores e assistência técnica.</p>
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
            
            <div class="card w-100 shadow-sm rounded-4 border-0" style="max-width: 900px;">
                <div class="card-body p-5">
                    
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2 class="mb-0 text-dark">
                            <strong><i class="fa-solid fa-truck-medical me-2" style="color: #1976d2;"></i> Detalhes do Fornecedor</strong> 
                        </h2>
                        
                        <div class="d-flex gap-2">
                            <a href="/Projeto SIBDAS/private/views/fornecedores/editar.php" class="btn btn-outline-warning btn-sm shadow-sm rounded-pill px-3">
                                <i class="fa-regular fa-pen-to-square me-1"></i> Editar
                            </a>
                            <a href="/Projeto SIBDAS/private/views/fornecedores/apagar.php" class="btn btn-outline-danger btn-sm shadow-sm rounded-pill px-3">
                                <i class="fa-solid fa-trash-can me-1"></i> Apagar
                            </a>
                        </div>
                    </div>
                    <hr class="mb-4">

                    <h5 class="fw-bold mb-3" style="color: #1976d2;">1. Identificação da Empresa</h5>
                    <div class="row bg-light rounded-4 p-3 mb-4 mx-0">
                        <div class="col-md-12 mb-3">
                            <label class="form-label text-muted small mb-0 text-uppercase fw-bold">Nome da Empresa / Entidade</label>
                            <p class="form-control-plaintext fw-bold fs-5 m-0 text-dark">Dräger Portugal, Lda</p>
                        </div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="form-label text-muted small mb-0 text-uppercase fw-bold">NIF</label>
                            <p class="form-control-plaintext fw-bold text-primary m-0 fs-5">501234567</p>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-muted small mb-0 text-uppercase fw-bold">Tipo de Fornecedor</label>
                            <p class="form-control-plaintext m-0 mt-1">
                                <span class="badge bg-primary bg-opacity-10 text-primary border border-primary rounded-pill px-3 py-1">Fabricante</span>
                            </p>
                        </div>
                    </div>

                    <h5 class="fw-bold mb-3" style="color: #1976d2;">2. Contactos e Localização</h5>
                    <div class="row bg-light rounded-4 p-3 mb-4 mx-0">
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted small mb-0 text-uppercase fw-bold">Contacto Telefónico Geral</label>
                            <p class="form-control-plaintext m-0"><i class="fa-solid fa-phone me-2 text-muted"></i>+351 210 123 456</p>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label text-muted small mb-0 text-uppercase fw-bold">Email Geral</label>
                            <p class="form-control-plaintext m-0"><i class="fa-solid fa-envelope me-2 text-muted"></i>geral@draeger.pt</p>
                        </div>
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="form-label text-muted small mb-0 text-uppercase fw-bold">Morada</label>
                            <p class="form-control-plaintext m-0"><i class="fa-solid fa-location-dot me-2 text-muted"></i>Rua da Indústria, nº 45, 1000-123 Lisboa</p>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-muted small mb-0 text-uppercase fw-bold">Website</label>
                            <p class="form-control-plaintext m-0"><i class="fa-solid fa-globe me-2 text-muted"></i><a href="https://www.draeger.pt" target="_blank" class="text-decoration-none">www.draeger.pt</a></p>
                        </div>
                    </div>

                    <h5 class="fw-bold mb-3" style="color: #1976d2;">3. Detalhes da Pessoa de Contacto</h5>
                    <div class="row bg-light rounded-4 p-3 mb-4 mx-0">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="form-label text-muted small mb-0 text-uppercase fw-bold">Nome do Comercial / Técnico</label>
                            <p class="form-control-plaintext m-0 text-dark fw-bold"><i class="fa-regular fa-user me-2 text-muted"></i>Rui Santos</p>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-muted small mb-0 text-uppercase fw-bold">Telefone Direto / Telemóvel</label>
                            <p class="form-control-plaintext m-0"><i class="fa-solid fa-mobile-screen me-2 text-muted"></i>912 345 678</p>
                        </div>
                    </div>

                    <h5 class="fw-bold mb-3" style="color: #1976d2;">4. Observações e Equipamentos Associados</h5>
                    <div class="bg-light rounded-4 p-3 border-start border-4 border-info">
                        <label class="form-label text-muted small fw-bold mb-2 text-uppercase"><i class="fa-solid fa-circle-info me-1"></i> Notas Adicionais</label>
                        <p class="m-0 text-dark mb-3">Fornecedor exclusivo para ventiladores pulmonares da marca Dräger. Suporte técnico 24h contratado.</p>
                        
                        <label class="form-label text-muted small fw-bold mb-2 text-uppercase"><i class="fa-solid fa-link me-1"></i> Equipamentos Fornecidos / Mantidos</label>
                        <ul class="list-unstyled m-0">
                            <li class="mb-1"><i class="fa-solid fa-lungs text-primary me-2"></i> Ventilador Pulmonar Evita V500 <span class="text-muted small">(Cód: 07.015.01)</span></li>
                            <li><i class="fa-solid fa-lungs text-primary me-2"></i> Ventilador Pulmonar Savina 300 <span class="text-muted small">(Cód: 07.015.02)</span></li>
                        </ul>
                    </div>

                    <div class="d-flex justify-content-end mt-5 border-top pt-4">
                        <a href="/Projeto SIBDAS/private/views/fornecedores/fornecedores.php" class="btn btn-outline-secondary px-4 shadow-sm rounded-pill">
                            <i class="fa-solid fa-arrow-left me-2"></i> Voltar
                        </a>
                    </div>

                </div>
            </div>

        </section>
    </main>
</div>

<?php include '../../includes/footer.php'; ?>