$(document).ready(function(){
         $("#site").click(function(){
            $("#endereco").fadeToggle("slow");
        });
        $("#face").click(function(){
            $("#linkface").fadeToggle("slow");
        });
        $("#insta").click(function(){
            $("#linkinsta").fadeToggle("slow");
        });                                
        $("#other").click(function(){
            $("#linkoutra").fadeToggle("slow");
        });
        $("#yes_monitora").click(function(){
            $("#qual").fadeToggle("slow");
        });
        $("#check_obs_outros").click(function(){
            $("#obs_outros").fadeToggle("slow");
        });
});


// Mask
 function mascara(o,f){
     v_obj=o
     v_fun=f
     setTimeout("execmascara()",1)
 }
 function execmascara(){
     v_obj.value=v_fun(v_obj.value)
 }
 function mnum(v){
           v=v.replace(/\D/g,"");                                      //Remove tudo o que não é dígito
           return v;
 }
 function mvalor(v){
           v=v.replace(/\D/g,"");//Remove tudo o que não é dígito
           v=v.replace(/(\d)(\d{8})$/,"$1.$2");//coloca o ponto dos milhões
           v=v.replace(/(\d)(\d{5})$/,"$1.$2");//coloca o ponto dos milhares

           v=v.replace(/(\d)(\d{2})$/,"$1,$2");//coloca a virgula antes dos 2 últimos dígitos
        return v;
 }

 function mtel(v){
     if(v.length >=16){
       v = v.substring(0,(v.length - 1));
       return v;
     }
     v=v.replace(/\D/g,"");
     v=v.replace(/^(\d{2})(\d)/g,"($1) $2");
     v=v.replace(/(\d)(\d{4})$/,"$1-$2");
     return v;
 }
 function mcpf(v){
    if(v.length >=15){  
      v = v.substring(0,(v.length - 1));
      return v;
    }
    v=v.replace(/\D/g,""); 
    v=v.replace(/^(\d{3})(\d{3})(\d{3})(\d{2})/,"$1.$2.$3-$4");
    return v;
 }
 function mcnpj(v){
     if(v.length >=19){                                          // alert("mtel")
       v = v.substring(0,(v.length - 1));
       return v;
     }
     v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
     v=v.replace(/^(\d{2})(\d{3})/g,"$1.$2."); 
     v=v.replace(/(\d{3})(\d{4})/,"$1/$2"); 
     v=v.replace(/(\d)(\d{2})$/,"$1-$2"); 
     
     return v;
 }
 function dnasc(v){
    if(v.length >=10){      
      v = v.substring(0,(v.length - 1));
      return v;
    }
    v=v.replace(/\D/g,""); 
    v=v.replace(/^(\d{2})(\d{2})(\d{4})/,"$1/$2/$3");  
    return v;
}
 function mrg(v){
    if(v.length >=13){
      v = v.substring(0,(v.length - 1));
      return v;
    }
    v=v.replace(/^(\d{2})(\d{3})(\d{3})(\d{1})/,"$1.$2.$3-$4");
    return v;
}
function id( el ){
  return document.getElementById( el );
}

function carregaMascaras(){

   id('cnpj').onkeypress = function(){ 
       mascara( this, mcnpj );
   };      
   id('telefone').onkeypress = function(){
       mascara( this, mtel );
   };
}

// fim Mask

function mudaAba(tipo){
        
        if(tipo == 1){ 
            if(document.getElementById('sobre1').className == 'active'){
                document.getElementById('sobre1').className = '';
                document.getElementById('ramo1').className = 'active';
            }else if(document.getElementById('ramo1').className == 'active'){
                document.getElementById('ramo1').className = '';
                document.getElementById('publico1').className = 'active';
            }else if(document.getElementById('publico1').className == 'active'){
                document.getElementById('publico1').className = '';
                document.getElementById('servicos1').className = 'active';
            }else if(document.getElementById('servicos1').className == 'active'){
                document.getElementById('servicos1').className = '';
                document.getElementById('pretensao1').className = 'active';
            }else if(document.getElementById('pretensao1').className == 'active'){
                document.getElementById('pretensao1').className = '';
                document.getElementById('monitoramento1').className = 'active';
            }else if(document.getElementById('monitoramento1').className == 'active'){
                document.getElementById('monitoramento1').className = '';
                document.getElementById('expectativa1').className = 'active';
            }else if(document.getElementById('expectativa1').className == 'active'){
                
            }
      }else{
          if(document.getElementById('sobre1').className == 'active'){
            }else if(document.getElementById('ramo1').className == 'active'){
                document.getElementById('sobre1').className = 'active';
                document.getElementById('ramo1').className = '';
            }else if(document.getElementById('publico1').className == 'active'){
                document.getElementById('ramo1').className = 'active';
                document.getElementById('publico1').className = '';
            }else if(document.getElementById('servicos1').className == 'active'){
                document.getElementById('publico1').className = 'active';
                document.getElementById('servicos1').className = '';
            }else if(document.getElementById('pretensao1').className == 'active'){
                document.getElementById('servicos1').className = 'active';
                document.getElementById('pretensao1').className = '';
            }else if(document.getElementById('monitoramento1').className == 'active'){
                document.getElementById('pretensao1').className = 'active';
                document.getElementById('monitoramento1').className = '';
            }else if(document.getElementById('expectativa1').className == 'active'){
                document.getElementById('monitoramento1').className = 'active';
                document.getElementById('expectativa1').className = '';
            }
      }

}

function valida(f){
    for(i = 0; i < f.length ; i++){
        if(f[i].name == 'nome'){
            if(f[i].value == ''){
                alert("Preencha o campo nome na aba Sua empresa");
                f[i].focus();
                f[i].style.border = '1px solid #f00';
                return false;
            }else{
                f[i].style.border = '0px';
            }
        }
        if(f[i].name == 'email'){
            if(f[i].value == ''){
                alert("Preencha o campo email na aba Sua empresa");
                f[i].focus();
                f[i].style.border = '1px solid #f00';
                return false;
            }
        }
    }
}