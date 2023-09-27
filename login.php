<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Resto do seu código aqui... -->
</head>
<body>
<div class="wrapper fadeInDown" style="background-image: url('assets/images/fundo_pizzaria2.jpg'); background-repeat: no-repeat; background-size: cover; opacity: 0.2;">
  <div id="formContent" style="background: black;">
    <!-- Conteúdo Bootstrap -->
    <div class="container">
      <div class="row">
        <div class="col-md-12 mx-auto p-0">
          <?php
          require 'partials/header2.php';
          require 'config.php';
          ?>

          <!-- Imagem com classe "mx-auto" para centralizá-la horizontalmente -->
          <div class=" fadeIn first text-center" style="background: url('assets/images/bg_4.jpg');">
            <img src="<?= $base?>/assets/images/logo_pizzaria2.png" id="icon" alt="User Icon" class="img-fluid" style="max-height: 110px; width: auto;" />
          </div>

          <!-- Formulário de Login -->
          <form method="POST" action="<?= $base;?>/login_action.php" style="background: url('assets/images/bg_4.jpg');">
            <?php if (!empty($_SESSION['flash'])): ?>
              <?= $_SESSION['flash']; ?>
            <?php endif ?>
            <input type="text" id="email" class="fadeIn second form-control" name="email" placeholder="E-mail">
            <input type="password" id="password" class="fadeIn third form-control" name="password" placeholder="Senha">
            <input type="submit" class="fadeIn fourth btn btn-primary" value="Logar">
          </form>

          <!-- Recuperar senha -->
          <div id="formFooter" style="background: url('assets/images/bg_4.jpg');">
            <a class="underlineHover" href="<?=$base?>/signup.php">Recuperação de senha</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Fim do Conteúdo Bootstrap -->
  </div>
</div>
</body>
</html>
