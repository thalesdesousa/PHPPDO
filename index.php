<?php
       require_once './controller/controller.php';
       
       if(isset($_POST["nome"])){
            $nome = $_POST["nome"];
            $senha = $_POST["senha"];
            $email = $_POST["email"];
            $insert = inserir($nome, $senha, $email, $pdo);
        }
        listar($pdo);
 ?>
<html>
    <head>
        <title>TestesComPDO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <p>
        <p>
        <p>
        <p>
        <form action="index.php" method="post">
            nome: <input name="nome" type="text" />
            senha: <input name="senha" type="password" />
            email: <input name="email" type="email" />
            <input type="submit">
        </form>
        <?php
        if(isset($insert)){
            echo "<span style='color: red'>".$insert."</span>";
        }
        ?>
    </body>
</html>