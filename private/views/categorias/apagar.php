<?php
    $page_title = "Apagar Categoria";
    $titulo = "Gestão de Categorias";
    $subtitulo = "Remoção de registos de categorias do sistema.";
    $pagina_ativa = 'categorias';

    include '../../includes/header.php';

?>

<body style="background-color: #f8fbff;">

    <?php include '../../includes/sidebar.php'; ?>

    <main class="main-content w-100" style="padding: 0; min-height: 100vh;">
        
        <?php 
            include '../../includes/page_header.php'; 
        ?>

        <section class="p-2" style="margin-top: 40px;">
            <div class="d-flex justify-content-center">
                <div class="card w-100 shadow-sm rounded p-4 border-0" style="max-width: 600px; background-color: #fff;">

                    <div class="text-warning display-4 mb-2 text-center">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>

                    <p class="mb-2 fs-5 text-muted text-center">Tem a certeza que deseja eliminar esta categoria?</p>
                    <h3 class="mb-3 text-dark text-center"><strong>Monitorização</strong></h3>
                    
                    <div class="mb-3 p-3 bg-light rounded text-start mx-auto" style="max-width: 400px;">
                        <span class="d-block mb-2 text-secondary">
                            <i class="fa-solid fa-code me-2"></i>Prefixo: <strong>MON</strong>
                        </span> 
                        <span class="d-block text-secondary">
                            <i class="fa-solid fa-laptop-medical me-2"></i>Equipamentos Afetados: <strong>142</strong>
                        </span> 
                    </div>
                    
                    <div class="alert alert-danger text-start mx-auto mb-4" role="alert" style="max-width: 450px; border-radius: 15px;">
                        <i class="fa-solid fa-triangle-exclamation me-2"></i>
                        <strong>Aviso Crítico:</strong> Eliminar esta categoria irá remover a classificação de 142 equipamentos. Certifique-se de que reclassificou os itens antes de prosseguir.
                    </div>
                    
                    <div class="d-flex justify-content-center gap-3 mt-2">
                        <a href="/Projeto SIBDAS/private/views/categorias/categorias.php" class="btn btn-outline-secondary px-4 py-2">
                            <i class="fa-solid fa-xmark me-2"></i>Cancelar
                        </a>
                        <a href="/Projeto SIBDAS/private/views/categorias/categorias.php" class="btn btn-danger px-4 py-2">
                            <i class="fa-solid fa-trash-can me-2"></i>Sim, Eliminar
                        </a>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>
</div>

<?php include '../../includes/footer.php'; ?>