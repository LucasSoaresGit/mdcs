<?php


//** função para converter os valores do banco de dados que estao com ponto para valores com virgula.

function verificaValor($valor){
        
    if(!strpos($valor, '.')){// se não existe . na string (EX R$ 15) tem que adicionar .00 para ficar (R$ 15.00)
       $valor .= '.00';
    }else if(strlen($valor) - strpos($valor, '.') < 3){
        $valor .= '0';
    }
    
    return $valor;
}