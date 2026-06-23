<?php
    $pagina_atual = isset($pagina_atual) ? (int)$pagina_atual : 1;
    $total_paginas = isset($total_paginas) ? (int)$total_paginas : 3;
?>

<div class="paginacao" style="text-align: right; margin-top: 25px;">
    
    <button class="pag-num" 
        <?= ($pagina_atual <= 1) ? 'disabled style="cursor: not-allowed; opacity: 0.7;"' : 'onclick="window.location.href=\'?page=' . ($pagina_atual - 1) . '\'"' ?>>
        Anterior
    </button>

    <?php for ($i = 1; $i <= $total_paginas; $i++): ?>
        <button class="pag-num <?= ($i == $pagina_atual) ? 'ativo' : '' ?>" 
                onclick="window.location.href='?page=<?= $i ?>'">
            <?= $i ?>
        </button>
    <?php endfor; ?>

    <button class="pag-num" 
        <?= ($pagina_atual >= $total_paginas) ? 'disabled style="cursor: not-allowed; opacity: 0.7;"' : 'onclick="window.location.href=\'?page=' . ($pagina_atual + 1) . '\'"' ?>>
        Seguinte
    </button>

</div>