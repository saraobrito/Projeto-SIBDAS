<?php
session_start();
require_once __DIR__ . '/../../includes/auth_check.php';
require_once __DIR__ . '/../../../config/db.php';

$page_title   = 'Dashboard';
$titulo       = 'Gestão de Inventário';
$subtitulo    = 'Ficha técnica detalhada dos dispositivo médico e dos seus atributos.';
$pagina_ativa = 'dashboard';

// ── Contadores cards ────────────────────────────────────────
$total         = $pdo->query('SELECT COUNT(*) FROM equipamentos')->fetchColumn();
$ativos        = $pdo->query("SELECT COUNT(*) FROM equipamentos WHERE estado = 'ativo'")->fetchColumn();
$em_manutencao = $pdo->query("SELECT COUNT(*) FROM equipamentos WHERE estado = 'em_manutencao'")->fetchColumn();
$inativos      = $pdo->query("SELECT COUNT(*) FROM equipamentos WHERE estado IN ('inativo','abatido')")->fetchColumn();

// ── Ordenação tabela ────────────────────────────────────────
$ordem = $_GET['ordem'] ?? 'recentes';
$orderSQL = match($ordem) {
    'garantia'    => "ORDER BY (SELECT MIN(data_fim) FROM garantias_contratos g WHERE g.id_equipamento = e.id AND g.data_fim >= CURDATE()) ASC",
    'manutencao'  => "ORDER BY FIELD(e.estado,'em_manutencao','em_calibracao','em_quarentena','ativo','inativo','abatido')",
    'criticidade' => "ORDER BY FIELD(e.criticidade,'suporte_de_vida','alta','media','baixa')",
    default       => "ORDER BY e.criado_em DESC",
};

