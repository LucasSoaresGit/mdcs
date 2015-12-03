<section id="about" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-12 ">
            <h2>Questionário</h2>
            <p>A Control system ira avaliar como é o marketing digital de sua empresa, é de suma importância que você seja sincero com as respostas.</p>

                <ul class="nav navbar-nav">
                  <li page-scroll class="active"><a data-toggle="pill" href="#sobre">Sua Empresa</a></li>
                  <li page-scroll><a data-toggle="pill" href="#ramo">Ramo de Atividade</a></li>
                  <li page-scroll><a data-toggle="pill" href="#publico">Publico</a></li>
                  <li page-scroll><a data-toggle="pill" href="#servicos">Serviços na Web</a></li>
                  <li page-scroll><a data-toggle="pill" href="#investimento">Investimento</a></li>
                </ul>
                
                <div class="tab-content">
                  <div id="sobre" class="tab-pane fade in active">
                    <div class="row">
                        <p>Campos com "*" são obrigatórios</p>
                        <div class="col-lg-8">
                           <form class="form-horizontal" role="form">
                                <div class="form-group">
                                  <p class="control-label col-sm-2" for="nome">*Nome :</p>
                                  <div class="col-sm-10">
                                      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome da empresa" onchange="setSession(this.value,this.name);"
                                             value="<?php
                                             if(isset($_SESSION['questionario']['empresa']['nome_empresa']) && $_SESSION['questionario']['empresa']['nome_empresa'] != ""){
                                                 echo $_SESSION['questionario']['empresa']['nome_empresa'];
                                             } 
                                                 ?>"
                                             >
                                  </div>
                                  
                                </div>
                                <div class="form-group">
                                  <p class="control-label col-sm-2" for="cnpj">Cnpj :</p>
                                  <div class="col-sm-10">
                                    <input type="number" class="form-control" id="cnpj" name="cnpj" placeholder="CNPJ" onchange="setSession(this.value,this.name);" 
                                           value="<?php
                                             if($_SESSION['questionario']['empresa']['cnpj']!= ""){
                                                 echo $_SESSION['questionario']['empresa']['cnpj'];
                                             } 
                                                 ?>"
                                                 >
                                  </div>                                   
                                </div>
                                <div class="form-group">
                                  <p class="control-label col-sm-2" for="telefone">Telefone:</p>
                                  <div class="col-sm-10">
                                    <input type="number" class="form-control" id="telefone" name="telefone" placeholder="Telefone" onchange="setSession(this.value,this.name);"
                                           value="<?php
                                             if($_SESSION['questionario']['empresa']['telefone']!= ""){
                                                 echo $_SESSION['questionario']['empresa']['telefone'];
                                             } 
                                                 ?>"
                                           >
                                  </div>                                
                                </div>
                                 <div class="form-group">
                                  <p class="control-label col-sm-2" for="email">*E-mail:</p>
                                  <div class="col-sm-10">
                                      <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" onchange="setSession(this.value,this.name);" 
                                             value="<?php
                                             if(isset($_SESSION['questionario']['empresa']['email']) && $_SESSION['questionario']['empresa']['email'] != ""){
                                                 echo $_SESSION['questionario']['empresa']['email'];
                                             } 
                                             ?>"
                                             >
                                  </div>
                                 
                                </div>
                                <div class="form-group">
                                <button type="button" data-toggle="pill" href="#ramo" class="btn btn-default">Próximo</button>
                                 </div>  
                            </form>
                        </div>
                        </div>
                    </div>
                    <div id="ramo" class="tab-pane fade">
                        <div class="row">
                        <p>Ramos de Atividade</p>
                         
                        <form method="POST" action="Ajax/set_session_cadastro.php" class="form-horizontal" role="form">                               
                                <div class="form-group">        
                                  <div class="col-lg-12">
                                      
                                      <?php $color1 = "#333333"; ?>
                                    <div class="row">
                                         <div class="col-lg-6">
                                             <div style="background-color: <?php echo $color1 ?>" class="checkbox"><label><input type="checkbox" name="A" onchange="setSession(this.value,this.name);">Agricultura, Pecuária, Produção Florestal, Pesca e Aquicultura</label></div>                                    
                                                <div class="checkbox"><label><input type="checkbox" name="B" onchange="setSession(this.value,this.name);">Industrias Extrativas</label></div>                                                
                                                <div style="background-color: <?php echo $color1 ?>"class="checkbox"><label><input type="checkbox" name="C" onchange="setSession(this.value,this.name);">Indústrias de transformação</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="D"onchange="setSession(this.value,this.name);">Eletricidade e Gás</label></div>
                                                <div style="background-color: <?php echo $color1 ?>" class="checkbox"><label><input type="checkbox" name="E"onchange="setSession(this.value,this.name);">Água, Esgoto, Atividades de Gestão de Resíduos, e Descontaminação</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="F"onchange="setSession(this.value,this.name);">Construção</label></div>
                                                <div style="background-color: <?php echo $color1 ?>" class="checkbox"><label><input type="checkbox" name="G"onchange="setSession(this.value,this.name);">Comércio: Reparação de Veículos Automotores e Motocicletas</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="H"onchange="setSession(this.value,this.name);">Transporte, Armazenagem e Correio</label></div>                                        
                                                <div style="background-color: <?php echo $color1 ?>" class="checkbox"><label><input type="checkbox" name="I"onchange="setSession(this.value,this.name);">Alojamento e Alimentação</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="J"onchange="setSession(this.value,this.name);">Informação e Comunicação</label></div>
                                                <div style="background-color: <?php echo $color1 ?>" class="checkbox"><label><input type="checkbox" name="K"onchange="setSession(this.value,this.name);">Atividades Finaceiras, de seguros e Serviços Relacionados</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="L"onchange="setSession(this.value,this.name);">Atividades Imobiliárias</label></div>
                                         </div>
                                         <div class="col-lg-6">
                                                <div style="background-color: <?php echo $color1 ?>" class="checkbox"><label><input type="checkbox" name="M"onchange="setSession(this.value,this.name);">Atividades Profissionais, científicas e técnicas</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="N"onchange="setSession(this.value,this.name);">Atividades Administrativas e Serviços Complementares</label></div>
                                                <div style="background-color: <?php echo $color1 ?>" class="checkbox"><label><input type="checkbox" name="O"onchange="setSession(this.value,this.name);">Administração Publica, Defesa e Geguridade Social</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="P"onchange="setSession(this.value,this.name);">Educação</label></div>
                                                <div style="background-color: <?php echo $color1 ?>" class="checkbox"><label><input type="checkbox" name="Q"onchange="setSession(this.value,this.name);">Saúde Humana e Serviços Sociais</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="R"onchange="setSession(this.value,this.name);">Artes, Cultura e Recreação</label></div>
                                                <div style="background-color: <?php echo $color1 ?>"class="checkbox"><label><input type="checkbox"  name="S"onchange="setSession(this.value,this.name);">Outras Atividades de Serviços</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="T"onchange="setSession(this.value,this.name);"></label>Serviços Domesticos</div>
                                                <div style="background-color: <?php echo $color1 ?>" class="checkbox"><label><input type="checkbox" name="U"onchange="setSession(this.value,this.name);">Organismos Internacionais e Outras Instituições Extraterritoriais</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="V"onchange="setSession(this.value,this.name);">Atividades Mal Definidas</label></div>
                                                <div style="background-color: <?php echo $color1 ?>" class="checkbox"><label><input type="checkbox" name="outros"onchange="setSession(this.value,this.name);">Outros:</label></div>
                                                <div style="margin-top: 20px;"class="form-group">      
                                                    
                                                    <textarea name="valor_outros" class="form-control" rows="5" id="comment" onchange="setSession(this.value,this.name);">
                                                        <?php
                                                              if(isset($_SESSION['questionario']['ramo_atividade']['valor_outros']) && $_SESSION['questionario']['ramo_atividade']['valor_outros'] != ""){
                                                                 echo $_SESSION['questionario']['ramo_atividade']['valor_outros'];
                                                                } 
                                                        ?>
                                                    </textarea>
                                                </div>
                                         </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="subbmit" data-toggle="pill" href="#publico" class="btn btn-default">Próximo</button>
                                    </div>  
                                    </div> 
                                </div>
                            </form>
                            </div>
                          </div>
                         <div id="publico" class="tab-pane fade">                        
                          <div class="row">
                                <p>Publico Alvo</p>
                                    <div class="col-lg-8">
                                       <form class="form-horizontal" role="form">
                                            <div class="form-group">
                                              <p class="control-label col-sm-2" for="nome">Região :</p>
                                              <div class="col-sm-10">
                                                  <input type="text" class="form-control" id="regiao" name="regiao" placeholder="Região em que atua hoje." onchange="setSession(this.value,this.name);"
                                                    value="<?php
                                                    if(isset($_SESSION['questionario']['publico']['regiao']) && $_SESSION['questionario']['publico']['regiao'] != ""){
                                                        echo $_SESSION['questionario']['publico']['regiao'];
                                                    } 
                                                        ?>"
                                                    >
                                             </div>                                  
                                            </div>
                                           <p for="poder">Poder Aquisitivo</p>
                                            <div class="form-group"> 
                                                <p class="control-label col-sm-2" for="Selecione">Selecione :</p>
                                              <div class="col-sm-10">    
                                                         <div class="col-lg-6">
                                                           <div style="background-color: <?php echo $color1 ?>" class="checkbox"><label><input onchange="setSession(this.value,this.name);" type="checkbox" name="baixo">Baixo</label></div>                                    
                                                           <div class="checkbox"><label><input onchange="setSession(this.value,this.name);" type="checkbox" name="medio">Medio</label></div>
                                                           <div style="background-color: <?php echo $color1 ?>"class="checkbox"><label><input onchange="setSession(this.value,this.name);" type="checkbox" name="alto">Alto</label></div>                                                           
                                                         </div>                                                 
                                                </div>
                                            </div>
                                           <p for="faixa">Faixa Etária</p>
                                            <div class="form-group"> 
                                                <p class="control-label col-sm-2" for="Selecione">Selecione:</p>
                                              <div class="col-sm-10">    
                                                         <div class="col-lg-6">
                                                           <div style="background-color: <?php echo $color1 ?>" class="checkbox"><label><input onchange="setSession(this.value,this.name);" type="checkbox" name="0-10">0 ~ 10 Anos</label></div>                                    
                                                           <div class="checkbox"><label><input onchange="setSession(this.value,this.name);" type="checkbox" name="10-20">10 ~ 20 Anos</label></div>
                                                           <div style="background-color: <?php echo $color1 ?>"class="checkbox"><label><input onchange="setSession(this.value,this.name);" type="checkbox" name="20-40">20 ~ 40 Anos</label></div>
                                                           <div class="checkbox"><label><input onchange="setSession(this.value,this.name);" type="checkbox" name="40+">40 ~ ... Anos</label></div>
                                                           <div style="background-color: <?php echo $color1 ?>"class="checkbox"><label><input onchange="setSession(this.value,this.name);" type="checkbox" name="todos">Todos</label></div>
                                                          
                                                         </div>                                                 
                                                </div>
                                            </div>
                                            <p for="sexo">Sexo</p>
                                            <div class="form-group"> 
                                                <p class="control-label col-sm-2" for="Selecione">Selecione:</p>
                                              <div class="col-sm-10">    
                                                         <div class="col-lg-6">
                                                           <div style="background-color: <?php echo $color1 ?>" class="checkbox"><label><input onchange="setSession(this.value,this.name);" type="checkbox" name="masculino">Masculino</label></div>                                    
                                                           <div class="checkbox"><label><input onchange="setSession(this.value,this.name);" type="checkbox" name="feminino">Feminino</label></div>                                                        
                                                         </div> 
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="subbmit" data-toggle="pill" href="#servicos" class="btn btn-default">Próximo</button>
                                             </div>      
                                       </form>
                                    </div>
                            </div>
                     </div>
                    <div id="servicos" class="tab-pane fade">
                        <div class="row">
                        <p>Quais serviços que ja possui na Web ?</p>                         
                        <form method="POST" class="form-horizontal" role="form"> 
                             <div class="form-group">
                                  <p class="control-label col-sm-2" for="site">Site :</p>
                                  <div class="col-sm-3">
                                      <input class="checkbox" type="checkbox" id="site">                                      
                                      <div id="endereco" hidden="on" class="modal-body">
                                        <p>Endereço.</p>
                                        <input type="text" class="form-control" id="site" name="site" placeholder="www.exemplo.com.br" onchange="setSession(this.value,this.name);"
                                               value="<?php
                                                    if(isset($_SESSION['questionario']['servicos']['site']) && $_SESSION['questionario']['servicos']['site'] != ""){
                                                        echo $_SESSION['questionario']['servicos']['site'];
                                                    } 
                                                        ?>"
                                                        >
                                      </div>
                                  </div>                                  
                                </div>
                            <div class="form-group">
                                  <p class="control-label col-sm-2" for="face">Facebook :</p>
                                  <div class="col-sm-3">
                                      <input class="checkbox" type="checkbox" id="face">                                      
                                      <div id="linkface" hidden="on" class="modal-body">
                                        <p>Endereço.</p>
                                        <input type="text" class="form-control" id="facebook" name="facebook" placeholder="facebook.com/MEUPERFIL" onchange="setSession(this.value,this.name);"
                                               value="<?php
                                                    if(isset($_SESSION['questionario']['servicos']['facebook']) && $_SESSION['questionario']['servicos']['facebook'] != ""){
                                                        echo $_SESSION['questionario']['servicos']['facebook'];
                                                    } 
                                                        ?>"
                                                        >
                                      </div>
                                  </div>                                  
                                </div>
                            <div class="form-group">
                                  <p class="control-label col-sm-2" for="Instagram">Instagram :</p>
                                  <div class="col-sm-3">
                                      <input class="checkbox" type="checkbox" id="insta">                                      
                                      <div id="linkinsta" hidden="on" class="modal-body">
                                        <p>Endereço.</p>
                                        <input type="text" class="form-control" id="instagram" name="instagram" placeholder="instagram.com/MEUPERFIL" onchange="setSession(this.value,this.name);"
                                               value="<?php
                                                    if(isset($_SESSION['questionario']['servicos']['instagram']) && $_SESSION['questionario']['servicos']['instagram'] != ""){
                                                        echo $_SESSION['questionario']['servicos']['instagram'];
                                                    } 
                                                        ?>"
                                                        >
                                      </div>
                                  </div>                                  
                                </div>
                            <div class="form-group">
                                  <p class="control-label col-sm-2" for="other">Outra :</p>
                                  <div class="col-sm-3">
                                      <input class="checkbox" type="checkbox" id="other">                                      
                                      <div id="linkoutra" hidden="on" class="modal-body">
                                        <p>Endereço.</p>
                                        <input type="text" class="form-control" id="outra_rede" name="outra_rede" placeholder="Coloque o link aqui..." onchange="setSession(this.value,this.name);"
                                               value="<?php
                                                    if(isset($_SESSION['questionario']['servicos']['outra_rede']) && $_SESSION['questionario']['servicos']['outra_rede'] != ""){
                                                        echo $_SESSION['questionario']['servicos']['outra_rede'];
                                                    } 
                                                        ?>"
                                                        >
                                      </div>
                                  </div>
                                </div>
                            <div class="form-group">
                                                <button type="subbmit" data-toggle="pill" href="#investimento" class="btn btn-default">Próximo</button>
                            </div> 
                        </form>
                    </div>
                    </div>
                     <div id="investimento" class="tab-pane fade">
                        <div class="row">
                        <p>Qual seu investimento ?</p>                         
                        <form method="POST" class="form-horizontal" role="form"> 
                             <div class="form-group">
                                  <p class="control-label col-sm-2" for="site">Valor :</p>
                                  <div class="col-sm-6">
                                      <input type="text" class="form-control" id="investimento" name="investimento" placeholder="Valor que é investido em marketing." onchange="setSession(this.value,this.name);"
                                                    value="<?php
                                                    if(isset($_SESSION['questionario']['investimento']['valor']) && $_SESSION['questionario']['investimento']['valor'] != ""){
                                                        echo $_SESSION['questionario']['investimento']['valor'];
                                                    } 
                                                        ?>"
                                                    >
                                  </div> 
                                  
                                </div>
                            
                        </form>
                    </div>
                    </div>
               
    </div>
</section>