<?php
    try {
        // conectar ao banco de dados
        $host='localhost';
        $db = 'academia';
        $username = 'root';
        $password = 'ifsp';
        $dbh = new PDO('mysql:host='.$host.';dbname='.$db.'', $username, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // preparar comando de INSERT
        $stmt = $dbh->prepare("insert into usuario (id,nome,email,senha,telefone,cpf,nascimento) values (?,?,?,?,?,?,?);");
        
        // substituir os ? pelo dados digitados pelo usuário
        $stmt->bindParam(1, $_POST["id"]);
        $stmt->bindParam(2, $_POST["nome"]);
        $stmt->bindParam(3, $_POST["email"]); // "login" é o nome do campo no FORM
        $stmt->bindParam(4, $_POST["senha"]); // "senha" é o nome do campo no FORM
        $stmt->bindParam(5, $_POST["telefone"]); // "login" é o nome do campo no FORM
        $stmt->bindParam(6, $_POST["cpf"]);
        $stmt->bindParam(7, $_POST["nascimento"]);
        		
        // executar comando SQL
        if($stmt->execute()) {
            echo "Cadastro realizado com sucesso!";
        }
    } catch (PDOException $e) {
        print "Erro!: " . $e->getMessage();
        die();
    }
?>  
<a href="logar_usuario_form.php"> Faça Login</a>