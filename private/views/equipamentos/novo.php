<?php 
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['mensagem_alerta'] = "Equipamento registado com sucesso!";
        $_SESSION['tipo_alerta'] = "success"; 
        header("Location: equipamentos.php"); 
        exit();
    }

    $page_title = "Registar Equipamento";
    $titulo = "Gestão de Equipamentos";
    $subtitulo = "Introduza os detalhes técnicos e clínicos do novo dispositivo.";
    $pagina_ativa = 'equipamentos';

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
                        <i class="fa-solid fa-laptop-medical me-2" style="color: #2196f3;"></i> Dados do Equipamento
                    </h2>
                    <hr class="mb-4">

                    <form action=" " method="POST">
                        <h5 class="fw-bold mb-3" style="color: #1976d2;">1. Identificação do Dispositivo</h5>
                        <div class="row bg-light rounded-4 p-3 mb-4 mx-0 shadow-sm border border-light">
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label>Código Interno de Inventário *</label>
                                    <input type="text" placeholder="Ex: 04.002.00" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label>Designação do Equipamento *</label>
                                    <input type="text" placeholder="Ex: Ventilador Pulmonar" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label>Marca *</label>
                                    <input type="text" placeholder="Ex: Dräger" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label>Modelo *</label>
                                    <input type="text" placeholder="Ex: Evita V500" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label>Número de Série *</label>
                                    <input type="text" placeholder="Insira o S/N do fabricante" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label>Fabricante *</label>
                                    <input type="text" placeholder="Ex: Dräger Medical" required>
                                </div>
                            </div>
                        </div>

                        <h5 class="fw-bold mb-3" style="color: #1976d2;">2. Classificação e Estado Clínico</h5>
                        <div class="row bg-light rounded-4 p-3 mb-4 mx-0 shadow-sm border border-light">
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label>Categoria / Grupo *</label>
                                    <select required><option>Selecione uma categoria...</option></select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label>Nível de Criticidade Clínica *</label>
                                    <select required><option>Selecione a criticidade...</option></select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label>Estado Atual do Equipamento *</label>
                                    <select required><option>Selecione o estado...</option></select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label>Localização Atual (Serviço) *</label>
                                    <select required><option>Selecione o serviço hospitalar...</option></select>
                                </div>
                            </div>
                        </div>

                        <h5 class="fw-bold mb-3" style="color: #1976d2;">3. Detalhes de Aquisição e Observações</h5>
                        <div class="row bg-light rounded-4 p-3 mb-4 mx-0 shadow-sm border border-light">
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label>Data de Aquisição *</label>
                                    <input type="date" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label>Ano de Fabrico *</label>
                                    <input type="number" placeholder="Ex: 2024" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label>Custo de Aquisição (€) *</label>
                                    <input type="number" step="0.01" placeholder="Ex: 14500.00" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label>Tipo de Entrada *</label>
                                    <select required><option>Compra</option></select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="custom-input-group mb-0">
                                    <label>Observações / Notas Técnicas</label>
                                    <textarea rows="2" placeholder="Insira notas adicionais..."></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end gap-3 mt-4 border-top pt-4">
                            <a href="/Projeto SIBDAS/private/views/equipamentos/equipamentos.php" class="btn btn-outline-secondary fw-bold px-4 rounded-pill shadow-sm d-flex align-items-center">
                                <i class="fa-solid fa-xmark me-2"></i> Cancelar
                            </a>
                            <button type="submit" class="btn btn-primary fw-bold px-4 rounded-pill shadow-sm d-flex align-items-center" style="background-color: #2196f3; border-color: #2196f3;">
                                <i class="fa-solid fa-plus me-2"></i> Salvar Equipamento
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
</div>

<?php include '../../includes/footer.php'; ?>