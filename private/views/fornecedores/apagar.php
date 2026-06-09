<?php
    $page_title = "Apagar Fornecedor";
    $titulo = "Gestão de Fornecedores";
    $subtitulo = "Remoção de fornecedores do inventário.";
    $pagina_ativa = 'fornecedores';

    include '../../includes/header.php';

?>

<body style="background-color: #f8fbff;">

    <?php include '../../includes/sidebar.php'; ?>

    <main class="main-content flex-grow-1" style="padding: 0; min-height: 100vh;">
        
        <?php 
            include '../../includes/page_header.php'; 
        ?>

        <section class="p-2" style="display: flex; justify-content: center; margin-top: 40px;">
            <div class="card w-100 shadow-sm rounded text-center p-4 border-0" style="max-width: 600px; background-color: #fff;">

                <div class="text-warning display-4 mb-2">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                </div>

                <p class="mb-2 fs-5 text-muted">Tem a certeza que deseja eliminar este fornecedor?</p>
                <h3 class="mb-3 text-dark"><strong>Dräger Portugal, Lda</strong></h3>
                
                <div class="mb-3 p-3 bg-light rounded text-start mx-auto" style="max-width: 400px;">
                    <span class="d-block mb-2 text-secondary">
                        <i class="fa-solid fa-address-card me-2"></i>NIF: <strong>501234567</strong>
                    </span> 
                    <span class="d-block mb-2 text-secondary">
                        <i class="fa-solid fa-envelope me-2"></i>Email: <strong>geral@draeger.pt</strong>
                    </span> 
                    <span class="d-block text-secondary">
                        <i class="fa-solid fa-user-tie me-2"></i>Contacto: <strong>Rui Santos</strong>
                    </span> 
                </div>
                
                <div class="alert alert-warning text-start mx-auto mb-4" role="alert" style="max-width: 450px; border-radius: 15px;">
                    <i class="fa-solid fa-circle-exclamation me-2"></i>
                    <strong>Atenção:</strong> Ao eliminar este fornecedor, as ligações aos equipamentos que ele fornece serão removidas.
                </div>
                
                <div class="d-flex justify-content-center gap-3 mt-2">
                    <a href="/Projeto SIBDAS/private/views/fornecedores/fornecedores.php" class="btn btn-outline-secondary px-4 py-2">
                        <i class="fa-solid fa-xmark me-2"></i>Cancelar
                    </a>
                    <a href="/Projeto SIBDAS/private/views/fornecedores/fornecedores.php" class="btn btn-danger px-4 py-2">
                        <i class="fa-solid fa-trash-can me-2"></i>Sim, Eliminar
                    </a>
                </div>
                
            </div>
        </section>
    </main>
</div>

<?php include '../../includes/footer.php'; ?>