<?php
class Database
{
	//Configuração do banco de dados
	private $DB_HOST	= '172.18.100.80';
	private $DB_NAME	= 'sisentrada';
	private $DB_USER	= 'desenv';
	private $DB_PASS	= 'alep@123';

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