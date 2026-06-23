<?php 
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['mensagem_alerta'] = "Documentação eliminada com sucesso!";
        $_SESSION['tipo_alerta'] = "success"; 
        header("Location: documentacao.php"); 
        exit();
    }

    $page_title = "Apagar Documento";
    $titulo = "Gestão de Documentos";
    $subtitulo = "Remoção de manuais e certificados do sistema.";
    $pagina_ativa = 'documentacao';

    include '../../includes/header.php';

?>

<body style="background-color: #f8fbff;">

    <?php include '../../includes/sidebar.php'; ?>

    <!-- Conteúdo Principal -->
    <main class="main-content w-100" style="padding: 0; min-height: 100vh;">
        
        <?php 
            include '../../includes/page_header.php'; 
        ?>

        <section class="p-2">
            <div class="d-flex justify-content-center mt-2">
                <div class="card w-100 shadow-sm rounded text-center p-4 border-0" style="max-width: 600px; background-color: #fff;">

                    <div class="text-warning display-4 mb-2">
                        <i class="fa-solid fa-file-circle-xmark"></i>
                    </div>

                    <p class="mb-2 fs-5 text-muted">Tem a certeza que deseja eliminar este documento?</p>
                    <h3 class="mb-3 text-dark"><strong>Manual_Utilizador_V500.pdf</strong></h3>
                    
                    <div class="mb-3 p-3 bg-light rounded text-start mx-auto" style="max-width: 400px;">
                        <span class="d-block mb-2 text-secondary">
                            <i class="fa-solid fa-tag me-2"></i>Categoria: <strong>Manual de Utilizador</strong>
                        </span> 
                        <span class="d-block mb-2 text-secondary">
                            <i class="fa-solid fa-microchip me-2"></i>Equipamento: <strong>Ventilador Pulmonar</strong>
                        </span> 
                        <span class="d-block text-secondary">
                            <i class="fa-solid fa-calendar-days me-2"></i>Data Upload: <strong>12/05/2026</strong>
                        </span> 
                    </div>

                    <div class="d-flex justify-content-center gap-3 mt-2">
                        <a href="/Projeto SIBDAS/private/views/documentacao/documentacao.php" class="btn btn-outline-secondary px-4 py-2">
                            <i class="fa-solid fa-xmark me-2"></i>Cancelar
                        </a>
                        <form action="" method="POST" class="m-0">
                            <button type="submit" class="btn btn-danger px-4 py-2">
                                <i class="fa-solid fa-trash-can me-2"></i>Sim, Eliminar
                            </button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </section>
    </main>

<?php include '../../includes/footer.php'; ?>