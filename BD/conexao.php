  <?php
//O tipo de caracteres a ser usado
    header('Content-Type: text/html; charset=utf-8');
	$driver = 'HDBODBC';
  $servidor = "192.168.30.122:30015";
  $db_name = "SAPABAP1";
	$usuario = "DEVCONN";
	$senha = "AdRMM123";

	
	//Criar a conexao
  $conn = odbc_connect("Driver=$driver;ServerNode=$servidor;Database=$db_name;", $usuario, $senha, SQL_CUR_USE_ODBC);

	if(!$conn){
		die("Falha na conexao: " . odbc_error());
        
         //<a  href="Administrativo.php?link=106">
		odbc_close($conn);
            

	}else{
	//echo "Conexao realizada com sucesso";
	}	

  ?>


 