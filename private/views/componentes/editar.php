<?php 
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['mensagem_alerta'] = "Componente atualizado com sucesso!";
        $_SESSION['tipo_alerta'] = "success"; 
        header("Location: componentes.php"); 
        exit();
    }

    $page_title = "Editar Componente";
    $titulo = "Gestão de Componentes";
    $subtitulo = "Atualize as informações técnicas e estado do componente.";
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
                    
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2 class="mb-0 text-dark fw-bold">
                            <i class="fa-solid fa-pen-to-square me-2" style="color: #ff9800;"></i> Editar Dados do Componente
                        </h2>
                    </div>
                    <hr class="mb-4">

                    <form action="" method="POST">

                        <h5 class="fw-bold mb-3" style="color: #1976d2;">1. Identificação</h5>
                        <div class="row bg-light rounded-4 p-3 mb-4 mx-0 shadow-sm border border-light">
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="nome">Designação *</label>
                                    <input type="text" id="nome" name="nome" value="Sensor SpO2" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="serie">Número de Série *</label>
                                    <input type="text" id="serie" name="serie" value="SN-2026-X99" required>
                                </div>
                            </div>
                        </div>

                        <h5 class="fw-bold mb-3" style="color: #1976d2;">2. Associação e Estado</h5>
                        <div class="row bg-light rounded-4 p-3 mb-4 mx-0 shadow-sm border border-light">
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="equipamento_pai">Equipamento Pai *</label>
                                    <select id="equipamento_pai" name="equipamento_pai" required>
                                        <option value="monitor" selected>Monitor MP5</option>
                                        <option value="ventilador">Ventilador V500</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="estado">Estado *</label>
                                    <select id="estado" name="estado" required>
                                        <option value="operacional" selected>Operacional</option>
                                        <option value="manutencao">Em Manutenção</option>
                                        <option value="avariado">Avariado</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end gap-3 mt-4 border-top pt-4">
                            <a href="/Projeto SIBDAS/private/views/componentes/componentes.php" class="btn btn-outline-secondary fw-bold px-4 rounded-pill shadow-sm d-flex align-items-center">
                                <i class="fa-solid fa-xmark me-2"></i> Cancelar
                            </a>
                            <button type="submit" class="btn btn-primary fw-bold px-4 rounded-pill shadow-sm d-flex align-items-center" style="background-color: #1976d2; border-color: #1976d2;">
                                <i class="fa-regular fa-floppy-disk me-2"></i> Guardar Alterações
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
</div>

<?php include '../../includes/footer.php'; ?>