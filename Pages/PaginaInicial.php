<?php
session_start();

if (!isset($_SESSION['usuario_logado'])) {
    header("Location: ../index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netnúcleo - Horto - Painel Principal</title>
    <link rel="stylesheet" href="../Css/paginainicial.css">
</head>
<body>

    <header class="header">
        <div class="logo-container">
            <img class="logo-img" src="../assets/senai.png" alt="Logotipo do SESI SENAI">
        </div>
        <h1 class="title">Netnúcleo - Horto</h1>
    </header>

    <nav class="menu-bar" aria-label="Menu principal">
        <a href="PáginaBotao1.php" class="menu-btn">Cadastros</a>
        <a href="movimento.php" class="menu-btn">Movimento</a>
        <a href="consultas.php" class="menu-btn">Consultas</a>
        <a href="relatorios.php" class="menu-btn">Relatórios</a>
        <a href="utilitarios.php" class="menu-btn">Utilitários</a>
    </nav>

    <main class="main-container">
        <section class="shortcuts-section" aria-labelledby="atalhos-titulo">
            <h2 id="atalhos-titulo">Atalhos para Celular:</h2>
            <div class="shortcuts-grid">
                <a href="#" class="shortcut-btn">Consulta Aula</a>
                <a href="#" class="shortcut-btn">Consulta Instrutor</a>
                <a href="#" class="shortcut-btn">Consulta Sala</a>
            </div>
        </section>

        <div class="footer-actions">
            <a href="../index.php" class="logout-btn">Logout</a>
        </div>
    </main>

</body>
</html>
