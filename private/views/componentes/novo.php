<?php 
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['mensagem_alerta'] = "Componente registado com sucesso!";
        $_SESSION['tipo_alerta'] = "success"; 
        header("Location: componentes.php"); 
        exit();
    }

    $page_title = "Registar Componente";
    $titulo = "Gestão de Componentes";
    $subtitulo = "Adicione novos componentes ao inventário.";
    $pagina_ativa = 'componentes';

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
                        <i class="fa-solid fa-microchip me-2" style="color: #2196f3;"></i> Dados do Componente
                    </h2>
                    <hr class="mb-4">

                    <form action=" " method="POST">

                        <h5 class="fw-bold mb-3" style="color: #1976d2;">1. Identificação</h5>
                        <div class="row bg-light rounded-4 p-3 mb-4 mx-0 shadow-sm border border-light">
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="nome">Designação *</label>
                                    <input type="text" id="nome" name="nome" placeholder="Ex: Sensor SpO2" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="serie">Número de Série *</label>
                                    <input type="text" id="serie" name="serie" placeholder="Ex: SN-2026-X99" required>
                                </div>
                            </div>
                        </div>

                        <h5 class="fw-bold mb-3" style="color: #1976d2;">2. Associação e Estado</h5>
                        <div class="row bg-light rounded-4 p-3 mb-4 mx-0 shadow-sm border border-light">
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="equipamento_pai">Equipamento Pai *</label>
                                    <select id="equipamento_pai" name="equipamento_pai" required>
                                        <option value="">Selecione o equipamento...</option>
                                        <option value="monitor">Monitor MP5</option>
                                        <option value="ventilador">Ventilador V500</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="estado">Estado Inicial *</label>
                                    <select id="estado" name="estado" required>
                                        <option value="operacional">Operacional</option>
                                        <option value="manutencao">Em Manutenção</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end gap-3 mt-4 border-top pt-4">
                            <a href="/Projeto SIBDAS/private/views/componentes/componentes.php" class="btn btn-outline-secondary fw-bold px-4 rounded-pill shadow-sm d-flex align-items-center">
                                <i class="fa-solid fa-xmark me-2"></i> Cancelar
                            </a>
                            <button type="submit" class="btn btn-primary fw-bold px-4 rounded-pill shadow-sm d-flex align-items-center" style="background-color: #2196f3; border-color: #2196f3;">
                                <i class="fa-solid fa-plus me-2"></i> Salvar Componente
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
</div>

<?php include '../../includes/footer.php'; ?>