<?php
session_start();
require_once __DIR__ . '/../../includes/auth_check.php';
require_once __DIR__ . '/../../../config/db.php';

// Processar POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $campos = [
        'codigo_inventario' => trim($_POST['codigo_inventario'] ?? ''),
        'designacao'        => trim($_POST['designacao']        ?? ''),
        'marca'             => trim($_POST['marca']             ?? ''),
        'modelo'            => trim($_POST['modelo']            ?? ''),
        'numero_serie'      => trim($_POST['numero_serie']      ?? ''),
        'fabricante'        => trim($_POST['fabricante']        ?? ''),
        'id_categoria'      => (int)($_POST['id_categoria']     ?? 0),
        'criticidade'       => $_POST['criticidade']            ?? '',
        'estado'            => $_POST['estado']                 ?? 'ativo',
        'id_localizacao'    => (int)($_POST['id_localizacao']   ?? 0),
        'data_aquisicao'    => $_POST['data_aquisicao']         ?? '',
        'ano_fabrico'       => (int)($_POST['ano_fabrico']      ?? 0),
        'custo_aquisicao'   => (float)($_POST['custo_aquisicao']?? 0),
        'tipo_entrada'      => $_POST['tipo_entrada']           ?? 'compra',
        'observacoes'       => trim($_POST['observacoes']       ?? ''),
    ];

    try {
        $sql = "INSERT INTO equipamentos
                    (codigo_inventario, designacao, marca, modelo, numero_serie, fabricante,
                     id_categoria, criticidade, estado, id_localizacao,
                     data_aquisicao, ano_fabrico, custo_aquisicao, tipo_entrada, observacoes)
                VALUES
                    (:codigo_inventario, :designacao, :marca, :modelo, :numero_serie, :fabricante,
                     :id_categoria, :criticidade, :estado, :id_localizacao,
                     :data_aquisicao, :ano_fabrico, :custo_aquisicao, :tipo_entrada, :observacoes)";

        $stmt = $pdo->prepare($sql);
        $stmt->execute($campos);

        $_SESSION['mensagem_alerta'] = 'Equipamento registado com sucesso!';
        $_SESSION['tipo_alerta']     = 'success';
        header('Location: equipamentos.php');
        exit();

    } catch (PDOException $e) {
        // Código 23000 = chave duplicada (código inventário ou nº série já existe)
        if ($e->getCode() === '23000') {
            $erro = 'Já existe um equipamento com esse Código de Inventário.';
        } else {
            $erro = 'Erro ao guardar: ' . $e->getMessage();
        }
    }
}

// Dados para os selects
$categorias   = $pdo->query('SELECT id, nome FROM categorias ORDER BY nome')->fetchAll();
$localizacoes = $pdo->query('SELECT id, servico, sala FROM localizacoes ORDER BY servico')->fetchAll();

$page_title   = 'Registar Equipamento';
$titulo       = 'Gestão de Equipamentos';
$subtitulo    = 'Introduza os detalhes técnicos e clínicos do novo dispositivo.';
$pagina_ativa = 'equipamentos';

include '../../includes/header.php';
?>

<body style="background-color: #f8fbff;">
<?php include '../../includes/sidebar.php'; ?>

