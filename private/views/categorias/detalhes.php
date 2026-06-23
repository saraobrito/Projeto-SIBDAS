<?php
    session_start();
    require_once __DIR__ . '/../../includes/auth_check.php';
    $page_title = "Detalhes da Categoria";
    $titulo = "Gestão de Categorias";
    $subtitulo = "Ficha técnica e inventário desta categoria.";
    $pagina_ativa = 'categorias';

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
                            <i class="fa-solid fa-layer-group me-2" style="color: #1976d2;"></i> Detalhes da Categoria
                        </h2>
                        <div class="d-flex gap-2">
                            <a href="/Projeto SIBDAS/private/views/categorias/editar.php" class="btn btn-outline-warning btn-sm shadow-sm rounded-pill px-3">
                                <i class="fa-regular fa-pen-to-square me-1"></i> Editar
                            </a>
                            <a href="/Projeto SIBDAS/private/views/categorias/apagar.php" class="btn btn-outline-danger btn-sm shadow-sm rounded-pill px-3">
                                <i class="fa-solid fa-trash-can me-1"></i> Apagar
                            </a>
                        </div>
                    </div>
                    <hr class="mb-4">

                    <h5 class="fw-bold mb-3" style="color: #1976d2;">1. Informações Técnicas</h5>
                    <div class="row bg-light rounded-4 p-3 mb-4 mx-0">
                        <div class="col-md-4 mb-3">
                            <label class="text-muted small text-uppercase fw-bold">Designação</label>
                            <p class="fs-5 fw-bold text-dark m-0">Monitorização</p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="text-muted small text-uppercase fw-bold">Prefixo de Código</label>
                            <p class="fs-5 fw-bold text-primary m-0">MON</p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="text-muted small text-uppercase fw-bold">Total Equipamentos</label>
                            <p class="fs-5 fw-bold text-dark m-0">142</p>
                        </div>
                        <div class="col-12">
                            <label class="text-muted small text-uppercase fw-bold">Descrição</label>
                            <p class="text-dark">Equipamentos destinados à observação contínua de parâmetros vitais do paciente.</p>
                        </div>
                    </div>

                    <h5 class="fw-bold mb-3" style="color: #1976d2;">2. Equipamentos Associados</h5>
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-4">
                        <div class="table-responsive">
                            <table class="table align-middle table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="ps-4">Código Interno</th>
                                        <th>Nome do Equipamento</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="ps-4 text-muted">04.002.00</td>
                                        <td class="fw-bold text-dark">Monitor MP5</td>
                                        <td><span class="badge bg-success bg-opacity-10 text-success rounded-pill px-2">Ativo</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mt-4 border-top pt-4">
                        <a href="/Projeto SIBDAS/private/views/categorias/categorias.php" class="btn btn-outline-secondary px-4 shadow-sm rounded-pill">
                            <i class="fa-solid fa-arrow-left me-2"></i> Voltar
                        </a>
                    </div>

                </div>
            </div>
        </section>
    </main>
</div>

<?php include '../../includes/footer.php'; ?>