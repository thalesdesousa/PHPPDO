<?php
    require_once './model/connection.php';
    
    function inserir($nome, $senha, $email,$pdo){
    $inserir = $pdo->prepare("INSERT INTO `sistemahx`."
                            . "`usuarios` (`ID`,`NAME`,`PASS`,`EMAIL`)"
                            . " VALUES (NULL, :name, :pass, :email);");
    
    $inserir->bindValue(":name", $nome);
    $inserir->bindValue(":pass", $senha);
    $inserir->bindValue(":email", $email);

        $validar=$pdo->prepare("SELECT * FROM `sistemahx`.`usuarios`"
                . " WHERE email=?");
    $validar->execute(array($email));

    if($validar->rowCount()==0){            
        $inserir->execute();

    }else{
        return 'Email já Cadastrado!';}
    }



