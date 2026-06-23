<?php
    session_start();
    require_once __DIR__ . '/../../includes/auth_check.php';
    $page_title = "Registar Garantia/Contrato";
    $titulo = "Gestão de Garantias & Contratos";
    $subtitulo = "Introduza os detalhes técnicos da nova garantia/contrato. ";
    $pagina_ativa = 'garantiascontratos';

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
                        <i class="fa-solid fa-file-contract me-2" style="color: #2196f3;"></i> Dados do Contrato
                    </h2>
                    <hr class="mb-4">

                    <form action="/Projeto SIBDAS/private/views/garantiascontratos/garantiascontratos.php" method="POST">
                        
                        <h5 class="fw-bold mb-3" style="color: #1976d2;"><i class="fa-solid fa-laptop-medical me-2"></i>1. Equipamento</h5>
                        <div class="row bg-light rounded-4 p-3 mb-4 mx-0 shadow-sm border border-light">
                            <div class="col-12">
                                <div class="custom-input-group mb-0">
                                    <label for="equipamento_id">Selecione o Equipamento *</label>
                                    <select id="equipamento_id" name="equipamento_id" required>
                                        <option value="">Escolha um equipamento...</option>
                                        <option value="1">Ventilador Pulmonar V500 (04.002.00)</option>
                                        <option value="2">Monitor Multiparamétrico MP5 (07.015.01)</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <h5 class="fw-bold mb-3" style="color: #1976d2;"><i class="fa-solid fa-calendar-days me-2"></i>2. Prazos de Vigência</h5>
                        <div class="row bg-light rounded-4 p-3 mb-4 mx-0 shadow-sm border border-light">
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="data_inicio">Data de Início *</label>
                                    <input type="date" id="data_inicio" name="data_inicio" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="data_fim">Data de Fim *</label>
                                    <input type="date" id="data_fim" name="data_fim" required>
                                </div>
                            </div>
                        </div>

                        <h5 class="fw-bold mb-3" style="color: #1976d2;"><i class="fa-solid fa-screwdriver-wrench me-2"></i>3. Detalhes da Manutenção</h5>
                        <div class="row bg-light rounded-4 p-3 mb-4 mx-0 shadow-sm border border-light">
                            <div class="col-md-4 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="tipo_contrato">Tipo de Contrato</label>
                                    <select id="tipo_contrato" name="tipo_contrato">
                                        <option value="preventiva">Manutenção Preventiva</option>
                                        <option value="corretiva">Manutenção Corretiva</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="entidade">Entidade Responsável *</label>
                                    <input type="text" id="entidade" name="entidade" placeholder="Ex: Dräger Portugal" required>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="periodicidade">Periodicidade</label>
                                    <select id="periodicidade" name="periodicidade">
                                        <option value="anual">Anual</option>
                                        <option value="semestral">Semestral</option>
                                        <option value="trimestral">Trimestral</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="custom-input-group mb-0">
                                    <label for="observacoes">Observações</label>
                                    <textarea id="observacoes" name="observacoes" rows="2" placeholder="Notas adicionais..."></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end gap-3 mt-4 border-top pt-4">
                            <a href="/Projeto SIBDAS/private/views/garantiascontratos/garantiascontratos.php" class="btn btn-outline-secondary fw-bold px-4 rounded-pill shadow-sm d-flex align-items-center">
                                <i class="fa-solid fa-xmark me-2"></i> Cancelar
                            </a>
                            <button type="submit" class="btn btn-primary fw-bold px-4 rounded-pill shadow-sm d-flex align-items-center" style="background-color: #2196f3; border-color: #2196f3;">
                                <i class="fa-solid fa-plus me-2"></i> Guardar Contrato
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
</div>

<?php include '../../includes/footer.php'; ?>