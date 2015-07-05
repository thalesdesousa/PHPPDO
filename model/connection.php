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
	