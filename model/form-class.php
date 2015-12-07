<?php 
include_once("class_sql.php");

class Formulario{
	public $nome;
	public $cnpj;
	public $telefone;
	public $email;
	public $ramos;
	public $valor_outros;
	public $regiao;
	public $baixo;
	public $medio;
	public $alto;
	public $faixa0_10;
	public $faixa10_20;
	public $faixa20_40;
	public $mais40;
	public $todos;
	public $masculino;
	public $feminino;
	public $site;
	public $facebook;
	public $instagram;
	public $outra_rede;
	public $pretensao_investimento;
	public $monitoramento;
	public $qual_monitoramento;
	public $aumentar_marca;
	public $fixar_marca;

	public static function register_data(){
			$ramos = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','outros');
			$form = new Formulario();
			
			foreach($form as $name_post => $v){

				$form->$name_post = (isset($_POST[$name_post])) ? $_POST[$name_post] : null; 
				if($form->$name_post == 'on' || $form->$name_post == 'sim'){ //if 'on' or 'sim' the $form->$name_post receive 1 bacause the data base is integer
					$form->$name_post = 1;
				}
				if($form->$name_post == 'nao'){//if 'nao' the $form->$name_post receive 0 bacause the data base is integer
					$form->$name_post = 0;
				}

				if($name_post == 'ramos'){
					foreach ($ramos as $key => $value) {
						$form->$name_post .= (isset($_POST[$value])) ? $_POST[$value].':' : null;
					}
					$form->$name_post = substr($form->$name_post, 0, -1);
				}				

			}

			return Formulario::register_data_bd($form);
			
	}

	public static function register_data_bd($data){
			$sql = new Sql();
			$sql->conn_bd();

			$ramos = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','outros');
			
			$sql = 'INSERT INTO formulario (';
			foreach($data as $name_campo => $v){
				$sql .= (isset($v) && $v != '') ? $name_campo.', ' : null; 
			}
			
			$sql = substr($sql, 0, -2); // remove last ',' from sql
			$sql .= ') VALUES (';
			foreach($data as $name_campo => $v){				
					$sql .= (isset($v) && $v != '') ? '"'.$v.'", ' : null;
			}
			$sql = substr($sql, 0, -2); // remove last ',' from sql
			
			$sql .= ')';

			if(mysql_query($sql) ){
				return true;
			}else{
				return false;
			}
			

	}
}

 ?>