<?php
    function listar($pdo){
    $buscarUsuario = $pdo->prepare("SELECT * FROM `sistemahx`.`usuarios`");
    $buscarUsuario->execute();
    
    
    while($linha = $buscarUsuario->fetch(PDO::FETCH_ASSOC)){
        echo "Nome: ".$linha['NAME']."<br />";
        echo "Email: ".$linha['EMAIL']."<P />";
    }
    }
    
    /*
    $linha = $buscarUsuario->fetchAll(PDO::FETCH_OBJ);
    var_dump($linha);
    foreach ($linha as $listar){
        echo "Nome: ".$listar->NAME."<br />";
        echo "Email: ".$listar->EMAIL."<P />";
    }
    
    
    foreach ($linha as $listar){
        echo "Nome: ".$listar['NAME']."<br />";
        echo "Email: ".$listar['EMAIL']."<P />";
    }
    
    

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

