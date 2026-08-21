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
    <title>Netnúcleo - Horto - Cadastros</title>
    <link class="sh" rel="stylesheet" href="../Css/cadastros.css">
</head>
<body>

    <header class="header">
        <div class="logo-container">
            <img class="logo-img" src="../assets/senai.png" alt="Logotipo do SESI SENAI">
        </div>
        <h1 class="title">Netnúcleo - Horto</h1>
    </header>

    <main class="main-container">
        <nav aria-label="Menu de Cadastros">
            <div class="secao-atual-container">
                <span class="secao-btn" aria-current="page">Cadastros</span>
            </div>

            <ul class="shortcuts-grid" style="list-style: none; padding: 0;">
                <li><a href="#" class="shortcut-btn">Instrutores</a></li>
                <li><a href="#" class="shortcut-btn">Cursos</a></li>
                <li><a href="#" class="shortcut-btn">Salas</a></li>
                <li><a href="#" class="shortcut-btn">Turmas</a></li>
                <li><a href="#" class="shortcut-btn">Modalidades</a></li>
                <li><a href="#" class="shortcut-btn">Feriados</a></li>
                <li><a href="#" class="shortcut-btn">Áreas</a></li>
                <li><a href="#" class="shortcut-btn">Atividades</a></li>
            </ul>
        </nav>

        <div class="footer-actions">
            <a href="PaginaInicial.php" class="voltar-btn">Voltar</a>
        </div>
    </main>

</body>
</html>
