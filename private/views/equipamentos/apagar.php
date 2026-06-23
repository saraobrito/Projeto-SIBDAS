<?php 
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['mensagem_alerta'] = "Equipamento eliminado com sucesso!";
        $_SESSION['tipo_alerta'] = "success"; 
        header("Location: equipamentos.php"); 
        exit();
    }

    $page_title = "Apagar Equipamento";
    $titulo = "Gestão de Equipamentos";
    $subtitulo = "Remoção de equipamentos do inventário.";
    $pagina_ativa = 'equipamentos';

    include '../../includes/header.php';

?>

<body style="background-color: #f8fbff;">

    <?php include '../../includes/sidebar.php'; ?>

<!-- Conteúdo Principal e Navbar-->
    <main class="main-content w-100" style="padding: 0; min-height: 100vh;">
        
        <?php 
            include '../../includes/page_header.php'; 
        ?>

        <section class="p-2">
            <div class="d-flex justify-content-center mt-2">
                <div class="card w-100 shadow-sm rounded text-center p-4 border-0" style="max-width: 600px; background-color: #fff;">

                    <div class="text-warning display-4 mb-2">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                    </div>

                    <p class="mb-2 fs-5 text-muted">Tem a certeza que deseja eliminar este equipamento?</p>
                    <h3 class="mb-3 text-dark"><strong>Monitor Multiparamétrico</strong></h3>
                    
                    <div class="mb-3 p-3 bg-light rounded text-start mx-auto" style="max-width: 400px;">
                        <span class="d-block mb-2 text-secondary">
                            <i class="fa-solid fa-hashtag me-2"></i>Código: <strong>04.002.00</strong>
                        </span> 
                        <span class="d-block mb-2 text-secondary">
                            <i class="fa-solid fa-tag me-2"></i>Marca: <strong>Philips IntelliVue MP5</strong>
                        </span> 
                        <span class="d-block text-secondary">
                            <i class="fa-solid fa-location-dot me-2"></i>Localização: <strong>Cuidados Intensivos</strong>
                        </span> 
                    </div>

                    <div class="d-flex justify-content-center gap-3 mt-2">
                        <a href="/Projeto SIBDAS/private/views/equipamentos/equipamentos.php" class="btn btn-outline-secondary px-4 py-2">
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