$equipamentos = $pdo->query("
    SELECT e.id, e.codigo_inventario, e.designacao, e.marca, e.modelo,
           e.estado, e.criticidade, l.servico,
           (SELECT MIN(data_fim) FROM garantias_contratos g
            WHERE g.id_equipamento = e.id AND g.data_fim >= CURDATE()) AS proxima_garantia
    FROM equipamentos e
    JOIN localizacoes l ON l.id = e.id_localizacao
    $orderSQL
    LIMIT 10
")->fetchAll();

// ── Dados gráficos ──────────────────────────────────────────
$por_estado      = $pdo->query("SELECT estado, COUNT(*) AS total FROM equipamentos GROUP BY estado ORDER BY total DESC")->fetchAll();
$por_criticidade = $pdo->query("SELECT criticidade, COUNT(*) AS total FROM equipamentos GROUP BY criticidade ORDER BY FIELD(criticidade,'suporte_de_vida','alta','media','baixa')")->fetchAll();
$por_servico     = $pdo->query("SELECT l.servico, COUNT(e.id) AS total FROM localizacoes l LEFT JOIN equipamentos e ON e.id_localizacao = l.id GROUP BY l.id, l.servico ORDER BY total DESC LIMIT 5")->fetchAll();

include '../../includes/header.php';
?>

<body style="background-color: #f8fbff;">

    <?php include '../../includes/sidebar.php'; ?>

    <main class="main-content w-100" style="padding: 0; min-height: 100vh;">
        <?php include '../../includes/page_header.php'; ?>

        <div style="padding: 0 30px 30px 30px;">

            <!-- Cards de resumo -->
            <div class="row g-3 mb-4">
                <div class="col-6 col-lg-3">
                    <div class="card border-0 shadow-sm rounded-4 p-3 bg-white">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <h6 class="text-muted fw-bold text-uppercase mb-0" style="font-size: 0.75rem;">Total Equipamentos</h6>
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;">
                                <i class="fa-solid fa-laptop-medical fs-6"></i>
                            </div>
                        </div>
                        <h2 class="text-primary fw-bold mb-0 fs-3"><?= number_format($total) ?></h2>
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
                        <h2 class="fw-bold mb-0 fs-3" style="color: #2e7d32;"><?= number_format($ativos) ?></h2>
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
                        <h2 class="fw-bold mb-0 fs-3" style="color: #f57c00;"><?= number_format($em_manutencao) ?></h2>
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
                        <h2 class="fw-bold mb-0 fs-3" style="color: #c62828;"><?= number_format($inativos) ?></h2>
                    </div>
                </div>
            </div>

            <!-- Tabela full width -->
            <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-3">
                <h2 style="font-size: 1.5rem; color: #1976d2; margin:0; font-weight: bold;">Registo de Equipamentos</h2>
                <form method="GET" action="" class="d-flex align-items-center gap-2">
                    <label class="text-muted fw-bold small text-nowrap mb-0"><i class="fa-solid fa-sort me-1"></i>Ordenar por:</label>
                    <select name="ordem" onchange="this.form.submit()"
                            class="form-select form-select-sm shadow-sm border-1 rounded-3"
                            style="width: auto; cursor: pointer; color: #1976d2; font-weight: bold;">
                        <option value="recentes"    <?= $ordem === 'recentes'    ? 'selected' : '' ?>>Adicionados Recentemente</option>
                        <option value="garantia"    <?= $ordem === 'garantia'    ? 'selected' : '' ?>>Garantia a Expirar (&lt; 30 dias)</option>
                        <option value="manutencao"  <?= $ordem === 'manutencao'  ? 'selected' : '' ?>>Urgência de Manutenção</option>
                        <option value="criticidade" <?= $ordem === 'criticidade' ? 'selected' : '' ?>>Maior Criticidade Clínica</option>
                    </select>
                </form>
            </div>

            <div class="card border-0 shadow-sm rounded-4 p-0 overflow-hidden w-100 mb-4">
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
                        <?php if (empty($equipamentos)): ?>
                            <tr><td colspan="7" class="text-center text-muted py-5">
                                <i class="fa-solid fa-box-open fa-2x mb-2 d-block"></i>Sem equipamentos registados.
                            </td></tr>
                        <?php else: ?>
                            <?php foreach ($equipamentos as $eq):
                                $urgente = false;
                                $diasGarantia = null;
                                if ($eq['proxima_garantia']) {
                                    $diasGarantia = (int)((strtotime($eq['proxima_garantia']) - time()) / 86400);
                                    $urgente = $diasGarantia <= 30;
                                }
                                $badgeEstado = match($eq['estado']) {
                                    'ativo'         => 'b-ativo',
                                    'em_manutencao' => 'b-manutencao',
                                    default         => 'b-inativo'
                                };
                                $labelEstado = match($eq['estado']) {
                                    'ativo'         => 'Ativo',
                                    'em_manutencao' => 'Em Manutenção',
                                    'em_calibracao' => 'Em Calibração',
                                    'em_quarentena' => 'Em Quarentena',
                                    'inativo'       => 'Inativo',
                                    'abatido'       => 'Abatido',
                                    default         => $eq['estado']
                                };
                                $badgeCrit = match($eq['criticidade']) {
                                    'suporte_de_vida' => 'crit-suporte',
                                    'alta'            => 'crit-alta',
                                    'media'           => 'crit-media',
                                    default           => 'crit-baixa'
                                };
                                $labelCrit = match($eq['criticidade']) {
                                    'suporte_de_vida' => 'Suporte Vida',
                                    'alta'            => 'Alta',
                                    'media'           => 'Média',
                                    default           => 'Baixa'
                                };
                            ?>
                            <tr <?= $urgente ? 'style="background-color: #fff9e6;"' : '' ?>>
                                <td class="ps-4 py-3"><span class="codigo-inv"><?= htmlspecialchars($eq['codigo_inventario']) ?></span></td>
                                <td>
                                    <strong><?= htmlspecialchars($eq['designacao']) ?></strong>
                                    <?php if ($urgente): ?>
                                        <span class="badge bg-warning text-dark ms-2" style="font-size: 0.75rem;">
                                            <i class="fa-solid fa-triangle-exclamation me-1"></i>Garantia termina em <?= $diasGarantia ?> dias
                                        </span>
                                    <?php endif; ?>
                                </td>
                                <td class="text-muted"><?= htmlspecialchars($eq['marca'] . ' ' . $eq['modelo']) ?></td>
                                <td class="text-muted"><?= htmlspecialchars($eq['servico']) ?></td>
                                <td><span class="badge <?= $badgeCrit ?>"><?= $labelCrit ?></span></td>
                                <td><span class="badge <?= $badgeEstado ?>"><?= $labelEstado ?></span></td>
                                <td class="text-center">
                                    <a href="/Projeto SIBDAS/private/views/equipamentos/detalhes.php?id=<?= $eq['id'] ?>"
                                       class="btn btn-sm <?= $urgente ? 'btn-warning text-dark' : 'btn-outline-primary' ?> rounded-3 border-0 shadow-sm"
                                       title="Ver Detalhes">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <?php include '../../includes/pagination.php'; ?>

            <!-- 3 gráficos em linha, abaixo da tabela -->
            <div class="row g-3 mt-2">

                <!-- Gráfico 1: Estado (doughnut) -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-4 p-4">
                        <h6 class="fw-bold text-muted mb-3" style="font-size: 0.82rem;">
                            <i class="fa-solid fa-circle-half-stroke me-2 text-primary"></i>Estado do Parque
                        </h6>
                        <div style="height: 160px; position: relative;">
                            <canvas id="graficoEstado" role="img" aria-label="Equipamentos por estado"></canvas>
                        </div>
                        <div class="mt-3" style="font-size: 0.75rem;">
                            <?php
                            $mapaEstado = [
                                'ativo'         => ['#43a047', 'Ativo'],
                                'em_manutencao' => ['#fb8c00', 'Em Manutenção'],
                                'em_calibracao' => ['#039be5', 'Em Calibração'],
                                'em_quarentena' => ['#8e24aa', 'Em Quarentena'],
                                'inativo'       => ['#e53935', 'Inativo'],
                                'abatido'       => ['#546e7a', 'Abatido'],
                            ];
                            foreach ($por_estado as $row):
                                [$cor, $label] = $mapaEstado[$row['estado']] ?? ['#aaa', $row['estado']];
                            ?>
                            <div class="d-flex justify-content-between mb-1">
                                <span><span style="display:inline-block;width:8px;height:8px;border-radius:2px;background:<?= $cor ?>;margin-right:6px;"></span><?= $label ?></span>
                                <strong><?= $row['total'] ?></strong>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Gráfico 2: Criticidade (doughnut) -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-4 p-4">
                        <h6 class="fw-bold text-muted mb-3" style="font-size: 0.82rem;">
                            <i class="fa-solid fa-triangle-exclamation me-2 text-danger"></i>Criticidade Clínica
                        </h6>
                        <div style="height: 160px; position: relative;">
                            <canvas id="graficoCriticidade" role="img" aria-label="Equipamentos por criticidade"></canvas>
                        </div>
                        <div class="mt-3" style="font-size: 0.75rem;">
                            <?php
                            $mapaCrit = [
                                'suporte_de_vida' => ['#d32f2f', 'Suporte de Vida'],
                                'alta'            => ['#ff8f00', 'Alta'],
                                'media'           => ['#8e24aa', 'Média'],
                                'baixa'           => ['#039be5', 'Baixa'],
                            ];
                            foreach ($por_criticidade as $row):
                                [$cor, $label] = $mapaCrit[$row['criticidade']] ?? ['#aaa', $row['criticidade']];
                            ?>
                            <div class="d-flex justify-content-between mb-1">
                                <span><span style="display:inline-block;width:8px;height:8px;border-radius:2px;background:<?= $cor ?>;margin-right:6px;"></span><?= $label ?></span>
                                <strong><?= $row['total'] ?></strong>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Gráfico 3: Por serviço (barras horizontais) -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-4 p-4">
                        <h6 class="fw-bold text-muted mb-3" style="font-size: 0.82rem;">
                            <i class="fa-solid fa-hospital me-2 text-primary"></i>Equipamentos por Serviço
                        </h6>
                        <div style="height: 160px; position: relative;">
                            <canvas id="graficoServico" role="img" aria-label="Equipamentos por serviço hospitalar"></canvas>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
</div>

<script src="/Projeto SIBDAS/private/includes/bootstrap/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
<script>
// Gráfico 1 — Estado
new Chart(document.getElementById('graficoEstado'), {
    type: 'doughnut',
    data: {
        labels: <?= json_encode(array_map(fn($r) => ($mapaEstado[$r['estado']][1] ?? $r['estado']), $por_estado)) ?>,
        datasets: [{ data: <?= json_encode(array_column($por_estado, 'total')) ?>,
            backgroundColor: <?= json_encode(array_map(fn($r) => ($mapaEstado[$r['estado']][0] ?? '#aaa'), $por_estado)) ?>,
            borderWidth: 2 }]
    },
    options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } } }
});

