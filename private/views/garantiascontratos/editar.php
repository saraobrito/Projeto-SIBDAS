<?php
    session_start();
    require_once __DIR__ . '/../../includes/auth_check.php';
    $page_title = "Editar Garantia/Contrato";
    $titulo = "Gestão de Garantias & Contratos";
    $subtitulo = "Modifique os prazos e condições contratuais do equipamento.";
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
                        <i class="fa-solid fa-pen-to-square me-2" style="color: #ff9800;"></i> Editar Dados
                    </h2>
                    <hr class="mb-4">

                    <form action="/Projeto SIBDAS/private/views/garantiascontratos/garantiascontratos.php" method="POST">

                        <h5 class="fw-bold mb-3" style="color: #1976d2;">1. Datas de Garantia</h5>
                        <div class="row bg-light rounded-4 p-3 mb-4 mx-0 shadow-sm border border-light">
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="data_inicio">Data de Início *</label>
                                    <input type="date" id="data_inicio" name="data_inicio" value="2024-07-15" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="data_fim">Data de Fim *</label>
                                    <input type="date" id="data_fim" name="data_fim" value="2026-07-15" required>
                                </div>
                            </div>
                        </div>

                        <h5 class="fw-bold mb-3" style="color: #1976d2;">2. Detalhes do Contrato</h5>
                        <div class="row bg-light rounded-4 p-3 mb-4 mx-0 shadow-sm border border-light">
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="tipo_contrato">Tipo de Contrato</label>
                                    <select id="tipo_contrato" name="tipo_contrato">
                                        <option value="nenhum">Nenhum</option>
                                        <option value="preventiva" selected>Manutenção Preventiva</option>
                                        <option value="corretiva">Manutenção Corretiva</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="entidade">Entidade Responsável</label>
                                    <input type="text" id="entidade" name="entidade" value="Dräger Portugal, Lda">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="custom-input-group mb-0">
                                    <label for="periodicidade">Periodicidade</label>
                                    <select id="periodicidade" name="periodicidade">
                                        <option value="anual" selected>Anual</option>
                                        <option value="semestral">Semestral</option>
                                        <option value="trimestral">Trimestral</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <h5 class="fw-bold mb-3" style="color: #1976d2;">3. Observações</h5>
                        <div class="bg-light rounded-4 p-3 border-start border-4 border-warning shadow-sm mb-4">
                            <div class="custom-input-group mb-0">
                                <label for="observacoes"><i class="fa-solid fa-circle-info me-1"></i> Notas Adicionais</label>
                                <textarea id="observacoes" name="observacoes" rows="3">Contrato renovado em Junho de 2026. Inclui substituição de peças de desgaste.</textarea>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end gap-3 mt-4 border-top pt-4">
                            <a href="/Projeto SIBDAS/private/views/garantiascontratos/garantiascontratos.php" class="btn btn-outline-secondary fw-bold px-4 rounded-pill shadow-sm d-flex align-items-center">
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