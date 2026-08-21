<?php
session_start();

$mensagem_erro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = trim($_POST['login']);
    $senha = trim($_POST['senha']);

    $login_valido = "admin";
    $senha_valida = "1234";

    if ($login === $login_valido && $senha === $senha_valida) {
        $_SESSION['usuario_logado'] = $login;
        header("Location: Pages/PaginaInicial.php");
        exit;
    } else {
        $mensagem_erro = "Login ou senha incorretos!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SESI SENAI - Login</title>
  <link rel="stylesheet" href="Css/style.css" />
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

        <form id="form-login" method="POST" action="">

          <div class="campo">
            <label for="login">LOGIN:</label>
            <input type="text" id="login" name="login" autocomplete="username" required aria-required="true">
          </div>

          <div class="campo">
            <label for="senha">SENHA:</label>
            <input type="password" id="senha" name="senha" autocomplete="current-password" required aria-required="true">
          </div>

          <div class="acoes">
            <button type="submit">ENTRAR</button>
            <!-- CORRIGIDO: Alterado de button para tag de link real 'a' com estilo em linha embutido -->
            <a href="criar_conta.php" style="border:none; background:none; padding:0; font-weight:800; font-size:0.95rem; color:#ffffff; cursor:pointer; letter-spacing:0.3px; font-family:inherit; text-decoration:none; display:inline-block;">CRIAR CONTA</a>
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
