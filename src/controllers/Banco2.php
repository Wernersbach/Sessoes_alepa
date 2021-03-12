<?php
class Database2
{
	//Configuração do banco de dados
	private $DB_HOST	= '10.172.1.75';
	private $DB_NAME	= 'sva';
	private $DB_USER	= 'sva_alepa';
	private $DB_PASS	= 'sva@lepa01';

	/*private $DB_HOST	= 'localhost';
	private $DB_NAME	= 'sisentrada';
	private $DB_USER	= 'root';
	private $DB_PASS	= '';*/

	//Armazena a conexão
	private $conn;
	
	function __construct()
	{
		//Quando essa classe é instanciada, é atribuidoa variável $conn a conexão com o db
		try {
			$this->conn = new PDO("mysql:host=".$this->DB_HOST.";dbname=".$this->DB_NAME, $this->DB_USER, $this->DB_PASS);
			$this->conn->exec("set names utf8");
		} catch(PDOException $e){
            echo('Erro PDO DataBase: '.$e->getMessage());
        }
	}

    public function obj(){
        return $this->conn;
    }
}
?>