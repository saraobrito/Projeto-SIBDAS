<?php
    $page_title = "Localizações";
    $titulo = "Gestão de Localizações";
    $subtitulo = "Estruturação física e organização dos espaços do hospital.";
    $pagina_ativa = 'localizacoes';

    include '../../includes/header.php';

?>

<body style="background-color: #f8fbff;">

    <?php include '../../includes/sidebar.php'; ?>

    <main class="main-content w-100" style="padding: 0; min-height: 100vh;">
        
        <?php 
            include '../../includes/page_header.php'; 
        ?>

        <section class="seccao-tabela" style="padding: 30px;">
            
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-3 w-100">
                
                <div class="d-flex align-items-center gap-2 flex-grow-1" style="max-width: 600px;">
                    
                    <div class="position-relative flex-grow-1">
                        <i class="fa-solid fa-magnifying-glass position-absolute text-muted" style="left: 15px; top: 50%; transform: translateY(-50%);"></i>
                        <input type="text" class="form-control shadow-sm" placeholder="Pesquisar por atributos (ex: sala, edifício)..." style="padding-left: 40px; border-radius: 10px; height: 42px;">
                    </div>
                    
                    <button class="btn btn-outline-primary shadow-sm fw-bold text-nowrap d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#painelFiltros" aria-expanded="false" aria-controls="painelFiltros" style="border-radius: 10px; height: 42px;">
                        <i class="fa-solid fa-sliders me-2"></i>Filtros
                    </button>
                </div>
                
                <a href="/Projeto SIBDAS/private/views/localizacoes/novo.php" class="btn shadow-sm text-white text-nowrap fw-bold d-flex align-items-center" style="background-color: #2196f3; border-radius: 10px; padding: 0 20px; height: 42px;">
                    <i class="fa-solid fa-plus me-2"></i>Nova Localização
                </a>
            </div>

            <div class="collapse mb-4" id="painelFiltros">
                <div class="card card-body border-0 shadow-sm rounded-4 bg-white">
                    <h6 class="text-primary fw-bold mb-3"><i class="fa-solid fa-filter me-2"></i>Filtros Específicos</h6>
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label class="form-label fw-bold text-secondary small mb-1">Edifício</label>
                            <select class="form-select border-1 shadow-sm rounded-3 bg-light">
                                <option value="">Todos os Edifícios</option>
                                <option value="principal">Edifício Principal</option>
                                <option value="bloco-sul">Bloco Sul</option>
                                <option value="anexo">Anexo Consultas</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fw-bold text-secondary small mb-1">Piso</label>
                            <select class="form-select border-1 shadow-sm rounded-3 bg-light">
                                <option value="">Todos os Pisos</option>
                                <option value="piso0">Piso 0</option>
                                <option value="piso1">Piso 1</option>
                                <option value="piso2">Piso 2</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fw-bold text-secondary small mb-1">Tipo de Serviço</label>
                            <select class="form-select border-1 shadow-sm rounded-3 bg-light">
                                <option value="">Todos os Serviços</option>
                                <option value="clinico">Clínico / Internamento</option>
                                <option value="urgencia">Urgência</option>
                                <option value="apoio">Apoio / Administrativo</option>
                            </select>
                        </div>
                        <div class="col-12 d-flex justify-content-end gap-2 mt-2">
                            <button class="btn btn-sm btn-light text-muted fw-bold border rounded-3 px-3 py-2">Limpar</button>
                            <button class="btn btn-sm btn-primary fw-bold rounded-3 px-3 py-2">Aplicar Filtros</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4 p-0 overflow-hidden mt-2 w-100">
                <div class="table-responsive">
                    <table class="table align-middle table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="text-primary ps-4 py-3">Edifício</th>
                                <th class="text-primary py-3">Piso</th>
                                <th class="text-primary py-3">Serviço / Departamento</th>
                                <th class="text-primary py-3">Sala / Gabinete</th>
                                <th class="text-primary py-3 text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4 py-3">
                                    <span style="background-color: #f4f9ff; border: 1px solid #dbeafe; color: #1976d2; padding: 5px 12px; border-radius: 20px; font-weight: 600; font-size: 0.85rem;">
                                        Edifício Principal
                                    </span>
                                </td>
                                <td>Piso 1</td>
                                <td><strong>Cuidados Intensivos</strong></td>
                                <td class="text-muted">Box 4</td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="/Projeto SIBDAS/private/views/localizacoes/detalhes.php" class="btn btn-sm btn-outline-primary rounded-3" title="Ver Detalhes">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="/Projeto SIBDAS/private/views/localizacoes/editar.php" class="btn btn-sm btn-outline-warning rounded-3" title="Editar">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a> 
                                        <a href="/Projeto SIBDAS/private/views/localizacoes/apagar.php" class="btn btn-sm btn-outline-danger rounded-3" title="Apagar">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-4 py-3">
                                    <span style="background-color: #f4f9ff; border: 1px solid #dbeafe; color: #1976d2; padding: 5px 12px; border-radius: 20px; font-weight: 600; font-size: 0.85rem;">
                                        Edifício Principal
                                    </span>
                                </td>
                                <td>Piso 0</td>
                                <td><strong>Serviço de Urgência</strong></td>
                                <td class="text-muted">Sala de Triagem 1</td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="/Projeto SIBDAS/private/views/localizacoes/detalhes.php" class="btn btn-sm btn-outline-primary rounded-3" title="Ver Detalhes">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="/Projeto SIBDAS/private/views/localizacoes/editar.php" class="btn btn-sm btn-outline-warning rounded-3" title="Editar">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a> 
                                        <a href="/Projeto SIBDAS/private/views/localizacoes/apagar.php" class="btn btn-sm btn-outline-danger rounded-3" title="Apagar">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </a>
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
                <button class="pag-num">2</button>
                <button class="pag-num">3</button>
                <button class="pag-num">Seguinte</button>
            </div>

        </section>
    </main>

<?php include '../../includes/footer.php'; ?>
