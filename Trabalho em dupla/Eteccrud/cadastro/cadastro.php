<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login - PHP + MySQL</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../Eteccrud/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>

<body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Cadastre-se</span></div>
        <form action="login/login.php" method="POST">
          <div class="row">
            <i class="fas fa-user"></i>
            <input name="usuario" type="text" placeholder="Crie um usuário" autofocus="" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input name="senha" type="password" placeholder="Crie uma senha" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input name="senha" type="password" placeholder="Repita a senha" required>
          </div>
          <div class="row button">
            <input type="submit" value="Cadastrar">
          </div>
          <div class="signup-link">Possui uma conta? <a href="../../Eteccrud/index.php">Login</a></div>
        </form>
      </div>
    </div>
</body>
</html>