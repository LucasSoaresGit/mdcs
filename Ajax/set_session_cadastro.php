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

            if(isset($_GET['nome']) && $_GET['nome'] == 'A'){
                $_SESSION['questionario']['ramo_atividade']['a'] = $_GET['valor'];
                }
            if(isset($_GET['nome']) && $_GET['nome'] == 'B'){    
                $_SESSION['questionario']['ramo_atividade']['b'] = $_GET['valor'];
                }
            if(isset($_GET['nome']) && $_GET['nome'] == 'C'){  
                $_SESSION['questionario']['ramo_atividade']['c'] = $_GET['valor'];
            }
            if(isset($_GET['nome']) && $_GET['nome'] == 'D'){  
                $_SESSION['questionario']['ramo_atividade']['d'] = $_GET['valor'];
            }
            if(isset($_GET['nome']) && $_GET['nome'] == 'E'){  
                $_SESSION['questionario']['ramo_atividade']['e'] = $_GET['valor'];
            }
            if(isset($_GET['nome']) && $_GET['nome'] == 'F'){  
                $_SESSION['questionario']['ramo_atividade']['f'] = $_GET['valor'];
            }
            if(isset($_GET['nome']) && $_GET['nome'] == 'G'){  
                $_SESSION['questionario']['ramo_atividade']['g'] = $_GET['valor'];
            }
            if(isset($_GET['nome']) && $_GET['nome'] == 'H'){  
                $_SESSION['questionario']['ramo_atividade']['h'] = $_GET['valor'];
            }
            if(isset($_GET['nome']) && $_GET['nome'] == 'i'){  
                $_SESSION['questionario']['ramo_atividade']['i'] = $_GET['valor'];
            }
            if(isset($_GET['nome']) && $_GET['nome'] == 'J'){  
                $_SESSION['questionario']['ramo_atividade']['j'] = $_GET['valor'];
            }
            if(isset($_GET['nome']) && $_GET['nome'] == 'K'){  
                $_SESSION['questionario']['ramo_atividade']['k'] = $_GET['valor'];
            }
            if(isset($_GET['nome']) && $_GET['nome'] == 'L'){  
                $_SESSION['questionario']['ramo_atividade']['l'] = $_GET['valor'];
            }
                $_SESSION['questionario']['ramo_atividade']['m'] = $_GET['valor'];
            if(isset($_GET['nome']) && $_GET['nome'] == 'n'){  
                $_SESSION['questionario']['ramo_atividade']['n'] = $_GET['valor'];
            }
            if(isset($_GET['nome']) && $_GET['nome'] == 'O'){  
                $_SESSION['questionario']['ramo_atividade']['o'] = $_GET['valor'];
            }
            if(isset($_GET['nome']) && $_GET['nome'] == 'P'){  
                $_SESSION['questionario']['ramo_atividade']['p'] = $_GET['valor'];
            }
            if(isset($_GET['nome']) && $_GET['nome'] == 'Q'){  
                $_SESSION['questionario']['ramo_atividade']['q'] = $_GET['valor'];
            }
            if(isset($_GET['nome']) && $_GET['nome'] == 'R'){  
                $_SESSION['questionario']['ramo_atividade']['r'] = $_GET['valor'];
            }
            if(isset($_GET['nome']) && $_GET['nome'] == 'S'){  
                $_SESSION['questionario']['ramo_atividade']['s'] = $_GET['valor'];
            }
            if(isset($_GET['nome']) && $_GET['nome'] == 'T'){  
                $_SESSION['questionario']['ramo_atividade']['t'] = $_GET['valor'];
            }
            if(isset($_GET['nome']) && $_GET['nome'] == 'U'){  
                $_SESSION['questionario']['ramo_atividade']['u'] = $_GET['valor'];
            }
            if(isset($_GET['nome']) && $_GET['nome'] == 'V'){  
                $_SESSION['questionario']['ramo_atividade']['v'] = $_GET['valor'];
            }
            if(isset($_GET['nome']) && $_GET['nome'] == 'outros'){  
                $_SESSION['questionario']['ramo_atividade']['outros'] = $_GET['valor'];
            }
            if(isset($_GET['nome']) && $_GET['nome'] == 'valor_outros'){  
                $_SESSION['questionario']['ramo_atividade']['valor_outros'] = $_GET['valor'];
            }
                


// publico alvo
            
            if(isset($_GET['nome']) && $_GET['nome'] == 'regiao'){  
                $_SESSION['questionario']['publico']['regiao'] = $_GET['valor'];
            }
                    // poder aquisitivo
            
                if(isset($_GET['nome']) && $_GET['nome'] == 'baixo'){  
                    $_SESSION['questionario']['publico']['poder_baixo'] = $_GET['valor'];                    
                }
                if(isset($_GET['nome']) && $_GET['nome'] == 'medio'){  
                    $_SESSION['questionario']['publico']['poder_medio'] = $_GET['valor'];                    
                }
                if(isset($_GET['nome']) && $_GET['nome'] == 'alto'){  
                    $_SESSION['questionario']['publico']['poder_alto'] = $_GET['valor'];                    
                }
                
                    //faixa etaria
                
                if(isset($_GET['nome']) && $_GET['nome'] == '0-10'){  
                    $_SESSION['questionario']['publico']['faixa_0-10'] = $_GET['valor'];                    
                }
                if(isset($_GET['nome']) && $_GET['nome'] == '10-20'){  
                    $_SESSION['questionario']['publico']['faixa_10-20'] = $_GET['valor'];                    
                }
                if(isset($_GET['nome']) && $_GET['nome'] == '20-40'){  
                    $_SESSION['questionario']['publico']['faixa_20-40'] = $_GET['valor'];                    
                }
                if(isset($_GET['nome']) && $_GET['nome'] == '40+'){  
                    $_SESSION['questionario']['publico']['faixa_40+'] = $_GET['valor'];                    
                }
                if(isset($_GET['nome']) && $_GET['nome'] == 'todos'){  
                    $_SESSION['questionario']['publico']['todos'] = $_GET['valor'];                    
                }
                
                    //genero
                
                if(isset($_GET['nome']) && $_GET['nome'] == 'masculino'){  
                    $_SESSION['questionario']['publico']['masculino'] = $_GET['valor'];                    
                }
                if(isset($_GET['nome']) && $_GET['nome'] == 'feminino'){  
                     $_SESSION['questionario']['publico']['feminino'] = $_GET['valor'];                    
                }
                
// Serviços da Web
                 if(isset($_GET['nome']) && $_GET['nome'] == 'site'){  
                    $_SESSION['questionario']['servicos']['site'] = $_GET['valor'];                    
                }
                if(isset($_GET['nome']) && $_GET['nome'] == 'facebook'){  
                    $_SESSION['questionario']['servicos']['facebook'] = $_GET['valor'];                    
                }
                if(isset($_GET['nome']) && $_GET['nome'] == 'instagram'){  
                    $_SESSION['questionario']['servicos']['instagram'] = $_GET['valor'];                    
                }
                if(isset($_GET['nome']) && $_GET['nome'] == 'outra_rede'){  
                    $_SESSION['questionario']['servicos']['outra_rede'] = $_GET['valor'];                    
                }
// Investimento 
                if(isset($_GET['nome']) && $_GET['nome'] == 'investimento'){  
                    $_SESSION['questionario']['investimento']['valor'] = $_GET['valor'];                    
                }