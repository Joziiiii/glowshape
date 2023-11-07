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
        $stmt = $dbh->prepare("select email, senha from usuario;");
        		
        // executar comando SQL
        if($stmt->execute()) {
            echo "Logado com sucesso!";
        }
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage();
        die();
    }
?>  