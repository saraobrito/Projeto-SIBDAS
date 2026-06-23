<?php
    session_start();
    $page_title = "Componentes";
    $titulo = "Gestão de Componentes";
    $subtitulo = "Monitorização de peças e sensores dos equipamentos.";
    $pagina_ativa = 'componentes';

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
                        <input type="text" class="form-control shadow-sm" placeholder="Pesquisar componente, N/S ou equipamento pai..." style="padding-left: 40px; border-radius: 10px; height: 42px;">
                    </div>
                    <button class="btn btn-outline-primary shadow-sm fw-bold text-nowrap d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#painelFiltros" style="border-radius: 10px; height: 42px;">
                        <i class="fa-solid fa-sliders me-2"></i>Filtros
                    </button>
                </div>
                <a href="/Projeto SIBDAS/private/views/componentes/novo.php" class="btn shadow-sm text-white text-nowrap fw-bold d-flex align-items-center" style="background-color: #2196f3; border-radius: 10px; padding: 0 20px; height: 42px;">
                    <i class="fa-solid fa-plus me-2"></i> Adicionar Componente
                </a>
            </div>

            <div class="collapse mb-4" id="painelFiltros">
                <div class="card card-body border-0 shadow-sm rounded-4 bg-white">
                    <h6 class="text-primary fw-bold mb-3"><i class="fa-solid fa-filter me-2"></i>Filtros de Estado</h6>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label class="form-label fw-bold text-secondary small mb-1">Estado</label>
                            <select class="form-select border-1 shadow-sm rounded-3">
                                <option>Todos os estados</option>
                                <option>Operacional</option>
                                <option>Em Manutenção</option>
                            </select>
                        </div>
                        <div class="col-12 d-flex justify-content-end gap-2 mt-2">
                            <button class="btn btn-sm btn-light text-muted border rounded-3 px-3">Limpar</button>
                            <button class="btn btn-sm btn-primary rounded-3 px-3">Aplicar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4 p-0 overflow-hidden mt-2 w-100">
                <div class="table-responsive">
                    <table class="table align-middle table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="text-primary ps-4 py-3">Componente</th>
                                <th class="text-primary py-3">Nº Série</th>
                                <th class="text-primary py-3">Equipamento Pai</th>
                                <th class="text-primary py-3">Estado</th>
                                <th class="text-primary py-3 text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4 py-3">
                                    <span class="fw-bold d-block text-dark">Sensor SpO2</span>
                                    <small class="text-muted"><i class="fa-solid fa-cube me-1"></i>Ref: SN-001</small>
                                </td>
                                <td class="text-muted">SN-2026-X99</td>
                                <td>
                                    <span class="d-block text-dark fw-bold">Monitor MP5</span>
                                    <small class="text-muted">04.002.00</small>
                                </td>
                                <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill px-2">Operacional</span></td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="/Projeto SIBDAS/private/views/componentes/detalhes.php" class="btn btn-sm btn-outline-primary rounded-3"><i class="fa-solid fa-eye"></i></a>
                                        <a href="/Projeto SIBDAS/private/views/componentes/editar.php" class="btn btn-sm btn-outline-warning rounded-3"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <a href="/Projeto SIBDAS/private/views/componentes/apagar.php" class="btn btn-sm btn-outline-danger rounded-3"><i class="fa-solid fa-trash-can"></i></a>
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