<?php
    session_start();
    require_once __DIR__ . '/../../includes/auth_check.php';
    $page_title = "Registar Localização";
    $titulo = "Gestão de Localizações";
    $subtitulo = "Introduza os detalhes técnicos da nova localização.";
    $pagina_ativa = 'localizacoes';

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
                            <i class="fa-solid fa-map-location-dot me-2" style="color: #2196f3;"></i> Dados do Espaço Físico
                        </h2>
                    </div>
                    <hr class="mb-4">

                    <form action="/Projeto SIBDAS/private/views/localizacoes/localizacoes.php" method="POST">

                        <h5 class="fw-bold mb-3" style="color: #1976d2;">1. Estrutura Física</h5>
                        <div class="row bg-light rounded-4 p-3 mb-4 mx-0 shadow-sm border border-light">
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="edificio">Edifício *</label>
                                    <select id="edificio" name="edificio" required>
                                        <option value="">Selecione o edifício...</option>
                                        <option value="principal">Edifício Principal</option>
                                        <option value="bloco-sul">Bloco Sul</option>
                                        <option value="anexo-consultas">Anexo Consultas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="piso">Piso *</label>
                                    <select id="piso" name="piso" required>
                                        <option value="">Selecione o piso...</option>
                                        <option value="-1">Piso -1</option>
                                        <option value="0">Piso 0</option>
                                        <option value="1">Piso 1</option>
                                        <option value="2">Piso 2</option>
                                        <option value="3">Piso 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 mb-md-0">
                                <div class="custom-input-group mb-0">
                                    <label for="servico">Serviço / Departamento *</label>
                                    <input type="text" id="servico" name="servico" placeholder="Ex: Urgência, Cuidados Intensivos..." required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="custom-input-group mb-0">
                                    <label for="sala">Sala / Gabinete *</label>
                                    <input type="text" id="sala" name="sala" placeholder="Ex: Sala de Triagem 1, Box 4..." required>
                                </div>
                            </div>
                        </div>

                        <h5 class="fw-bold mb-3" style="color: #1976d2;">2. Informações de Gestão Interna</h5>
                        <div class="row bg-light rounded-4 p-3 mb-4 mx-0 shadow-sm border border-light">
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="responsavel">Responsável do Serviço / Espaço</label>
                                    <input type="text" id="responsavel" name="responsavel" placeholder="Nome do médico ou enfermeiro chefe">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="extensao">Extensão Telefónica</label>
                                    <input type="number" id="extensao" name="extensao" placeholder="Ex: 4501">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 mb-md-0">
                                <div class="custom-input-group mb-0">
                                    <label for="centro_custo">Centro de Custo</label>
                                    <input type="text" id="centro_custo" name="centro_custo" placeholder="Ex: CC-URG-01">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="custom-input-group mb-0">
                                    <label for="tipo_zona">Tipo de Zona</label>
                                    <select id="tipo_zona" name="tipo_zona">
                                        <option value="clinica" selected>Área Clínica / Tratamento</option>
                                        <option value="tecnica">Área Técnica / Armazém</option>
                                        <option value="administrativa">Área Administrativa</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <h5 class="fw-bold mb-3" style="color: #1976d2;">3. Observações e Equipamentos</h5>
                        <div class="bg-light rounded-4 p-3 border-start border-4 border-info shadow-sm mb-4">
                            <div class="custom-input-group mb-0">
                                <label for="observacoes"><i class="fa-solid fa-circle-info me-1"></i> Notas sobre a Localização e Equipamentos Afetos</label>
                                <textarea id="observacoes" name="observacoes" rows="3" placeholder="Indique restrições de acesso ou equipamentos alocados a esta sala (Ex: Apenas permite a entrada de 1 Ventilador (07.xxx) e 2 Monitores (04.xxx))"></textarea>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end gap-3 mt-4 border-top pt-4">
                            <a href="/Projeto SIBDAS/private/views/localizacoes/localizacoes.php" class="btn btn-outline-secondary fw-bold px-4 rounded-pill shadow-sm d-flex align-items-center">
                                <i class="fa-solid fa-xmark me-2"></i> Cancelar
                            </a>
                            <button type="submit" class="btn btn-primary fw-bold px-4 rounded-pill shadow-sm d-flex align-items-center" style="background-color: #2196f3; border-color: #2196f3;">
                                <i class="fa-solid fa-location-crosshairs me-2"></i> Salvar Localização
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </section>
    </main>
</div>

<?php include '../../includes/footer.php'; ?>