<?php
session_start();

// dados da empresa
if(isset($_GET['nome']) && $_GET['nome'] == 'nome'){
   $_SESSION['questionario']['empresa']['nome_empresa'] = $_GET['valor'];
}
if(isset($_GET['nome']) && $_GET['nome'] == 'cnpj'){
    $_SESSION['questionario']['empresa']['cnpj'] = $_GET['valor'];
}
if(isset($_GET['nome']) && $_GET['nome'] == 'telefone'){
    $_SESSION['questionario']['empresa']['telefone'] = $_GET['valor'];
}
if(isset($_GET['nome']) && $_GET['nome'] == 'email'){
    $_SESSION['questionario']['empresa']['email'] = $_GET['valor'];
}

// dados ramos de atuaçao

if(isset($_POST) && $_POST != ""){
    foreach ($_POST as $key => $value) {
        echo $value;
        if($key == "A"){
            $_SESSION['questionario']['ramo_atividade']['a'] = 1;
        }
          if($key == "B"){
            $_SESSION['questionario']['ramo_atividade']['b'] = 1;
        }
          if($key == "C"){
            $_SESSION['questionario']['ramo_atividade']['c'] = 1;
        }
          if($key == "D"){
            $_SESSION['questionario']['ramo_atividade']['d'] = 1;
        }
          if($key == "E"){
            $_SESSION['questionario']['ramo_atividade']['e'] = 1;
        }
          if($key == "F"){
            $_SESSION['questionario']['ramo_atividade']['f'] = 1;
        }
          if($key == "G"){
            $_SESSION['questionario']['ramo_atividade']['g'] = 1;
        }
          if($key == "H"){
            $_SESSION['questionario']['ramo_atividade']['h'] = 1;
        }
          if($key == "I"){
            $_SESSION['questionario']['ramo_atividade']['i'] = 1;
        }
          if($key == "J"){
            $_SESSION['questionario']['ramo_atividade']['j'] = 1;
        }
          if($key == "K"){
            $_SESSION['questionario']['ramo_atividade']['k'] = 1;
        }
          if($key == "L"){
            $_SESSION['questionario']['ramo_atividade']['l'] = 1;
        }
          if($key == "M"){
            $_SESSION['questionario']['ramo_atividade']['m'] = 1;
        }
          if($key == "N"){
            $_SESSION['questionario']['ramo_atividade']['n'] = 1;
        }
          if($key == "O"){
            $_SESSION['questionario']['ramo_atividade']['o'] = 1;
        }
          if($key == "P"){
            $_SESSION['questionario']['ramo_atividade']['p'] = 1;
        }
          if($key == "Q"){
            $_SESSION['questionario']['ramo_atividade']['q'] = 1;
        }
          if($key == "R"){
            $_SESSION['questionario']['ramo_atividade']['r'] = 1;
        }
          if($key == "S"){
            $_SESSION['questionario']['ramo_atividade']['s'] = 1;
        }
          if($key == "T"){
            $_SESSION['questionario']['ramo_atividade']['t'] = 1;
        }
          if($key == "U"){
            $_SESSION['questionario']['ramo_atividade']['u'] = 1;
        }
          if($key == "V"){
            $_SESSION['questionario']['ramo_atividade']['v'] = 1;
        }
          if($key == "Outros"){
            $_SESSION['questionario']['ramo_atividade']['outros'] = 1;
        }
          if($key == "valor_outros"){
            $_SESSION['questionario']['ramo_atividade']['valor_outros'] = $value;
        }

    }
}