// Gráfico 2 — Criticidade
new Chart(document.getElementById('graficoCriticidade'), {
    type: 'doughnut',
    data: {
        labels: <?= json_encode(array_map(fn($r) => ($mapaCrit[$r['criticidade']][1] ?? $r['criticidade']), $por_criticidade)) ?>,
        datasets: [{ data: <?= json_encode(array_column($por_criticidade, 'total')) ?>,
            backgroundColor: <?= json_encode(array_map(fn($r) => ($mapaCrit[$r['criticidade']][0] ?? '#aaa'), $por_criticidade)) ?>,
            borderWidth: 2 }]
    },
    options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } } }
});

// Gráfico 3 — Por serviço (barras horizontais)
new Chart(document.getElementById('graficoServico'), {
    type: 'bar',
    data: {
        labels: <?= json_encode(array_column($por_servico, 'servico')) ?>,
        datasets: [{ label: 'Equipamentos', data: <?= json_encode(array_column($por_servico, 'total')) ?>,
            backgroundColor: '#2196f3', borderRadius: 4 }]
    },
    options: {
        indexAxis: 'y',
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } },
        scales: { x: { beginAtZero: true, ticks: { stepSize: 1 } }, y: { ticks: { font: { size: 10 } } } }
    }
});
</script>

<?php include '../../includes/footer.php'; ?>