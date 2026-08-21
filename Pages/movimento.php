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
    <title>Netnúcleo - Horto - Movimento</title>
    <link rel="stylesheet" href="../Css/movimento.css">
</head>
<body>

    <header class="header">
        <div class="logo-container">
            <img class="logo-img" src="../assets/senai.png" alt="Logotipo do SESI SENAI">
        </div>
        <h1 class="title">Netnúcleo - Horto</h1>
    </header>

    <main class="main-container">
        <nav aria-label="Menu de Movimento">
            <div class="secao-atual-container">
                <span class="secao-btn" aria-current="page">Movimento</span>
            </div>

            <ul class="shortcuts-grid" style="list-style: none; padding: 0;">
                <li><a href="#" class="shortcut-btn">Lançamento de Aulas</a></li>
                <li><a href="#" class="shortcut-btn">Lançamento de Atividades</a></li>
                <li><a href="#" class="shortcut-btn">Programação de turmas</a></li>
                <li><a href="#" class="shortcut-btn">Ocorrências</a></li>
            </ul>
        </nav>

        <div class="footer-actions">
            <a href="PaginaInicial.php" class="voltar-btn">Voltar</a>
        </div>
    </main>

</body>
</html>
