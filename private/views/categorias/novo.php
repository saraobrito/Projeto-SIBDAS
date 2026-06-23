<?php 
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['mensagem_alerta'] = "Categoria registada com sucesso!";
        $_SESSION['tipo_alerta'] = "success"; 
        header("Location: categorias.php"); 
        exit();
    }
    
    $page_title = "Registar Categoria";
    $titulo = "Gestão de Categorias";
    $subtitulo = "Adicione um novo tipo de equipamento com regras de gestão associadas.";
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
                <div class="card-body p-4 p-md-5">
                    
                    <h2 class="mb-4 text-dark fw-bold">
                        <i class="fa-solid fa-layer-group me-2" style="color: #2196f3;"></i> Dados da Categoria
                    </h2>
                    <hr class="mb-4">

                    <form action=" " method="POST">
                        <h5 class="fw-bold mb-3" style="color: #1976d2;">1. Identificação</h5>
                        <div class="row bg-light rounded-4 p-3 mb-4 mx-0 shadow-sm border border-light">
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="nome">Nome da Categoria *</label>
                                    <input type="text" id="nome" name="nome" placeholder="Ex: Monitorização" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="prefixo">Prefixo de Código *</label>
                                    <input type="text" id="prefixo" name="prefixo" placeholder="Ex: MON" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="custom-input-group mb-0">
                                    <label for="descricao">Descrição</label>
                                    <textarea id="descricao" name="descricao" rows="2" placeholder="Descreva brevemente esta categoria..."></textarea>
                                </div>
                            </div>
                        </div>

                        <h5 class="fw-bold mb-3" style="color: #1976d2;">2. Regras de Inventário e Manutenção</h5>
                        <div class="row bg-light rounded-4 p-3 mb-4 mx-0 shadow-sm border border-light">
                            <div class="col-md-4 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="vida_util">Vida Útil (Anos)</label>
                                    <input type="number" id="vida_util" name="vida_util" placeholder="Ex: 10">
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="periodicidade">Periodicidade Manutenção</label>
                                    <select id="periodicidade" name="periodicidade">
                                        <option value="anual">Anual</option>
                                        <option value="semestral">Semestral</option>
                                        <option value="trimestral">Trimestral</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="prioridade">Prioridade Intervenção</label>
                                    <select id="prioridade" name="prioridade">
                                        <option value="baixa">Baixa</option>
                                        <option value="media">Média</option>
                                        <option value="alta">Alta</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="custom-input-group mb-0">
                                    <label for="responsavel">Responsável Técnico / Departamento *</label>
                                    <input type="text" id="responsavel" name="responsavel" placeholder="Ex: Eng. Biomédica" required>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end gap-3 mt-4 border-top pt-4">
                            <a href="/Projeto SIBDAS/private/views/categorias/categorias.php" class="btn btn-outline-secondary fw-bold px-4 rounded-pill shadow-sm d-flex align-items-center">
                                <i class="fa-solid fa-xmark me-2"></i> Cancelar
                            </a>
                            <button type="submit" class="btn btn-primary fw-bold px-4 rounded-pill shadow-sm d-flex align-items-center" style="background-color: #2196f3; border-color: #2196f3;">
                                <i class="fa-solid fa-plus me-2"></i> Salvar Categoria
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
</div>

<script src="../../includes/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>