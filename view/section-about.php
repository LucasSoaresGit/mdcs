<div class="intro-form">
    <section id="about" class="container content-section text-center" style="background-color:rgba(30,30,30,0.6); border-radius:10px; border: 1px solid#676767">
        <div class="row">
            <div class="col-lg-12 ">
                <h2>Questionário</h2>
                <p>A Control System irá avaliar como é o marketing digital de sua empresa, é de suma importância que você seja sincero com as respostas.</p>
                  <div class="row" >
                    <ul class="nav nav-pills" style="width:95%; margin: 0 auto; background-color:rgba(5,5,5,0.5); border-radius:10px; color:#333">
                      <li id="sobre1" class="active"><a data-toggle="pill" href="#sobre">Sua Empresa</a></li>
                      <li id="ramo1" ><a data-toggle="pill" href="#ramo">Ramos de Atividade</a></li>
                      <li id="publico1" ><a data-toggle="pill" href="#publico">Público</a></li>
                      <li id="servicos1"><a data-toggle="pill" href="#servicos">Serviços na Web</a></li>
                      <li id="pretensao1"><a data-toggle="pill" href="#pretensao">Pretensão de investimento</a></li>
                      <li id="monitoramento1"><a data-toggle="pill" href="#monitoramento">Serviço de monitoramento</a></li>
                      <li id="expectativa1"><a data-toggle="pill" href="#expectativa">Quais são suas expectativas</a></li>
                    </ul>
                  </div>
                    <form class="form-horizontal" role="form" id="dados" action="save-data.php" method="POST" onsubmit="return valida(this)">
                          <div class="tab-content" style="margin-top:50px;">
                            <div id="sobre" class="tab-pane fade in active">
                              <div class="row">
                                  
                                  <div class="col-lg-12">
                                     
                                          <div class="form-group">
                                            <p class="control-label col-sm-2" for="nome">Nome :*</p>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome da empresa" >
                                            </div>
                                            
                                          </div>
                                          <div class="form-group">
                                            <p class="control-label col-sm-2" for="cnpj">Cnpj :</p>
                                            <div class="col-sm-10">
                                              <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ" >
                                            </div>                                   
                                          </div>
                                          <div class="form-group">
                                            <p class="control-label col-sm-2" for="telefone">Telefone:</p>
                                            <div class="col-sm-10">
                                              <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" >
                                            </div>                                
                                          </div>
                                           <div class="form-group">
                                            <p class="control-label col-sm-2" for="email">E-mail:*</p>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail"  >
                                            </div>
                                          </div>
                                          <div class="form-group" style="padding-right:20px;">
                                            <span style="float:right">
                                              * Campos obrigatórios
                                            </span>
                                          </div>
                                          <div class="form-group">
                                              <button type="button" data-toggle="pill" href="#ramo" class="btn btn-default" onclick="mudaAba('1')" > Próximo</button>
                                          </div>  
                                      
                                  </div>
                              </div>
                              </div>
                              <div id="ramo" class="tab-pane fade">
                                  <div class="row">
                                          <!-- <p style="margin: 0">Ramos de Atividade</p> -->
                                          <div class="form-group" style="padding:10px;">        
                                            <div class="col-lg-12">
                                                
                                              <?php 
                                                  $style1 = "background-color: rgba(50,50,50,0.5); margin-radius:10px; padding-top:5px; text-align:left"; 
                                                  $style2 = "background-color: rgba(100,100,100,0.5); margin-radius:10px; padding-top:5px;text-align:left"; 
                                              ?>

                                              <div class="row">
                                                   <div class="col-lg-6">
                                                          <div style="<?php echo $style1 ?>" class="checkbox"><label><input type="checkbox" name="A" value="A">Agricultura, Pecuária, Produção Florestal, Pesca e Aquicultura</label></div>                                    
                                                          <div style="<?php echo $style2 ?>"class="checkbox"><label><input type="checkbox" name="B" value="B">Industrias Extrativas</label></div>                                                
                                                          <div style="<?php echo $style1 ?>"class="checkbox"><label><input type="checkbox" name="C" value="C">Indústrias de transformação</label></div>
                                                          <div style="<?php echo $style2 ?>"class="checkbox"><label><input type="checkbox" name="D" value="D">Eletricidade e Gás</label></div>
                                                          <div style="<?php echo $style1 ?>" class="checkbox"><label><input type="checkbox" name="E" value="E">Água, Esgoto, Atividades de Gestão de Resíduos, e Descontaminação</label></div>
                                                          <div style="<?php echo $style2 ?>"class="checkbox"><label><input type="checkbox" name="F" value="F">Construção</label></div>
                                                          <div style="<?php echo $style1 ?>" class="checkbox"><label><input type="checkbox" name="G" value="G">Comércio: Reparação de Veículos Automotores e Motocicletas</label></div>
                                                          <div style="<?php echo $style2 ?>"class="checkbox"><label><input type="checkbox" name="H" value="H">Transporte, Armazenagem e Correio</label></div>                                        
                                                          <div style="<?php echo $style1 ?>" class="checkbox"><label><input type="checkbox" name="I" value="I">Alojamento e Alimentação</label></div>
                                                          <div style="<?php echo $style2 ?>"class="checkbox"><label><input type="checkbox" name="J" value="J">Informação e Comunicação</label></div>
                                                          <div style="<?php echo $style1 ?>" class="checkbox"><label><input type="checkbox" name="K" value="K">Atividades Finaceiras, de seguros e Serviços Relacionados</label></div>
                                                          <div style="<?php echo $style2 ?>"class="checkbox"><label><input type="checkbox" name="L" value="L">Atividades Imobiliárias</label></div>
                                                   </div>
                                                   <div class="col-lg-6">
                                                          <div style="<?php echo $style1 ?>" class="checkbox"><label><input type="checkbox" name="M" value="M">Atividades Profissionais, científicas e técnicas</label></div>
                                                          <div style="<?php echo $style2 ?>"class="checkbox"><label><input type="checkbox" name="N" value="N">Atividades Administrativas e Serviços Complementares</label></div>
                                                          <div style="<?php echo $style1 ?>" class="checkbox"><label><input type="checkbox" name="O" value="O">Administração Publica, Defesa e Geguridade Social</label></div>
                                                          <div style="<?php echo $style2 ?>"class="checkbox"><label><input type="checkbox" name="P" value="P">Educação</label></div>
                                                          <div style="<?php echo $style1 ?>" class="checkbox"><label><input type="checkbox" name="Q" value="Q">Saúde Humana e Serviços Sociais</label></div>
                                                          <div style="<?php echo $style2 ?>"class="checkbox"><label><input type="checkbox" name="R" value="R">Artes, Cultura e Recreação</label></div>
                                                          <div style="<?php echo $style1 ?>"class="checkbox"><label><input type="checkbox"  name="S" value="S">Outras Atividades de Serviços</label></div>
                                                          <div style="<?php echo $style2 ?>"class="checkbox"><label><input type="checkbox" name="T" value="T"></label>Serviços Domesticos</div>
                                                          <div style="<?php echo $style1 ?>" class="checkbox"><label><input type="checkbox" name="U" value="U">Organismos Internacionais e Outras Instituições Extraterritoriais</label></div>
                                                          <div style="<?php echo $style2 ?>"class="checkbox"><label><input type="checkbox" name="V" value="V">Atividades Mal Definidas</label></div>
                                                          <div style="<?php echo $style1 ?>" class="checkbox"><label><input id='check_obs_outros' type="checkbox" name="outros" value="outros">Outros:</label></div>
                                                          <div style="margin-top: 20px;"class="form-group" id="obs_outros" hidden="on">      
                                                              <textarea name="valor_outros" style="width:90%; border-radius:5px; max-width:90%; max-height:100px" rows="3" id="comment"></textarea>
                                                          </div>
                                                   </div>
                                              </div>
                                              <div class="form-group" style="margin-top:10px;">
                                                  <button type="button" data-toggle="pill" href="#sobre" class="btn btn-default" onclick="mudaAba('0')">Voltar</button> <button onclick="mudaAba('1')" type="button" data-toggle="pill" href="#publico" class="btn btn-default">Próximo</button>
                                              </div>  
                                              </div> 
                                          </div>
                                      
                                      </div>
                                    </div>
                                   <div id="publico" class="tab-pane fade">                        
                                    <div class="row">
                                          <p>Publico Alvo</p>
                                          <div class="col-lg-12">
                                             
                                                  <div class="form-group">
                                                    <p class="control-label col-sm-2" for="nome">Região :</p>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="regiao" name="regiao" placeholder="Região em que atua hoje.">
                                                   </div>                                  
                                                  </div>
                                                 <p for="poder">Poder Aquisitivo</p>
                                                  <div class="form-group"> 
                                                      <p class="control-label col-sm-2" for="Selecione">Selecione :</p>
                                                    <div class="col-sm-10">    
                                                               <div class="col-lg-12">
                                                                 <div style="<?php echo $style1 ?>" class="checkbox"><label><input  type="checkbox" name="baixo">Baixo</label></div>                                    
                                                                 <div style="<?php echo $style2 ?>"class="checkbox"><label><input  type="checkbox" name="medio">Medio</label></div>
                                                                 <div style="<?php echo $style1 ?>"class="checkbox"><label><input  type="checkbox" name="alto">Alto</label></div>                                                           
                                                               </div>                                                 
                                                      </div>
                                                  </div>
                                                 <p for="faixa">Faixa Etária</p>
                                                  <div class="form-group"> 
                                                      <p class="control-label col-sm-2" for="Selecione">Selecione:</p>
                                                    <div class="col-sm-10">    
                                                               <div class="col-lg-12">
                                                                 <div style="<?php echo $style1 ?>" class="checkbox"><label><input  type="checkbox" name="faixa0_10">0 ~ 10 Anos</label></div>                                    
                                                                 <div style="<?php echo $style2 ?>"class="checkbox"><label><input  type="checkbox" name="faixa10_20">10 ~ 20 Anos</label></div>
                                                                 <div style="<?php echo $style1 ?>"class="checkbox"><label><input  type="checkbox" name="faixa20_40">20 ~ 40 Anos</label></div>
                                                                 <div style="<?php echo $style2 ?>"class="checkbox"><label><input  type="checkbox" name="mais40">40 ~ ... Anos</label></div>
                                                                 <div style="<?php echo $style1 ?>"class="checkbox"><label><input  type="checkbox" name="todos">Todos</label></div>
                                                                
                                                               </div>                                                 
                                                      </div>
                                                  </div>
                                                  <p >Sexo</p>
                                                  <div class="form-group"> 
                                                      <p class="control-label col-sm-2" for="Selecione">Selecione:</p>
                                                    <div class="col-sm-10">    
                                                               <div class="col-lg-12">
                                                                 <div style="<?php echo $style1 ?>" class="checkbox"><label><input  type="checkbox" name="masculino">Masculino</label></div>                                    
                                                                 <div style="<?php echo $style2 ?>" class="checkbox"><label><input  type="checkbox" name="feminino">Feminino</label></div>                                                        
                                                               </div> 
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <button type="button" data-toggle="pill" href="#ramo" class="btn btn-default" onclick="mudaAba('0')">Voltar</button> <button onclick="mudaAba('1')" type="button" data-toggle="pill" href="#servicos" class="btn btn-default">Próximo</button>
                                                   </div>      
                                        </div>
                                  </div>
                            </div>
                              <div id="servicos" class="tab-pane fade">
                                  <div class="row">
                                      <p>Quais serviços você já possui na Web ?</p>                         
                                  
                                       <div class="form-group">
                                            <p class="control-label col-sm-2" for="site">Site :</p>
                                            <div class="col-sm-3">
                                                <input class="checkbox" type="checkbox" id="site">                                      
                                                <div id="endereco" hidden="on" >
                                                  <input type="text" class="form-control" id="site" name="site" placeholder="www.exemplo.com.br" >
                                                </div>
                                            </div>                                  
                                          </div>
                                      <div class="form-group">
                                            <p class="control-label col-sm-2" for="face">Facebook :</p>
                                            <div class="col-sm-3">
                                                <input class="checkbox" type="checkbox" id="face">                                      
                                                <div id="linkface" hidden="on" >
                                                  
                                                  <input type="text" class="form-control" id="facebook" name="facebook" placeholder="facebook.com/MEUPERFIL" >
                                                </div>
                                            </div>                                  
                                          </div>
                                      <div class="form-group">
                                            <p class="control-label col-sm-2" for="Instagram">Instagram :</p>
                                            <div class="col-sm-3">
                                                <input class="checkbox" type="checkbox" id="insta">                                      
                                                <div id="linkinsta" hidden="on" >
                                                  
                                                  <input type="text" class="form-control" id="instagram" name="instagram" placeholder="instagram.com/MEUPERFIL" >
                                                </div>
                                            </div>                                  
                                          </div>
                                      <div class="form-group">
                                            <p class="control-label col-sm-2" for="other">Outra :</p>
                                            <div class="col-sm-3">
                                                <input class="checkbox" type="checkbox" id="other">                                      
                                                <div id="linkoutra" hidden="on" >
                                                   <input type="text" class="form-control" id="outra_rede" name="outra_rede" placeholder="Coloque o link aqui..." >
                                                </div>
                                            </div>
                                      </div>
                                  
                              </div>

                             <div class="form-group">
                                  <button type="button" data-toggle="pill" href="#publico" class="btn btn-default" onclick="mudaAba('0')">Voltar</button> <button type="button" onclick="mudaAba('1')" data-toggle="pill" href="#pretensao" class="btn btn-default">Próximo</button>
                             </div> 
                            </div>
                            <div id="pretensao" class="tab-pane fade">
                                  <div class="row">
                                      <p>Qual sua pretensão de investimento?</p>                         
                                  
                                       <div class="form-group">
                                            <p class="control-label col-sm-2" for="site">Valor :</p>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="site" name="pretensao_investimento" placeholder="R$ 1000,00" >                                      
                                            </div>                                  
                                       </div>
                                  </div>
                                  <div class="form-group">
                                      <button type="button" data-toggle="pill" href="#servicos" class="btn btn-default" onclick="mudaAba('0')">Voltar</button> <button type="button" onclick="mudaAba('1')" data-toggle="pill" href="#monitoramento" class="btn btn-default">Próximo</button>
                                  </div> 
                            </div>
                            <div id="monitoramento" class="tab-pane fade">
                                  <div class="row">
                                      <p>Possui algum serviço de monitoramento na internet?</p>                         
                                  
                                       <div class="form-group" >
                                            <div class="col-sm-12">
                                                <input type="radio" name="monitoramento" value="nao"> Não
                                                <input type="radio" name="monitoramento" value="sim" id="yes_monitora"> Sim
                                            </div>
                                            <div class="col-sm-12">
                                              <div id="qual" hidden="on">
                                                  <input type="text" class="form-control" id="qual_monitoramento" name="qual_monitoramento" placeholder="Digite o nome..." style="width:50%; margin: 0 auto">
                                                </div>
                                            </div>                                  
                                       </div>
                                  </div>
                                  <div class="form-group">
                                      <button type="button" data-toggle="pill" href="#pretensao" class="btn btn-default" onclick="mudaAba('0')">Voltar</button> <button type="button" onclick="mudaAba('1')" data-toggle="pill" href="#expectativa" class="btn btn-default">Próximo</button>
                                  </div> 
                            </div>
                            <div id="expectativa" class="tab-pane fade">
                                  <div class="row" style="padding-left:100px;">
                                      <p>Qual sua expectativa?</p>                         
                                  
                                       <div class="form-group">
                                            <div class="col-sm-3">
                                                <div class="checkbox"><label><input type="checkbox" name="aumentar_marca" value="1">Aumentar minha marca</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="fixar_marca" value="1">Fixar minha marca</label></div>
                                            </div>                                  
                                       </div>
                                  </div>

                                  <div class="form-group">
                                      <button type="button" data-toggle="pill" href="#monitoramento" class="btn btn-default" onclick="mudaAba('0')">Voltar</button> <input type="submit" class="btn btn-default" value="Enviar">
                                  </div>

                            </div>
                            
                          </div>
                      </form>
            </div>
    </section>
</div>