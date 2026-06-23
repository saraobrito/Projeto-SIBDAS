<?php
    session_start();
    $page_title = "Documentação";
    $titulo = "Gestão de Documentos";
    $subtitulo = "Repositório central de manuais, certificados e normas técnicas.";
    $pagina_ativa = 'documentacao';

    include '../../includes/header.php';

?>

<body style="background-color: #f8fbff;">

    <?php include '../../includes/sidebar.php'; ?>

    <main class="main-content flex-grow-1" style="padding: 0; min-height: 100vh;">
        
        <?php 
            include '../../includes/page_header.php'; 
        ?>

        <section class="seccao-tabela" style="padding: 30px;">
            
            <?php include '../../includes/alerts.php'; ?>
            
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-3 w-100">
                <div class="d-flex align-items-center gap-2 flex-grow-1" style="max-width: 600px;">
                    <div class="position-relative flex-grow-1">
                        <i class="fa-solid fa-magnifying-glass position-absolute text-muted" style="left: 15px; top: 50%; transform: translateY(-50%);"></i>
                        <input type="text" class="form-control shadow-sm" placeholder="Pesquisar por nome, categoria ou código do equipamento..." style="padding-left: 40px; border-radius: 10px; height: 42px;">
                    </div>
                    <button class="btn btn-outline-primary shadow-sm fw-bold text-nowrap d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#painelFiltros" style="border-radius: 10px; height: 42px;">
                        <i class="fa-solid fa-sliders me-2"></i>Filtros
                    </button>
                </div>
                <a href="/Projeto SIBDAS/private/views/documentacao/novo.php" class="btn shadow-sm text-white text-nowrap fw-bold d-flex align-items-center" style="background-color: #2196f3; border-radius: 10px; padding: 0 20px; height: 42px;">
                    <i class="fa-solid fa-file-arrow-up me-2"></i>Novo Documento
                </a>
            </div>

            <!-- Filtros Específicos -->
            <div class="collapse mb-4" id="painelFiltros">
                <div class="card card-body border-0 shadow-sm rounded-4 bg-white">
                    <h6 class="text-primary fw-bold mb-3"><i class="fa-solid fa-filter me-2"></i>Filtros de Documentação</h6>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label class="form-label fw-bold text-secondary small mb-1">Categoria de Documento</label>
                            <select class="form-select shadow-sm rounded-3">
                                <option value="">Todas as Categorias</option>
                                <option value="manual">Manual de Utilizador</option>
                                <option value="calibracao">Certificado de Calibração</option>
                                <option value="garantia">Garantia / Contrato</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fw-bold text-secondary small mb-1">Data (Upload)</label>
                            <input type="date" class="form-control shadow-sm rounded-3">
                        </div>
                        <div class="col-12 d-flex justify-content-end gap-2 mt-2">
                            <button class="btn btn-sm btn-light text-muted fw-bold border rounded-3 px-3 py-2">Limpar</button>
                            <button class="btn btn-sm btn-primary fw-bold rounded-3 px-3 py-2">Aplicar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabela -->
            <div class="card border-0 shadow-sm rounded-4 p-0 overflow-hidden mt-2 w-100">
                <div class="table-responsive">
                    <table class="table align-middle table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="text-primary ps-4 py-3">Documento</th>
                                <th class="text-primary py-3">Categoria</th>
                                <th class="text-primary py-3">Equipamento Associado</th>
                                <th class="text-primary py-3">Data</th>
                                <th class="text-primary py-3 text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4 py-3">
                                    <i class="fa-solid fa-file-pdf text-danger me-2"></i>
                                    <span class="fw-bold d-block text-dark">Manual_Utilizador_V500.pdf</span>
                                </td>
                                <td><span class="badge bg-info bg-opacity-10 text-info border border-info rounded-pill px-2">Manual</span></td>
                                <td>
                                    <span class="fw-bold text-dark d-block">Ventilador Pulmonar</span>
                                    <small class="text-muted"><i class="fa-solid fa-tag me-1"></i>04.002.00</small>
                                </td>
                                <td class="text-muted small">27/05/2026</td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="#" class="btn btn-sm btn-outline-info rounded-3" title="Download"><i class="fa-solid fa-download"></i></a>
                                        <a href="/Projeto SIBDAS/private/views/documentacao/editar.php" class="btn btn-sm btn-outline-warning rounded-3" title="Editar"><i class="fa-regular fa-pen-to-square"></i>
                                        <a href="/Projeto SIBDAS/private/views/documentacao/apagar.php" class="btn btn-sm btn-outline-danger rounded-3" title="Apagar"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <?php 
                include '../../includes/pagination.php'; 
            ?>

        </section>
    </main>
</div>

<?php include '../../includes/footer.php'; ?>