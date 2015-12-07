<?php 
require_once("phpmailer/phpmailer.class.php");

class Contact{
	public $nome;
	public $email;
	public $empresa;
	public $mensagem;

	public function adicionar(){
		$obj = new Contact();
		foreach ($obj as $name_post => $value) {
			$this->$name_post = (isset($_POST[$name_post])) ? $_POST[$name_post] : null;

		}
	}

	public function send(){
		$mail = new PHPMailer();
		$mail->IsSMTP(); // @amats Define que a mensagem será SMTP
		$mail->Host = 'mail.controlsystem.com.br'; // @amats  Endereço do servidor SMTP
		$mail->SMTPAuth = true; // @amats  Usa autenticação SMTP? (opcional)
		$mail->Port = 587; // @amats Define a Porta
		$mail->Username = 'andre@controlsystem.com.br'; // @amats Usuário do servidor SMTP
		$mail->Password = 'j3540771'; // @amats Senha do servidor SMTP

		$mail->From = $this->email; // Seu e-mail***************************
		$mail->FromName = "MDCS"; // Seu nome

		$mail->AddAddress('andre@controlsystem.com.br');

		$mail->IsHTML(true); // @amats Define que o e-mail será enviado como HTML
		$mail->CharSet = 'UTF-8'; // @amats Charset da mensagem (opcional)

		$textbody = nl2br( $this->mensagem );
		$mail->Subject  = "Contato - MDCS"; // @amats Assunto da mensagem
		$mail->Body = '<hmtl>Nome: '.$this->nome.'<br />Empresa: '.$this->empresa.'<br />Mensagem: '.$textbody.'</html>';
		$mail->AltBody = $textbody;
		// @amats Define os anexos (opcional)
		// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
		//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // @amats Insere um anexo
		// @amats Envia o e-mail
		
		return $mail->Send();
	}


}

 ?>