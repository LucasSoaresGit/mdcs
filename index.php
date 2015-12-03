<?php session_start(); ?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Grayscale - Free One Page Theme for Bootstrap 3</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
    <!-- Fonts -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Custom Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

</head>
  <script>
        function setSession(valor,nome){
            var vlr = valor;
            var n = nome;
            var url = "Ajax/set_session_cadastro.php?valor="+vlr+"&nome="+n;
                $.get(url, function(dataReturn){});                
        }
    </script>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <?php include_once("view/nav.php") ?>

    <?php include_once("view/section-intro.php") ?>

    <?php include_once("view/section-about.php") ?>

    <?php include_once("view/section-download.php") ?>

    <?php include_once("view/section-contact.php") ?>    

    
    <div id="map"></div>

    <!-- Core JavaScript Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - You will need to use your own API key to use the map feature -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
