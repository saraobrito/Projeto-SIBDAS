<?php
    $page_title = "Registar Documento - Hospital Praia Dourada";
    include '../../includes/header.php';
    $pagina_ativa = 'documentacao';
?>
<body style="background-color: #f8fbff;">

    <?php include '../../includes/sidebar.php'; ?>

    <main class="main-content flex-grow-1" style="padding: 0; min-height: 100vh;">
        
        <header class="cabecalho-dashboard border-bottom shadow-sm" style="background-color: #f0f7fd; padding: 20px 30px; margin: 0; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px;">
            <div class="d-flex align-items-center gap-4">
                <button class="btn border-0 shadow-sm rounded-3 bg-white p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" title="Abrir Menu">
                    <i class="fa-solid fa-bars fs-4" style="color: #1976d2;"></i>
                </button>
                <div>
                    <h1 style="font-size: 2rem; color: #1976d2; font-weight: bold; margin-bottom: 5px;">Registar Documento</h1>
                    <p style="color: #666; margin: 0;">Submeter novo manual, certificado ou norma técnica ao sistema.</p>
                </div>
            </div>

            <div class="dropdown">
                <button class="btn dropdown-toggle shadow-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false" 
                        style="background: white; padding: 10px 20px; border-radius: 20px; border: 1px solid #e3f2fd; color: #333;">
                    <i class="fa-regular fa-user me-1 text-primary"></i> <strong>Utilizador</strong> - Data
                </button>
                <ul class="dropdown-menu dropdown-menu-end shadow border-0">
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-key me-2 text-muted"></i>Alterar palavra-passe</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fa-solid fa-gear me-2 text-muted"></i>Definições</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-danger" href="../../../public/index.html"><i class="fa-solid fa-right-from-bracket me-2"></i>Sair</a></li>
                </ul>
            </div>
        </header>

        <section style="padding: 30px; display: flex; justify-content: center;">
            <div class="card w-100 shadow-sm rounded-4 border-0" style="max-width: 900px;">
                <div class="card-body p-4 p-md-5">
                    
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2 class="mb-0 text-dark fw-bold">
                            <i class="fa-solid fa-file-circle-plus me-2" style="color: #2196f3;"></i> Detalhes do Documento
                        </h2>
                    </div>
                    <hr class="mb-4">

                    <form action="/Projeto SIBDAS/private/views/documentacao/documentacao.php" method="POST" enctype="multipart/form-data">

                        <!-- Bloco 1: Identificação -->
                        <h5 class="fw-bold mb-3" style="color: #1976d2;">1. Informação do Ficheiro</h5>
                        <div class="row bg-light rounded-4 p-3 mb-4 mx-0 shadow-sm border border-light">
                            <div class="col-md-12 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="nome_doc">Designação do Documento *</label>
                                    <input type="text" id="nome_doc" name="nome_doc" placeholder="Ex: Manual de Utilizador - Ventilador V500" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 mb-md-0">
                                <div class="custom-input-group mb-0">
                                    <label for="categoria">Categoria *</label>
                                    <select id="categoria" name="categoria" required>
                                        <option value="">Selecione a categoria...</option>
                                        <option value="manual">Manual de Utilizador</option>
                                        <option value="calibracao">Certificado de Calibração</option>
                                        <option value="garantia">Garantia / Contrato</option>
                                        <option value="norma">Norma Técnica</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="custom-input-group mb-0">
                                    <label for="arquivo">Ficheiro (PDF/Word) *</label>
                                    <input type="file" id="arquivo" name="arquivo" required style="padding-top: 8px;">
                                </div>
                            </div>
                        </div>

                        <!-- Bloco 2: Associação -->
                        <h5 class="fw-bold mb-3" style="color: #1976d2;">2. Associação a Equipamento</h5>
                        <div class="row bg-light rounded-4 p-3 mb-4 mx-0 shadow-sm border border-light">
                            <div class="col-md-12">
                                <div class="custom-input-group mb-0">
                                    <label for="equipamento_id">Equipamento Relacionado *</label>
                                    <select id="equipamento_id" name="equipamento_id" required>
                                        <option value="">Selecione o equipamento no inventário...</option>
                                        <option value="04.002.00">04.002.00 - Ventilador Pulmonar V500</option>
                                        <option value="07.015.01">07.015.01 - Monitor Multiparamétrico MP5</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Bloco 3: Observações -->
                        <h5 class="fw-bold mb-3" style="color: #1976d2;">3. Observações</h5>
                        <div class="bg-light rounded-4 p-3 border-start border-4 border-info shadow-sm mb-4">
                            <div class="custom-input-group mb-0">
                                <label for="observacoes"><i class="fa-solid fa-circle-info me-1"></i> Notas Adicionais</label>
                                <textarea id="observacoes" name="observacoes" rows="3" placeholder="Ex: Documento relativo à revisão anual de 2026..."></textarea>
                            </div>
                        </div>

                        <!-- Botões -->
                        <div class="d-flex justify-content-end gap-3 mt-4 border-top pt-4">
                            <a href="/Projeto SIBDAS/private/views/documentacao/documentacao.php" class="btn btn-outline-secondary fw-bold px-4 rounded-pill shadow-sm d-flex align-items-center">
                                <i class="fa-solid fa-xmark me-2"></i> Cancelar
                            </a>
                            <button type="submit" class="btn btn-primary fw-bold px-4 rounded-pill shadow-sm d-flex align-items-center" style="background-color: #2196f3; border-color: #2196f3;">
                                <i class="fa-solid fa-file-arrow-up me-2"></i> Submeter Documento
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
</div>

<?php include '../../includes/footer.php'; ?>