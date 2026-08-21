<?php
session_start();

$mensagem_erro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);

    if (!empty($nome) && !empty($email) && !empty($senha)) {
        $_SESSION['usuario_logado'] = $nome;
        header("Location: Pages/PaginaInicial.php");
        exit;
    } else {
        $mensagem_erro = "Preencha todos os campos corretamente!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SESI SENAI - Criar Conta</title>
  <link rel="stylesheet" href="Css/cadastro_tela.css" />
</head>
<body>

  <main class="painel">

    <section class="grafico" aria-hidden="true">
      <svg viewBox="0 0 570 507" preserveAspectRatio="xMidYMid slice">
        <polygon points="0,0 200,0 350,254" fill="#35a936"/>
        <polygon points="340,0 570,0 350,254" fill="#003b82"/>
        <polygon points="0,507 200,507 350,254" fill="#35a936"/>
        <polygon points="250,507 570,507 350,254" fill="#003b82"/>
        <polygon points="0,110 350,254 0,365" fill="#003b82"/>
      </svg>

      <div class="foto-menina">
        <img src="assets/menina.png" alt="Aluna sorrindo vestindo uniforme do SESI SENAI">
      </div>

      <div class="foto-menino">
        <img src="assets/menino.png" alt="Aluno sorrindo vestindo uniforme do SESI SENAI">
      </div>
    </section>

    <section class="cartao-wrap">
      <div class="cartao">

        <div class="logo-container">
            <img class="logo-img" src="assets/senai.png" alt="Logotipo do SESI SENAI">
        </div>

        <form id="form-cadastro" method="POST" action="">

          <div class="campo">
            <label for="nome">NOME:</label>
            <input type="text" id="nome" name="nome" autocomplete="name" required aria-required="true">
          </div>

          <div class="campo">
            <label for="email">E-MAIL:</label>
            <input type="email" id="email" name="email" autocomplete="email" required aria-required="true">
          </div>

          <div class="campo">
            <label for="senha">SENHA:</label>
            <input type="password" id="senha" name="senha" autocomplete="new-password" required aria-required="true">
          </div>

          <div class="acoes">
            <button type="submit">CRIAR CONTA</button>
            <a href="index.php" class="voltar-link">VOLTAR</a>
          </div>

          <div class="mensagem" id="mensagem" aria-live="polite">
              <?php if (!empty($mensagem_erro)): ?>
                  <span style="color: #ff5a3d; font-weight: bold;"><?php echo $mensagem_erro; ?></span>
              <?php endif; ?>
          </div>

        </form>

      </div>

      <footer class="nucleo">NETNÚCLEO - HORTO</footer>
    </section>

  </main>

</body>
</html>
