<?php
    $page_title = "Dashboard";
    $titulo = "Gestão de Inventário";
    $subtitulo = "Ficha técnica detalhada dos dispositivo médico e dos seus atributos. ";
    $pagina_ativa = 'dashboard';

    include '../../includes/header.php';

?>

<body style="background-color: #f8fbff;">

    <?php include '../../includes/sidebar.php'; ?>

<!-- Conteúdo Principal e Navbar-->
    <main class="main-content w-100" style="padding: 0; min-height: 100vh;">
    
    <?php 
        include '../../includes/page_header.php'; 
    ?>

        <div style="padding: 0 30px 30px 30px;">
            
            <div class="row g-3 mb-4">
                <div class="col-6 col-lg-3">
                    <div class="card border-0 shadow-sm rounded-4 p-3 bg-white">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h6 class="text-muted fw-bold text-uppercase mb-0" style="font-size: 0.75rem;">Total Equipamentos</h6>
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                                <i class="fa-solid fa-laptop-medical fs-6"></i>
                            </div>
                        </div>
                        <h2 class="text-primary fw-bold mb-0 fs-3">1,500</h2>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="card border-0 shadow-sm rounded-4 p-3 bg-white">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h6 class="text-muted fw-bold text-uppercase mb-0" style="font-size: 0.75rem;">Ativos</h6>
                            <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; background-color: #e8f5e9; color: #2e7d32;">
                                <i class="fa-solid fa-check-circle fs-6"></i>
                            </div>
                        </div>
                        <h2 class="fw-bold mb-0 fs-3" style="color: #2e7d32;">1,420</h2>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="card border-0 shadow-sm rounded-4 p-3 bg-white">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h6 class="text-muted fw-bold text-uppercase mb-0" style="font-size: 0.75rem;">Em Manutenção</h6>
                            <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; background-color: #fff3e0; color: #f57c00;">
                                <i class="fa-solid fa-screwdriver-wrench fs-6"></i>
                            </div>
                        </div>
                        <h2 class="fw-bold mb-0 fs-3" style="color: #f57c00;">45</h2>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="card border-0 shadow-sm rounded-4 p-3 bg-white">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h6 class="text-muted fw-bold text-uppercase mb-0" style="font-size: 0.75rem;">Inativos / Abatidos</h6>
                            <div class="rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px; background-color: #ffebee; color: #c62828;">
                                <i class="fa-solid fa-ban fs-6"></i>
                            </div>
                        </div>
                        <h2 class="fw-bold mb-0 fs-3" style="color: #c62828;">35</h2>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3 mt-4 flex-wrap gap-3">
                <h2 style="font-size: 1.5rem; color: #1976d2; margin:0; font-weight: bold;">Registo de Equipamentos</h2>
                
                <div class="d-flex align-items-center gap-2">
                    <label class="text-muted fw-bold small text-nowrap mb-0"><i class="fa-solid fa-sort me-1"></i>Ordenar por:</label>
                    <select class="form-select form-select-sm shadow-sm border-1 rounded-3" style="width: auto; cursor: pointer; color: #1976d2; font-weight: bold;">
                        <option value="recentes">Adicionados Recentemente</option>
                        <option value="garantia">Garantia a Expirar (&lt; 30 dias)</option>
                        <option value="manutencao">Urgência de Manutenção</option>
                        <option value="criticidade">Maior Criticidade Clínica</option>
                    </select>
                </div>
            </div>
            
            <div class="card border-0 shadow-sm rounded-4 p-0 overflow-hidden w-100">
                <div class="table-responsive">
                    <table class="table align-middle table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="text-primary ps-4 py-3">Código Interno</th>
                                <th class="text-primary py-3">Designação</th>
                                <th class="text-primary py-3">Marca / Modelo</th>
                                <th class="text-primary py-3">Localização</th>
                                <th class="text-primary py-3">Criticidade</th>
                                <th class="text-primary py-3">Estado</th>
                                <th class="text-primary py-3 text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #fff9e6;">
                                <td class="ps-4 py-3"><span class="codigo-inv">04.002.00</span></td>
                                <td>
                                    <strong>Monitor Multiparamétrico</strong>
                                    <span class="badge bg-warning text-dark ms-2" style="font-size: 0.75rem;"><i class="fa-solid fa-triangle-exclamation me-1"></i>Garantia termina em 15 dias</span>
                                </td>
                                <td class="text-muted">Philips IntelliVue MP5</td>
                                <td class="text-muted">Cuidados Intensivos</td>
                                <td><span class="badge crit-suporte">Suporte Vida</span></td>
                                <td><span class="badge b-ativo">Ativo</span></td>
                                <td class="text-center">
                                    <a href="/Projeto SIBDAS/private/views/equipamentos/detalhes.php" class="btn btn-sm btn-warning text-dark rounded-3 border-0 shadow-sm" title="Aviso Importante - Ver Detalhes">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-4 py-3"><span class="codigo-inv">07.015.01</span></td>
                                <td><strong>Ventilador Pulmonar</strong></td>
                                <td class="text-muted">Dräger Evita V500</td>
                                <td class="text-muted">Cuidados Intensivos</td>
                                <td><span class="badge crit-suporte">Suporte Vida</span></td>
                                <td><span class="badge b-manutencao">Em Manutenção</span></td>
                                <td class="text-center">
                                    <a href="/Projeto SIBDAS/private/views/equipamentos/detalhes.php" class="btn btn-sm btn-outline-primary rounded-3" title="Ver Detalhes">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-4 py-3"><span class="codigo-inv">12.040.10</span></td>
                                <td><strong>Bomba de Infusão</strong></td>
                                <td class="text-muted">B. Braun Infusomat</td>
                                <td class="text-muted">Serviço de Medicina</td>
                                <td><span class="badge crit-media">Média</span></td>
                                <td><span class="badge b-ativo">Ativo</span></td>
                                <td class="text-center">
                                    <a href="/Projeto SIBDAS/private/views/equipamentos/detalhes.php" class="btn btn-sm btn-outline-primary rounded-3" title="Ver Detalhes">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td class="ps-4 py-3"><span class="codigo-inv">09.102.05</span></td>
                                <td><strong>Desfibrilhador</strong></td>
                                <td class="text-muted">Zoll R Series</td>
                                <td class="text-muted">Urgência</td>
                                <td><span class="badge crit-alta">Alta</span></td>
                                <td><span class="badge b-inativo">Em Calibração</span></td>
                                <td class="text-center">
                                    <a href="/Projeto SIBDAS/private/views/equipamentos/detalhes.php" class="btn btn-sm btn-outline-primary rounded-3" title="Ver Detalhes">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
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

        </div>
    </main>
</div>

<?php include '../../includes/footer.php'; ?>