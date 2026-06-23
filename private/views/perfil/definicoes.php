<?php 
    session_start();
    require_once __DIR__ . '/../../includes/auth_check.php';
    $page_title = "Definições - Hospital Praia Dourada";
    $titulo = "Definições de Perfil";
    $subtitulo = "Gerencie os seus dados pessoais e preferências.";
    $pagina_ativa = 'definicoes';

    include '../../includes/header.php'; 
?>

<body style="background-color: #f8fbff;">
    <?php include '../../includes/sidebar.php'; ?>

    <main class="main-content flex-grow-1" style="padding: 0; min-height: 100vh;">
        <?php include '../../includes/page_header.php'; ?>

        <section style="padding: 30px;">
            <div class="row g-4">
                
                <div class="col-md-6">
                    <div class="card border-0 shadow-sm rounded-4 p-4 h-100">
                        <h5 class="text-primary mb-4 fw-bold"><i class="fa-solid fa-user me-2"></i>Dados Pessoais</h5>
                        
                        <div class="row mb-3 g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-bold text-secondary small">ID Utilizador</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 shadow-sm rounded-start-3">
                                        <i class="fa-solid fa-id-badge text-muted"></i>
                                    </span>
                                    <input type="text" class="form-control bg-light text-muted border-start-0 shadow-sm rounded-end-3" value="USR-2026-001" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold text-secondary small">Nível de Acesso</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0 shadow-sm rounded-start-3">
                                        <i class="fa-solid fa-user-shield text-muted"></i>
                                    </span>
                                    <input type="text" class="form-control bg-light text-muted border-start-0 shadow-sm rounded-end-3" value="Administrador" readonly>
                                </div>
                            </div>
                        </div>

                        <form action="#" method="POST">
                            <div class="mb-3">
                                <label class="form-label fw-bold text-secondary small">Nome Completo</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0 shadow-sm rounded-start-3">
                                        <i class="fa-regular fa-user text-muted"></i>
                                    </span>
                                    <input type="text" name="nome" class="form-control border-start-0 shadow-sm rounded-end-3" value="Nome Sobrenome">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-bold text-secondary small">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0 shadow-sm rounded-start-3">
                                        <i class="fa-regular fa-envelope text-muted"></i>
                                    </span>
                                    <input type="email" name="email" class="form-control border-start-0 shadow-sm rounded-end-3" value="email@hospital.pt">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-primary shadow-sm fw-bold px-4 w-100" style="border-radius: 10px;">
                                <i class="fa-regular fa-floppy-disk me-2"></i>Guardar Alterações
                            </button>
                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card border-0 shadow-sm rounded-4 p-4 h-100">
                        <h5 class="text-danger mb-4 fw-bold">
                            <i class="fa-solid fa-shield-halved me-2"></i>Segurança
                        </h5>
                        
                        <form action="#" method="POST">
                            <div class="mb-3">
                                <label class="form-label fw-bold text-secondary small">Password Atual</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0 shadow-sm rounded-start-3">
                                        <i class="fa-solid fa-lock text-muted"></i>
                                    </span>
                                    <input type="password" name="password_atual" class="form-control border-start-0 shadow-sm rounded-end-3" placeholder="••••••••" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold text-secondary small">Nova Password</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0 shadow-sm rounded-start-3">
                                        <i class="fa-solid fa-key text-muted"></i>
                                    </span>
                                    <input type="password" name="nova_password" class="form-control border-start-0 shadow-sm rounded-end-3" placeholder="Crie uma nova palavra-passe" required>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-bold text-secondary small">Confirmar Nova Password</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-white border-end-0 shadow-sm rounded-start-3">
                                        <i class="fa-solid fa-key text-muted"></i>
                                    </span>
                                    <input type="password" name="confirmar_password" class="form-control border-start-0 shadow-sm rounded-end-3" placeholder="Repita a nova palavra-passe" required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-outline-danger shadow-sm fw-bold px-4 w-100" style="border-radius: 10px;">
                                <i class="fa-solid fa-arrows-rotate me-2"></i>Atualizar Password
                            </button>
                        </form>
                    </div>
                </div>
                
            </div>
        </section>
    </main>
<?php include '../../includes/footer.php'; ?>