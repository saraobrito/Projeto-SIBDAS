<?php
    $page_title = "Apagar Localização";
    $titulo = "Gestão de Localizações";
    $subtitulo = "Remoção de registos de uma localização";
    $pagina_ativa = 'localizacoes';

    include '../../includes/header.php';

?>

<body style="background-color: #f8fbff;">

    <?php include '../../includes/sidebar.php'; ?>

    <main class="main-content flex-grow-1" style="padding: 0; min-height: 100vh;">
        
        <?php 
            include '../../includes/page_header.php'; 
        ?>

        <section class="p-2">
            <div class="d-flex justify-content-center mt-2">
                <div class="card w-100 shadow-sm rounded text-center p-4 border-0" style="max-width: 600px; background-color: #fff;">

                    <div class="text-warning display-4 mb-2">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>

                    <p class="mb-2 fs-5 text-muted">Tem a certeza que deseja eliminar esta localização?</p>
                    <h3 class="mb-3 text-dark"><strong>Cuidados Intensivos - Box 4</strong></h3>
                    
                    <div class="mb-3 p-3 bg-light rounded text-start mx-auto" style="max-width: 400px;">
                        <span class="d-block mb-2 text-secondary">
                            <i class="fa-solid fa-building me-2"></i>Edifício: <strong>Edifício Principal</strong>
                        </span> 
                        <span class="d-block mb-2 text-secondary">
                            <i class="fa-solid fa-layer-group me-2"></i>Piso: <strong>Piso 1</strong>
                        </span> 
                        <span class="d-block text-secondary">
                            <i class="fa-solid fa-user-doctor me-2"></i>Responsável: <strong>Dr. António Silva</strong>
                        </span> 
                    </div>
                    
                    <div class="alert alert-warning text-start mx-auto mb-4" role="alert" style="max-width: 450px; border-radius: 15px;">
                        <i class="fa-solid fa-circle-exclamation me-2"></i>
                        <strong>Atenção:</strong> Certifique-se de que não existem equipamentos associados a esta localização antes de a eliminar.
                    </div>
                    
                    <div class="d-flex justify-content-center gap-3 mt-2">
                        <a href="/Projeto SIBDAS/private/views/localizacoes/localizacoes.php" class="btn btn-outline-secondary px-4 py-2">
                            <i class="fa-solid fa-xmark me-2"></i>Cancelar
                        </a>
                        <a href="/Projeto SIBDAS/private/views/localizacoes/localizacoes.php" class="btn btn-danger px-4 py-2">
                            <i class="fa-solid fa-trash-can me-2"></i>Sim, Eliminar
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>
</div>

<?php include '../../includes/footer.php'; ?>