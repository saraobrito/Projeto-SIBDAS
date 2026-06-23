<?php
    session_start();
    require_once __DIR__ . '/../../includes/auth_check.php';
    require_once __DIR__ . '/../../../config/db.php';
    
    $page_title = "Equipamentos";
    $titulo = "Gestão de Equipamentos";
    $subtitulo = "Monitorização dos equipamentos.";
    $pagina_ativa = 'equipamentos';

// ── Pesquisa e filtros ──────────────────────────────────────
$pesquisa   = trim($_GET['q']           ?? '');
$filtro_estado      = $_GET['estado']       ?? '';
$filtro_criticidade = $_GET['criticidade']  ?? '';
$filtro_localizacao = $_GET['localizacao']  ?? '';
 
$where  = ['1=1'];
$params = [];
 
if ($pesquisa !== '') {
    $where[]  = '(e.codigo_inventario LIKE ? OR e.designacao LIKE ? OR e.marca LIKE ?)';
    $params[] = "%$pesquisa%";
    $params[] = "%$pesquisa%";
    $params[] = "%$pesquisa%";
}
if ($filtro_estado !== '') {
    $where[]  = 'e.estado = ?';
    $params[] = $filtro_estado;
}
if ($filtro_criticidade !== '') {
    $where[]  = 'e.criticidade = ?';
    $params[] = $filtro_criticidade;
}
if ($filtro_localizacao !== '') {
    $where[]  = 'e.id_localizacao = ?';
    $params[] = $filtro_localizacao;
}
 
$whereSQL = implode(' AND ', $where);
 
// ── Paginação ───────────────────────────────────────────────
$por_pagina   = 10;
$pagina_atual = max(1, (int)($_GET['pagina'] ?? 1));
$offset       = ($pagina_atual - 1) * $por_pagina;
 
$stmtTotal = $pdo->prepare("SELECT COUNT(*) FROM equipamentos e WHERE $whereSQL");
$stmtTotal->execute($params);
$total_registos  = (int)$stmtTotal->fetchColumn();
$total_paginas   = (int)ceil($total_registos / $por_pagina);
 
// ── Query principal ─────────────────────────────────────────
$sql = "
    SELECT e.id, e.codigo_inventario, e.designacao, e.marca, e.modelo,
           e.estado, e.criticidade,
           c.nome AS categoria,
           l.servico, l.sala
    FROM equipamentos e
    JOIN categorias   c ON c.id = e.id_categoria
    JOIN localizacoes l ON l.id = e.id_localizacao
    WHERE $whereSQL
    ORDER BY e.codigo_inventario ASC
    LIMIT $por_pagina OFFSET $offset
";
$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$equipamentos = $stmt->fetchAll();
 
// ── Dados para os filtros ───────────────────────────────────
$localizacoes = $pdo->query('SELECT id, servico, sala FROM localizacoes ORDER BY servico')->fetchAll();
 
include '../../includes/header.php';

?>

<body style="background-color: #f8fbff;">

<?php include '../../includes/sidebar.php'; ?>

