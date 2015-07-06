<?PHP
   function conectar(){
	try{
		$pdo = new PDO("mysql:host = localhost; dbname = sistemahx", "root","");
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
   
        return $pdo;
    }
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
function listar($pdo){
    $buscarUsuario = $pdo->prepare("SELECT * FROM `sistemahx`.`usuarios`");
    $buscarUsuario->execute();
    
    
    while($linha = $buscarUsuario->fetch(PDO::FETCH_ASSOC)){
        echo "Nome: ".$linha['NAME']."<br />";
        echo "Email: ".$linha['EMAIL']."<P />";
    }
    }
	/*---------------------------modo errado de conexao--------------------------
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbName= "";
	
	$conection = mysql_connect($host,$user,$pass);
	$db = mysql_select_db($dbName);
	if(isset($_GET["id"])){
		$id = $_GET["id"];
		$consulta = mysql_query("SELECT * FROM usuarios WHERE id = $id");
		echo mysql_num_rows($consulta);
		}
	*/
	