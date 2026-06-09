<?php
    $page_title = "Categorias";
    $titulo = "Gestão de Categorias";
    $subtitulo = "Organização dos tipos de equipamentos.";
    $pagina_ativa = 'categorias';

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
                        <input type="text" class="form-control shadow-sm" placeholder="Pesquisar categoria ou prefixo..." style="padding-left: 40px; border-radius: 10px; height: 42px;">
                    </div>
                    <button class="btn btn-outline-primary shadow-sm fw-bold text-nowrap d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#painelFiltros" style="border-radius: 10px; height: 42px;">
                        <i class="fa-solid fa-sliders me-2"></i>Filtros
                    </button>
                </div>
                <a href="/Projeto SIBDAS/private/views/categorias/novo.php" class="btn shadow-sm text-white fw-bold d-flex align-items-center" style="background-color: #2196f3; border-radius: 10px; padding: 0 20px; height: 42px;">
                    <i class="fa-solid fa-plus me-2"></i> Nova Categoria
                </a>
            </div>

            <div class="collapse mb-4" id="painelFiltros">
                <div class="card card-body border-0 shadow-sm rounded-4 bg-white">
                    <h6 class="text-primary fw-bold mb-3"><i class="fa-solid fa-filter me-2"></i>Filtros de Categoria</h6>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label class="form-label fw-bold text-secondary small mb-1">Data de Criação</label>
                            <input type="date" class="form-control shadow-sm rounded-3">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fw-bold text-secondary small mb-1">Ordenar por</label>
                            <select class="form-select shadow-sm rounded-3">
                                <option value="nome">Nome (A-Z)</option>
                                <option value="volume">Volume de Equipamentos</option>
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
                                <th class="text-primary ps-4 py-3">Nome da Categoria</th>
                                <th class="text-primary py-3">Prefixo (Código)</th>
                                <th class="text-primary py-3">Nº Equipamentos</th>
                                <th class="text-primary py-3 text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4 py-3 fw-bold text-dark">Monitorização</td>
                                <td class="text-muted">MON</td>
                                <td><span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3">142</span></td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="/Projeto SIBDAS/private/views/categorias/detalhes.php" class="btn btn-sm btn-outline-primary rounded-3"><i class="fa-solid fa-eye"></i></a>
                                        <a href="/Projeto SIBDAS/private/views/categorias/editar.php" class="btn btn-sm btn-outline-warning rounded-3"><i class="fa-regular fa-pen-to-square"></i></a>
                                        <a href="/Projeto SIBDAS/private/views/categorias/apagar.php" class="btn btn-sm btn-outline-danger rounded-3"><i class="fa-solid fa-trash-can"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="paginacao" style="text-align: right; margin-top: 25px;">
                <button class="pag-num">Anterior</button>
                <button class="pag-num ativo">1</button>
                <button class="pag-num">Seguinte</button>
            </div>
        </section>
    </main>
</div>

<?php include '../../includes/footer.php'; ?>