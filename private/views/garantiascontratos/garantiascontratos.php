<?php
    $page_title = "Garantias & Contratos";
    $titulo = "Gestão de Garantias & Contratos";
    $subtitulo = "Gestão de prazos de garantia e contratos de manutenção técnica.";
    $pagina_ativa = 'garantiascontratos';

    include '../../includes/header.php';

?>

<body style="background-color: #f8fbff;">

    <?php include '../../includes/sidebar.php'; ?>

    <main class="main-content flex-grow-1" style="padding: 0; min-height: 100vh;">
        
        <?php 
            include '../../includes/page_header.php'; 
        ?>

        <section class="seccao-tabela" style="padding: 30px;">
            
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-3 w-100">
                <div class="d-flex align-items-center gap-2 flex-grow-1" style="max-width: 600px;">
                    <div class="position-relative flex-grow-1">
                        <i class="fa-solid fa-magnifying-glass position-absolute text-muted" style="left: 15px; top: 50%; transform: translateY(-50%);"></i>
                        <input type="text" class="form-control shadow-sm" placeholder="Pesquisar por equipamento, NIF, entidade ou tipo..." style="padding-left: 40px; border-radius: 10px; height: 42px;">
                    </div>
                    <button class="btn btn-outline-primary shadow-sm fw-bold text-nowrap d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#painelFiltros" style="border-radius: 10px; height: 42px;">
                        <i class="fa-solid fa-sliders me-2"></i>Filtros
                    </button>
                </div>
                <a href="/Projeto SIBDAS/private/views/garantiascontratos/novo.php" class="btn shadow-sm text-white text-nowrap fw-bold d-flex align-items-center" style="background-color: #2196f3; border-radius: 10px; padding: 0 20px; height: 42px;">
                    <i class="fa-solid fa-plus me-2"></i>Novo Contrato
                </a>
            </div>

            <div class="collapse mb-4" id="painelFiltros">
                <div class="card card-body border-0 shadow-sm rounded-4 bg-white">
                    <h6 class="text-primary fw-bold mb-3"><i class="fa-solid fa-filter me-2"></i>Filtros Avançados</h6>
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label fw-bold text-secondary small mb-1">Tipo de Contrato</label>
                            <select class="form-select border-1 shadow-sm rounded-3">
                                <option>Todos</option>
                                <option>Manutenção Preventiva</option>
                                <option>Manutenção Corretiva</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label fw-bold text-secondary small mb-1">Entidade Responsável</label>
                            <input type="text" class="form-control shadow-sm rounded-3" placeholder="Nome da entidade...">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label fw-bold text-secondary small mb-1">Garantia Ativa</label>
                            <select class="form-select border-1 shadow-sm rounded-3">
                                <option>Sim</option>
                                <option>Não</option>
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
                                <th class="text-primary ps-4 py-3">Equipamento</th>
                                <th class="text-primary py-3">Fim Garantia</th>
                                <th class="text-primary py-3">Contrato / Entidade</th>
                                <th class="text-primary py-3">Periodicidade</th>
                                <th class="text-primary py-3 text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4 py-3">
                                    <span class="fw-bold d-block text-dark">Ventilador V500</span>
                                    <small class="text-muted"><i class="fa-solid fa-tag me-1"></i>04.002.00</small>
                                </td>
                                <td><span class="text-danger fw-bold"><i class="fa-solid fa-calendar-xmark me-1"></i> 15/07/2026</span></td>
                                <td>
                                    <span class="d-block fw-bold text-dark">Preventiva</span>
                                    <small class="text-muted">Dräger Portugal, Lda</small>
                                </td>
                                <td>Anual</td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="/Projeto SIBDAS/private/views/garantiascontratos/detalhes.php" class="btn btn-sm btn-outline-primary rounded-3" title="Ver Detalhes">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="/Projeto SIBDAS/private/views/garantiascontratos/editar.php" class="btn btn-sm btn-outline-warning rounded-3" title="Editar">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a> 
                                        <a href="/Projeto SIBDAS/private/views/garantiascontratos/apagar.php" class="btn btn-sm btn-outline-danger rounded-3" title="Apagar">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </a>
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