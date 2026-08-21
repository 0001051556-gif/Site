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
    <title>Netnúcleo - Horto - Consultas</title>
    <link rel="stylesheet" href="../Css/consultas.css">
</head>
<body>

    <header class="header">
        <div class="logo-container">
            <img class="logo-img" src="../assets/senai.png" alt="Logotipo do SESI SENAI">
        </div>
        <h1 class="title">Netnúcleo - Horto</h1>
    </header>

    <main class="main-container">
        <nav aria-label="Menu de Consultas">
            <div class="secao-atual-container">
                <span class="secao-btn" aria-current="page">Consultas</span>
            </div>

            <ul class="shortcuts-grid" style="list-style: none; padding: 0;">
                <li><a href="#" class="shortcut-btn">Horário</a></li>
                <li><a href="#" class="shortcut-btn">Sala</a></li>
                <li><a href="#" class="shortcut-btn">Matérias a lançar</a></li>

                <li><a href="#" class="shortcut-btn">Instrutor</a></li>
                <li><a href="#" class="shortcut-btn">Sala Calendário</a></li>
                <li><a href="#" class="shortcut-btn">Programação de turma</a></li>

                <li><a href="#" class="shortcut-btn">Instrutor Calendário</a></li>
                <li><a href="#" class="shortcut-btn">Matérias por turma</a></li>
                <li><a href="#" class="shortcut-btn">Ocorrências</a></li>
            </ul>
        </nav>

        <div class="footer-actions">
            <a href="PaginaInicial.php" class="voltar-btn">Voltar</a>
        </div>
    </main>

</body>
</html>