<main class="main-content flex-grow-1" style="padding: 0; min-height: 100vh;">
    <?php include '../../includes/page_header.php'; ?>

    <section style="padding: 30px; display: flex; justify-content: center;">
        <div class="card w-100 shadow-sm rounded-4 border-0" style="max-width: 900px;">
            <div class="card-body p-4 p-md-5">

                <h2 class="mb-4 text-dark fw-bold">
                    <i class="fa-solid fa-laptop-medical me-2" style="color:#2196f3;"></i> Dados do Equipamento
                </h2>
                <hr class="mb-4">

                <?php if (!empty($erro)): ?>
                    <div class="alert alert-danger rounded-3 mb-4">
                        <i class="fa-solid fa-circle-exclamation me-2"></i><?= htmlspecialchars($erro) ?>
                    </div>
                <?php endif; ?>

                <form action="" method="POST">

                    <h5 class="fw-bold mb-3" style="color:#1976d2;">1. Identificação do Dispositivo</h5>
                    <div class="row bg-light rounded-4 p-3 mb-4 mx-0 shadow-sm border border-light">
                        <div class="col-md-6 mb-3">
                            <div class="custom-input-group mb-0">
                                <label for="codigo_inventario">Código Interno de Inventário *</label>
                                <input type="text" id="codigo_inventario" name="codigo_inventario"
                                       value="<?= htmlspecialchars($_POST['codigo_inventario'] ?? '') ?>"
                                       placeholder="Ex: MON.001.00" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="custom-input-group mb-0">
                                <label for="designacao">Designação do Equipamento *</label>
                                <input type="text" id="designacao" name="designacao"
                                       value="<?= htmlspecialchars($_POST['designacao'] ?? '') ?>"
                                       placeholder="Ex: Ventilador Pulmonar" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="custom-input-group mb-0">
                                <label for="marca">Marca *</label>
                                <input type="text" id="marca" name="marca"
                                       value="<?= htmlspecialchars($_POST['marca'] ?? '') ?>"
                                       placeholder="Ex: Dräger" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="custom-input-group mb-0">
                                <label for="modelo">Modelo *</label>
                                <input type="text" id="modelo" name="modelo"
                                       value="<?= htmlspecialchars($_POST['modelo'] ?? '') ?>"
                                       placeholder="Ex: Evita V500" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="custom-input-group mb-0">
                                <label for="numero_serie">Número de Série *</label>
                                <input type="text" id="numero_serie" name="numero_serie"
                                       value="<?= htmlspecialchars($_POST['numero_serie'] ?? '') ?>"
                                       placeholder="Insira o S/N do fabricante" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="custom-input-group mb-0">
                                <label for="fabricante">Fabricante *</label>
                                <input type="text" id="fabricante" name="fabricante"
                                       value="<?= htmlspecialchars($_POST['fabricante'] ?? '') ?>"
                                       placeholder="Ex: Dräger Medical" required>
                            </div>
                        </div>
                    </div>

                    <h5 class="fw-bold mb-3" style="color:#1976d2;">2. Classificação e Estado Clínico</h5>
                    <div class="row bg-light rounded-4 p-3 mb-4 mx-0 shadow-sm border border-light">
                        <div class="col-md-6 mb-3">
                            <div class="custom-input-group mb-0">
                                <label for="id_categoria">Categoria / Grupo *</label>
                                <select id="id_categoria" name="id_categoria" required>
                                    <option value="">Selecione uma categoria...</option>
                                    <?php foreach ($categorias as $cat): ?>
                                        <option value="<?= $cat['id'] ?>" <?= ($_POST['id_categoria'] ?? '') == $cat['id'] ? 'selected' : '' ?>>
                                            <?= htmlspecialchars($cat['nome']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="custom-input-group mb-0">
                                <label for="criticidade">Nível de Criticidade Clínica *</label>
                                <select id="criticidade" name="criticidade" required>
                                    <option value="">Selecione a criticidade...</option>
                                    <option value="suporte_de_vida" <?= ($_POST['criticidade'] ?? '') === 'suporte_de_vida' ? 'selected' : '' ?>>Suporte de Vida</option>
                                    <option value="alta"            <?= ($_POST['criticidade'] ?? '') === 'alta'            ? 'selected' : '' ?>>Alta</option>
                                    <option value="media"           <?= ($_POST['criticidade'] ?? '') === 'media'           ? 'selected' : '' ?>>Média</option>
                                    <option value="baixa"           <?= ($_POST['criticidade'] ?? '') === 'baixa'           ? 'selected' : '' ?>>Baixa</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="custom-input-group mb-0">
                                <label for="estado">Estado Atual do Equipamento *</label>
                                <select id="estado" name="estado" required>
                                    <option value="ativo"         <?= ($_POST['estado'] ?? '') === 'ativo'         ? 'selected' : '' ?>>Ativo</option>
                                    <option value="em_manutencao" <?= ($_POST['estado'] ?? '') === 'em_manutencao' ? 'selected' : '' ?>>Em Manutenção</option>
                                    <option value="em_calibracao" <?= ($_POST['estado'] ?? '') === 'em_calibracao' ? 'selected' : '' ?>>Em Calibração</option>
                                    <option value="em_quarentena" <?= ($_POST['estado'] ?? '') === 'em_quarentena' ? 'selected' : '' ?>>Em Quarentena</option>
                                    <option value="inativo"       <?= ($_POST['estado'] ?? '') === 'inativo'       ? 'selected' : '' ?>>Inativo</option>
                                    <option value="abatido"       <?= ($_POST['estado'] ?? '') === 'abatido'       ? 'selected' : '' ?>>Abatido</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="custom-input-group mb-0">
                                <label for="id_localizacao">Localização Atual (Serviço) *</label>
                                <select id="id_localizacao" name="id_localizacao" required>
                                    <option value="">Selecione o serviço hospitalar...</option>
                                    <?php foreach ($localizacoes as $loc): ?>
                                        <option value="<?= $loc['id'] ?>" <?= ($_POST['id_localizacao'] ?? '') == $loc['id'] ? 'selected' : '' ?>>
                                            <?= htmlspecialchars($loc['servico'] . ' — ' . $loc['sala']) ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <h5 class="fw-bold mb-3" style="color:#1976d2;">3. Detalhes de Aquisição e Observações</h5>
                    <div class="row bg-light rounded-4 p-3 mb-4 mx-0 shadow-sm border border-light">
                        <div class="col-md-6 mb-3">
                            <div class="custom-input-group mb-0">
                                <label for="data_aquisicao">Data de Aquisição *</label>
                                <input type="date" id="data_aquisicao" name="data_aquisicao"
                                       value="<?= htmlspecialchars($_POST['data_aquisicao'] ?? '') ?>" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="custom-input-group mb-0">
                                <label for="ano_fabrico">Ano de Fabrico *</label>
                                <input type="number" id="ano_fabrico" name="ano_fabrico"
                                       value="<?= htmlspecialchars($_POST['ano_fabrico'] ?? '') ?>"
                                       placeholder="Ex: 2024" min="1990" max="2030" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="custom-input-group mb-0">
                                <label for="custo_aquisicao">Custo de Aquisição (€) *</label>
                                <input type="number" id="custo_aquisicao" name="custo_aquisicao"
                                       value="<?= htmlspecialchars($_POST['custo_aquisicao'] ?? '') ?>"
                                       step="0.01" placeholder="Ex: 14500.00" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="custom-input-group mb-0">
                                <label for="tipo_entrada">Tipo de Entrada *</label>
                                <select id="tipo_entrada" name="tipo_entrada" required>
                                    <option value="compra"     <?= ($_POST['tipo_entrada'] ?? '') === 'compra'     ? 'selected' : '' ?>>Compra</option>
                                    <option value="doacao"     <?= ($_POST['tipo_entrada'] ?? '') === 'doacao'     ? 'selected' : '' ?>>Doação</option>
                                    <option value="aluguer"    <?= ($_POST['tipo_entrada'] ?? '') === 'aluguer'    ? 'selected' : '' ?>>Aluguer</option>
                                    <option value="emprestimo" <?= ($_POST['tipo_entrada'] ?? '') === 'emprestimo' ? 'selected' : '' ?>>Empréstimo</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="custom-input-group mb-0">
                                <label for="observacoes">Observações / Notas Técnicas</label>
                                <textarea id="observacoes" name="observacoes" rows="2"
                                          placeholder="Insira notas adicionais..."><?= htmlspecialchars($_POST['observacoes'] ?? '') ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-3 mt-4 border-top pt-4">
                        <a href="equipamentos.php" class="btn btn-outline-secondary fw-bold px-4 rounded-pill shadow-sm d-flex align-items-center">
                            <i class="fa-solid fa-xmark me-2"></i> Cancelar
                        </a>
                        <button type="submit" class="btn btn-primary fw-bold px-4 rounded-pill shadow-sm d-flex align-items-center"
                                style="background-color:#2196f3;border-color:#2196f3;">
                            <i class="fa-solid fa-plus me-2"></i> Salvar Equipamento
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </section>
</main>

<?php include '../../includes/footer.php'; ?>