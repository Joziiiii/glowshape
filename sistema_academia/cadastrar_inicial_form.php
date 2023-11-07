<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="indexstyle.css">
    <title>Faça seu cadastro</title>
</head>
<body style="display:flex; align-items:center; justify-content:center;">
<div class="login-page">
  <div class="form">
       <h2><i class="fas fa-lock"></i> CADASTRO</h2>
       <form class="login-form" action="cadastrar_inicial_action.php" method="POST">

       <input type="text" name="nome"  placeholder="Nome:" required>
       <input type="text" name="email" placeholder="E-mail:" required>
       <input type="password" name="senha" placeholder="Senha:" required>
       <input type="int" name="telefone" placeholder="Telefone:" required>
       <input type="int" name="cpf" placeholder="CPF:" required>
       <input type="date" name="nascimento" placeholder="Data de nascimento:" required>
       <input type="submit" value="Cadastrar">

       </form>
</body>
</html>