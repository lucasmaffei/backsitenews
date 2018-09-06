<?php
/**
 * 	Funcoes de Banco de Dados
 * 
 * 	@version 0.0.1
 */
//header('Content-type: text/html; charset=iso-8859-1');
mysqli_report(MYSQLI_REPORT_STRICT);

/**
 *	Executa a conexao com o DB
 */
function open_database() {

	try {
		// Cria conexão
		$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		//Define UTF 8
		mysqli_set_charset($conn, "utf8");

		return $conn;

	} catch (Exception $e) {

		echo $e->getMessage();
		return null;
	}	
}

/**
 *	Fecha a conexao com o DB
 */
function close_database($conn) {

	try {

		mysqli_close($conn);

	} catch (Exception $e) {
		echo $e->getMessage();
	}
}

/**
 *  Pesquisa um Registro pelo ID em uma Tabela
 */
function find( $table = null, $destaque = null) {
  
	$database = open_database();
	$found = null;

	try {
	  if ($destaque) {
	    $sql = "SELECT * FROM " . $table . " WHERE cd_destaque = 1 LIMIT 1";
	    $result = $database->query($sql);
	    
	    //if ($result->num_rows > 0) {
				$found = $result->fetch_all(MYSQLI_ASSOC);
	    //}
	    
	  } else {
	    
	    $sql = "SELECT * FROM " . $table . " WHERE cd_destaque = 0 ORDER BY dt_data DESC";
	    $result = $database->query($sql);
	    
	    if ($result) {
		    //if ($result->num_rows > 0) {
		      $found = $result->fetch_all(MYSQLI_ASSOC);
		    //}
		}
	  }
	} catch (Exception $e) {
	  $_SESSION['message'] = $e->GetMessage();
	  $_SESSION['type'] = 'danger';
  }
	
	close_database($database);
	return $found;
}

/**
 *  Pesquisa Todos os Registros de uma Tabela
 */
function find_all( $table ) {
	return find($table);
}
function find_destaque( $table ) {
	return find($table, 1);
}