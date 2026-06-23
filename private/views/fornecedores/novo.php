<?php 
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['mensagem_alerta'] = "Fornecedor registado com sucesso!";
        $_SESSION['tipo_alerta'] = "success"; 
        header("Location: fornecedores.php"); 
        exit();
    }

    $page_title = "Registar Fornecedor";
    $titulo = "Gestão de Fornecedores";
    $subtitulo = "Registo e gestão de fabricantes, distribuidores e assistência técnica.";
    $pagina_ativa = 'fornecedores';

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
                            <i class="fa-solid fa-truck-medical me-2" style="color: #2196f3;"></i> Dados da Entidade
                        </h2>
                    </div>
                    <hr class="mb-4">

                    <form action="" method="POST">

                        <h5 class="fw-bold mb-3" style="color: #1976d2;">1. Identificação da Empresa</h5>
                        <div class="row bg-light rounded-4 p-3 mb-4 mx-0 shadow-sm border border-light">
                            <div class="col-md-12 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="nome_empresa">Nome da Empresa / Entidade *</label>
                                    <input type="text" id="nome_empresa" name="nome_empresa" placeholder="Ex: Dräger Portugal, Lda" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 mb-md-0">
                                <div class="custom-input-group mb-0">
                                    <label for="nif">NIF (Número de Identificação Fiscal) *</label>
                                    <input type="text" id="nif" name="nif" placeholder="Ex: 501234567" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="custom-input-group mb-0">
                                    <label for="tipo_fornecedor">Tipo de Fornecedor *</label>
                                    <select id="tipo_fornecedor" name="tipo_fornecedor" required>
                                        <option value="">Selecione o tipo principal...</option>
                                        <option value="fabricante">Fabricante</option>
                                        <option value="distribuidor">Distribuidor / Fornecedor Comercial</option>
                                        <option value="assistencia">Empresa de Assistência Técnica</option>
                                        <option value="consumiveis">Fornecedor de Consumíveis ou Acessórios</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <h5 class="fw-bold mb-3" style="color: #1976d2;">2. Contactos e Localização</h5>
                        <div class="row bg-light rounded-4 p-3 mb-4 mx-0 shadow-sm border border-light">
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="contacto_telefone">Contacto Telefónico Geral *</label>
                                    <input type="tel" id="contacto_telefone" name="contacto_telefone" placeholder="Ex: +351 210 123 456" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="email_geral">Email Geral *</label>
                                    <input type="email" id="email_geral" name="email_geral" placeholder="Ex: geral@empresa.pt" required>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="custom-input-group mb-0">
                                    <label for="morada">Morada (Sede / Escritório)</label>
                                    <input type="text" id="morada" name="morada" placeholder="Ex: Rua da Indústria, nº 45, 1000-123 Lisboa">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="custom-input-group mb-0">
                                    <label for="website">Website Oficial</label>
                                    <input type="url" id="website" name="website" placeholder="Ex: https://www.empresa.pt">
                                </div>
                            </div>
                        </div>

                        <h5 class="fw-bold mb-3" style="color: #1976d2;">3. Pessoa de Contacto</h5>
                        <div class="row bg-light rounded-4 p-3 mb-4 mx-0 shadow-sm border border-light">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <div class="custom-input-group mb-0">
                                    <label for="pessoa_contacto">Nome do Comercial / Técnico *</label>
                                    <input type="text" id="pessoa_contacto" name="pessoa_contacto" placeholder="Ex: Rui Santos" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="custom-input-group mb-0">
                                    <label for="telefone_contacto">Telefone Direto / Telemóvel *</label>
                                    <input type="tel" id="telefone_contacto" name="telefone_contacto" placeholder="Ex: 912 345 678" required>
                                </div>
                            </div>
                        </div>

                        <h5 class="fw-bold mb-3" style="color: #1976d2;">4. Observações</h5>
                        <div class="bg-light rounded-4 p-3 border-start border-4 border-info shadow-sm mb-4">
                            <div class="custom-input-group mb-0">
                                <label for="observacoes"><i class="fa-solid fa-circle-info me-1"></i> Notas Adicionais</label>
                                <textarea id="observacoes" name="observacoes" rows="3" placeholder="Indique informações relevantes (Ex: Horário de atendimento, tempo médio de resposta para reparações, condições de pagamento, etc.)"></textarea>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end gap-3 mt-4 border-top pt-4">
                            <a href="/Projeto SIBDAS/private/views/fornecedores/fornecedores.php" class="btn btn-outline-secondary fw-bold px-4 rounded-pill shadow-sm d-flex align-items-center">
                                <i class="fa-solid fa-xmark me-2"></i> Cancelar
                            </a>
                            <button type="submit" class="btn btn-primary fw-bold px-4 rounded-pill shadow-sm d-flex align-items-center" style="background-color: #2196f3; border-color: #2196f3;">
                                <i class="fa-solid fa-building-circle-check me-2"></i> Salvar Fornecedor
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </section>
    </main>
</div>

<?php include '../../includes/footer.php'; ?>