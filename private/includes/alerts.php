<?php
// O session_start() já foi chamado no topo da página principal!

if (isset($_SESSION['mensagem_alerta'])) {
    
    $mensagem = $_SESSION['mensagem_alerta'];
    $tipo = isset($_SESSION['tipo_alerta']) ? $_SESSION['tipo_alerta'] : 'info'; 
    
    $icone = 'fa-circle-info';
    if ($tipo == 'success') $icone = 'fa-circle-check';
    if ($tipo == 'danger')  $icone = 'fa-circle-xmark';
    if ($tipo == 'warning') $icone = 'fa-triangle-exclamation';

    // O alerta agora é flutuante (position: fixed) no canto superior direito!
    ?>
    <div id="alerta-sistema" class="alert alert-<?= $tipo ?> alert-dismissible fade show shadow-lg border-0 rounded-4 d-flex align-items-center" role="alert" 
         style="position: fixed; top: 25px; right: 30px; z-index: 9999; padding: 15px 20px; min-width: 320px; transition: opacity 0.5s ease;">
        
        <i class="fa-solid <?= $icone ?> fs-4 me-3"></i>
        <div class="fw-bold pe-4">
            <?= $mensagem ?>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="top: 50%; transform: translateY(-50%); right: 10px;"></button>
    </div>

    <script>
        setTimeout(function() {
            let alerta = document.getElementById('alerta-sistema');
            if (alerta) {
                alerta.style.opacity = '0'; 
                setTimeout(function() {
                    alerta.remove();
                }, 500);
            }
        }, 1500); 
    </script>
    <?php

    unset($_SESSION['mensagem_alerta']);
    unset($_SESSION['tipo_alerta']);
}
?>