<!-- Conteúdo Principal e Navbar-->
<main class="main-content w-100" style="padding: 0; min-height: 100vh;">
    <?php include '../../includes/page_header.php'; ?>
 
    <section class="seccao-tabela" style="padding: 30px;">
        <?php include '../../includes/alerts.php'; ?>
 
        <!-- Barra pesquisa + botão novo -->
        <form method="GET" action="">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-3">
            <div class="d-flex align-items-center gap-2 flex-grow-1" style="max-width: 600px;">
                <div class="position-relative flex-grow-1">
                    <i class="fa-solid fa-magnifying-glass position-absolute text-muted" style="left:15px;top:50%;transform:translateY(-50%);"></i>
                    <input type="text" name="q" class="form-control shadow-sm" value="<?= htmlspecialchars($pesquisa) ?>"
                           placeholder="Pesquisar por Código, Nome ou Marca..." style="padding-left:40px;border-radius:10px;height:42px;">
                </div>
                <button class="btn btn-outline-primary shadow-sm fw-bold text-nowrap d-flex align-items-center"
                        type="button" data-bs-toggle="collapse" data-bs-target="#painelFiltros"
                        style="border-radius:10px;height:42px;">
                    <i class="fa-solid fa-sliders me-2"></i>Filtros
                </button>
            </div>
            <a href="/Projeto SIBDAS/private/views/equipamentos/novo.php"
               class="btn shadow-sm text-white text-nowrap fw-bold d-flex align-items-center"
               style="background-color:#2196f3;border-radius:10px;padding:0 20px;height:42px;">
                <i class="fa-solid fa-plus me-2"></i>Novo Equipamento
            </a>
        </div>
 
        <!-- Painel de filtros -->
        <div class="collapse mb-4 <?= ($filtro_estado || $filtro_criticidade || $filtro_localizacao) ? 'show' : '' ?>" id="painelFiltros">
            <div class="card card-body border-0 shadow-sm rounded-4 bg-white">
                <h6 class="text-primary fw-bold mb-3"><i class="fa-solid fa-filter me-2"></i>Filtros Específicos</h6>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label class="form-label fw-bold text-secondary small mb-1">Serviço / Localização</label>
                        <select name="localizacao" class="form-select border-1 shadow-sm rounded-3 bg-light">
                            <option value="">Todos os Serviços</option>
                            <?php foreach ($localizacoes as $loc): ?>
                                <option value="<?= $loc['id'] ?>" <?= $filtro_localizacao == $loc['id'] ? 'selected' : '' ?>>
                                    <?= htmlspecialchars($loc['servico'] . ' — ' . $loc['sala']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold text-secondary small mb-1">Estado</label>
                        <select name="estado" class="form-select border-1 shadow-sm rounded-3 bg-light">
                            <option value="">Todos os Estados</option>
                            <option value="ativo"          <?= $filtro_estado === 'ativo'          ? 'selected' : '' ?>>Ativo</option>
                            <option value="em_manutencao"  <?= $filtro_estado === 'em_manutencao'  ? 'selected' : '' ?>>Em Manutenção</option>
                            <option value="em_calibracao"  <?= $filtro_estado === 'em_calibracao'  ? 'selected' : '' ?>>Em Calibração</option>
                            <option value="em_quarentena"  <?= $filtro_estado === 'em_quarentena'  ? 'selected' : '' ?>>Em Quarentena</option>
                            <option value="inativo"        <?= $filtro_estado === 'inativo'        ? 'selected' : '' ?>>Inativo</option>
                            <option value="abatido"        <?= $filtro_estado === 'abatido'        ? 'selected' : '' ?>>Abatido</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold text-secondary small mb-1">Criticidade</label>
                        <select name="criticidade" class="form-select border-1 shadow-sm rounded-3 bg-light">
                            <option value="">Todas</option>
                            <option value="suporte_de_vida" <?= $filtro_criticidade === 'suporte_de_vida' ? 'selected' : '' ?>>Suporte de Vida</option>
                            <option value="alta"            <?= $filtro_criticidade === 'alta'            ? 'selected' : '' ?>>Alta</option>
                            <option value="media"           <?= $filtro_criticidade === 'media'           ? 'selected' : '' ?>>Média</option>
                            <option value="baixa"           <?= $filtro_criticidade === 'baixa'           ? 'selected' : '' ?>>Baixa</option>
                        </select>
                    </div>
                    <div class="col-12 d-flex justify-content-end gap-2 mt-2">
                        <a href="equipamentos.php" class="btn btn-sm btn-light text-muted fw-bold border rounded-3 px-3 py-2">Limpar</a>
                        <button type="submit" class="btn btn-sm btn-primary fw-bold rounded-3 px-3 py-2">Aplicar Filtros</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
 
        <!-- Tabela -->
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead style="background-color:#e3f2fd;">
                        <tr>
                            <th class="ps-4">Código</th>
                            <th>Designação</th>
                            <th>Marca / Modelo</th>
                            <th>Categoria</th>
                            <th>Localização</th>
                            <th>Estado</th>
                            <th>Criticidade</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if (empty($equipamentos)): ?>
                        <tr><td colspan="8" class="text-center text-muted py-5">
                            <i class="fa-solid fa-box-open fa-2x mb-2 d-block"></i>Nenhum equipamento encontrado.
                        </td></tr>
                    <?php else: ?>
                        <?php foreach ($equipamentos as $eq): ?>
                        <?php
                            // Cores de estado
                            $badgeEstado = match($eq['estado']) {
                                'ativo'          => 'success',
                                'em_manutencao'  => 'warning',
                                'em_calibracao'  => 'info',
                                'em_quarentena'  => 'secondary',
                                'inativo'        => 'danger',
                                'abatido'        => 'dark',
                                default          => 'secondary'
                            };
                            $labelEstado = match($eq['estado']) {
                                'ativo'          => 'Ativo',
                                'em_manutencao'  => 'Em Manutenção',
                                'em_calibracao'  => 'Em Calibração',
                                'em_quarentena'  => 'Em Quarentena',
                                'inativo'        => 'Inativo',
                                'abatido'        => 'Abatido',
                                default          => $eq['estado']
                            };
                            $badgeCrit = match($eq['criticidade']) {
                                'suporte_de_vida' => 'danger',
                                'alta'            => 'warning',
                                'media'           => 'info',
                                'baixa'           => 'secondary',
                                default           => 'secondary'
                            };
                            $labelCrit = match($eq['criticidade']) {
                                'suporte_de_vida' => 'Suporte de Vida',
                                'alta'            => 'Alta',
                                'media'           => 'Média',
                                'baixa'           => 'Baixa',
                                default           => $eq['criticidade']
                            };
                        ?>
                        <tr>
                            <td class="ps-4 fw-bold text-primary"><?= htmlspecialchars($eq['codigo_inventario']) ?></td>
                            <td><?= htmlspecialchars($eq['designacao']) ?></td>
                            <td class="text-muted"><?= htmlspecialchars($eq['marca'] . ' ' . $eq['modelo']) ?></td>
                            <td><?= htmlspecialchars($eq['categoria']) ?></td>
                            <td class="text-muted small"><?= htmlspecialchars($eq['servico']) ?><br><?= htmlspecialchars($eq['sala']) ?></td>
                            <td><span class="badge bg-<?= $badgeEstado ?>"><?= $labelEstado ?></span></td>
                            <td><span class="badge bg-<?= $badgeCrit ?>"><?= $labelCrit ?></span></td>
                            <td class="text-center">
                                <a href="detalhes.php?id=<?= $eq['id'] ?>" class="btn btn-sm btn-outline-primary me-1" title="Ver"><i class="fa-solid fa-eye"></i></a>
                                <a href="editar.php?id=<?= $eq['id'] ?>"   class="btn btn-sm btn-outline-secondary me-1" title="Editar"><i class="fa-solid fa-pen"></i></a>
                                <a href="apagar.php?id=<?= $eq['id'] ?>"   class="btn btn-sm btn-outline-danger" title="Apagar"
                                   onclick="return confirm('Tem a certeza que pretende apagar este equipamento?')">
                                   <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
 
        <!-- Paginação -->
        <?php if ($total_paginas > 1): ?>
        <nav class="mt-4">
            <ul class="pagination justify-content-center">
                <?php for ($p = 1; $p <= $total_paginas; $p++): ?>
                    <li class="page-item <?= $p === $pagina_atual ? 'active' : '' ?>">
                        <a class="page-link" href="?q=<?= urlencode($pesquisa) ?>&estado=<?= urlencode($filtro_estado) ?>&criticidade=<?= urlencode($filtro_criticidade) ?>&localizacao=<?= urlencode($filtro_localizacao) ?>&pagina=<?= $p ?>"><?= $p ?></a>
                    </li>
                <?php endfor; ?>
            </ul>
        </nav>
        <?php endif; ?>
 
        <p class="text-muted small mt-2">Total: <strong><?= $total_registos ?></strong> equipamentos encontrados.</p>
 
    </section>
</main>