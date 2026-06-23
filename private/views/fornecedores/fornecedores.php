<?php
    session_start();
    require_once __DIR__ . '/../../includes/auth_check.php';
    $page_title = "Fornecedores";
    $titulo = "Gestão de Fornecedores";
    $subtitulo = "Monitorização dos fornecedores.";
    $pagina_ativa = 'fornecedores';

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
                        <input type="text" class="form-control shadow-sm" placeholder="Pesquisar por Empresa, NIF ou Contacto..." style="padding-left: 40px; border-radius: 10px; height: 42px;">
                    </div>
                    
                    <button class="btn btn-outline-primary shadow-sm fw-bold text-nowrap d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#painelFiltros" aria-expanded="false" aria-controls="painelFiltros" style="border-radius: 10px; height: 42px;">
                        <i class="fa-solid fa-sliders me-2"></i>Filtros
                    </button>
                </div>
                
                <a href="/Projeto SIBDAS/private/views/fornecedores/novo.php" class="btn shadow-sm text-white text-nowrap fw-bold d-flex align-items-center" style="background-color: #2196f3; border-radius: 10px; padding: 0 20px; height: 42px;">
                    <i class="fa-solid fa-plus me-2"></i>Novo Fornecedor
                </a>
            </div>

            <div class="collapse mb-4" id="painelFiltros">
                <div class="card card-body border-0 shadow-sm rounded-4 bg-white">
                    <h6 class="text-primary fw-bold mb-3"><i class="fa-solid fa-filter me-2"></i>Filtros Específicos</h6>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-bold text-secondary small mb-1">Tipo de Fornecedor</label>
                            <select class="form-select border-1 shadow-sm rounded-3 bg-light">
                                <option value="">Todos os Tipos</option>
                                <option value="fabricante">Fabricante</option>
                                <option value="distribuidor">Distribuidor / Fornecedor Comercial</option>
                                <option value="assistencia">Empresa de Assistência Técnica</option>
                                <option value="consumiveis">Fornecedor de Consumíveis</option>
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
                                <th class="text-primary ps-4 py-3">Nome da Empresa / NIF</th>
                                <th class="text-primary py-3">Tipo de Fornecedor</th>
                                <th class="text-primary py-3">Contactos Gerais</th>
                                <th class="text-primary py-3">Pessoa de Contacto</th>
                                <th class="text-primary py-3 text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4 py-3">
                                    <strong class="text-dark fs-6">Dräger Portugal, Lda</strong><br>
                                    <span class="text-muted small"><i class="fa-solid fa-address-card me-1"></i>NIF: 501234567</span>
                                </td>
                                <td>
                                    <span class="badge bg-primary bg-opacity-10 text-primary border border-primary rounded-pill px-3 py-2">Fabricante</span>
                                </td>
                                <td>
                                    <span class="d-block text-muted small"><i class="fa-solid fa-phone me-1"></i> +351 210 123 456</span>
                                    <span class="d-block text-muted small"><i class="fa-solid fa-envelope me-1"></i> geral@draeger.pt</span>
                                </td>
                                <td>
                                    <span class="d-block text-dark fw-bold small"><i class="fa-regular fa-user me-1 text-muted"></i> Rui Santos</span>
                                    <span class="d-block text-muted small"><i class="fa-solid fa-mobile-screen me-1"></i> 912 345 678</span>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="/Projeto SIBDAS/private/views/fornecedores/detalhes.php" class="btn btn-sm btn-outline-primary rounded-3" title="Ver Detalhes">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="/Projeto SIBDAS/private/views/fornecedores/editar.php" class="btn btn-sm btn-outline-warning rounded-3" title="Editar">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a> 
                                        <a href="/Projeto SIBDAS/private/views/fornecedores/apagar.php" class="btn btn-sm btn-outline-danger rounded-3" title="Apagar">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="ps-4 py-3">
                                    <strong class="text-dark fs-6">MaintCare Solutions</strong><br>
                                    <span class="text-muted small"><i class="fa-solid fa-address-card me-1"></i>NIF: 509876543</span>
                                </td>
                                <td>
                                    <span class="badge bg-warning bg-opacity-10 text-warning border border-warning rounded-pill px-3 py-2" style="color: #d87a00 !important;">Assistência Técnica</span>
                                </td>
                                <td>
                                    <span class="d-block text-muted small"><i class="fa-solid fa-phone me-1"></i> +351 223 456 789</span>
                                    <span class="d-block text-muted small"><i class="fa-solid fa-envelope me-1"></i> suporte@maintcare.pt</span>
                                </td>
                                <td>
                                    <span class="d-block text-dark fw-bold small"><i class="fa-regular fa-user me-1 text-muted"></i> Ana Oliveira</span>
                                    <span class="d-block text-muted small"><i class="fa-solid fa-mobile-screen me-1"></i> 934 567 890</span>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="/Projeto SIBDAS/private/views/fornecedores/detalhes.php" class="btn btn-sm btn-outline-primary rounded-3" title="Ver Detalhes">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="/Projeto SIBDAS/private/views/fornecedores/editar.php" class="btn btn-sm btn-outline-warning rounded-3" title="Editar">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a> 
                                        <a href="/Projeto SIBDAS/private/views/fornecedores/apagar.php" class="btn btn-sm btn-outline-danger rounded-3" title="Apagar">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td class="ps-4 py-3">
                                    <strong class="text-dark fs-6">MedTech Distribuição</strong><br>
                                    <span class="text-muted small"><i class="fa-solid fa-address-card me-1"></i>NIF: 504567891</span>
                                </td>
                                <td>
                                    <span class="badge bg-success bg-opacity-10 text-success border border-success rounded-pill px-3 py-2">Distribuidor Comercial</span>
                                </td>
                                <td>
                                    <span class="d-block text-muted small"><i class="fa-solid fa-phone me-1"></i> +351 219 876 543</span>
                                    <span class="d-block text-muted small"><i class="fa-solid fa-envelope me-1"></i> vendas@medtech.pt</span>
                                </td>
                                <td>
                                    <span class="d-block text-dark fw-bold small"><i class="fa-regular fa-user me-1 text-muted"></i> Carlos Mendes</span>
                                    <span class="d-block text-muted small"><i class="fa-solid fa-mobile-screen me-1"></i> 961 234 567</span>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="/Projeto SIBDAS/private/views/fornecedores/detalhes.php" class="btn btn-sm btn-outline-primary rounded-3" title="Ver Detalhes">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                        <a href="/Projeto SIBDAS/private/views/fornecedores/editar.php" class="btn btn-sm btn-outline-warning rounded-3" title="Editar">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </a> 
                                        <a href="/Projeto SIBDAS/private/views/fornecedores/apagar.php" class="btn btn-sm btn-outline-danger rounded-3" title="Apagar">
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