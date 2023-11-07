<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="indexstyle.css">
    <img src="images/braco.svg" width="70" height="70" alt="img" class="img">
    <title>Faça seu Login</title>
</head>
<body style="display:flex; align-items:center; justify-content:center;">
<div class="login-page">
  <div class="form">
       <h2><i class="fas fa-lock"></i> LOGIN</h2>
       <form class="login-form" action="logar_usuario_action.php" method="POST">

       <input type="text" name="email" placeholder="E-mail:" required>
       <input type="password" name="senha" placeholder="Senha:" required>

       <input type="submit" value="Entrar">

       <p class="message"><a href="#">Esqueceu a senha?</a></p>
       
       </form>

</body>
</html>