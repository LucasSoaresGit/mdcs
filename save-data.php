<?php 
include_once("model/form-class.php");
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Questionário enviado</title>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="css/grayscale.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<?php //include_once("view/nav.php") ?>
<section class="intro">
    <div class="intro-body">
			<div class="row" style="margin-left: 0px; margin-right: 0px">
                <div class="col-md-12">
                    <h1 class="brand-heading"><img  src="img/logo.png"></h1>
                    <!-- <div class="content"> -->
                        <!-- <div class="col-md-8"> -->
                            <p class="intro-text">
                            	<?php 

									$form = new Formulario();

									if($form->register_data()){
										echo 'Questionario enviado com sucesso, por favor aguarde, logo entraremos em contato<br />';
										echo '<button type="button" data-toggle="pill" href="#monitoramento" class="btn btn-default" onclick="window.location = \'index.php\' " style="background-color:#28c3ab; color:#333;"  >Voltar</button>';
									}else{
										echo 'Falha ao enviar questionario';

									}

									?>
                            </p>
                            
                        <!-- </div> -->
                    <!-- </div> -->
                    <div class="page-scroll">
                        
                    </div>
                </div>
            </div>
     </div>
</section>


</body>
</html>