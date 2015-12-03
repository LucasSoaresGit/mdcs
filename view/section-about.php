<section id="about" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-12 ">
            <h2>Questionário</h2>
            <p>A Control system ira avaliar como é o marketing digital de sua empresa, é de suma importância que você seja sincero com as respostas.</p>

                <ul class="nav nav-pills">
                  <li class="active"><a data-toggle="pill" href="#sobre">Sua Empresa</a></li>
                  <li><a data-toggle="pill" href="#ramo">Ramo de Atividade</a></li>
                  <li><a data-toggle="pill" href="#menu2">Menu 2</a></li>
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
                                             if($_SESSION['questionario']['empresa']['nome_empresa']!= ""){
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
                                             if($_SESSION['questionario']['empresa']['email']!= ""){
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
                        <p>Ramo de Atividade</p>
                         
                        <form method="POST" action="Ajax/set_session_cadastro.php" class="form-horizontal" role="form"> 
                               <p class="control-label col-sm-2" for="nome">Ramos :</p>
                                <div class="form-group">        
                                  <div class="col-lg-12">
                                      
                                      <?php $color1 = "#333333"; ?>
                                    <div class="row">
                                         <div class="col-lg-6">
                                                <div style="background-color: <?php echo $color1 ?>" class="checkbox"><label><input type="checkbox" name="A">Agricultura, Pecuária, Produção Florestal, Pesca e Aquicultura</label></div>                                    
                                                <div class="checkbox"><label><input type="checkbox" name="B">Industrias Extrativas</label></div>
                                                <div style="background-color: <?php echo $color1 ?>"class="checkbox"><label><input type="checkbox" name="C">Indústrias de transformação</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="D">Eletricidade e Gás</label></div>
                                                <div style="background-color: <?php echo $color1 ?>" class="checkbox"><label><input type="checkbox" name="E">Água, Esgoto, Atividades de Gestão de Resíduos, e Descontaminação</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="F">Construção</label></div>
                                                <div style="background-color: <?php echo $color1 ?>" class="checkbox"><label><input type="checkbox" name="G">Comércio: Reparação de Veículos Automotores e Motocicletas</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="H">Transporte, Armazenagem e Correio</label></div>                                        
                                                <div style="background-color: <?php echo $color1 ?>" class="checkbox"><label><input type="checkbox" name="I">Alojamento e Alimentação</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="J">Informação e Comunicação</label></div>
                                                <div style="background-color: <?php echo $color1 ?>" class="checkbox"><label><input type="checkbox" name="K">Atividades Finaceiras, de seguros e Serviços Relacionados</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="L">Atividades Imobiliárias</label></div>
                                         </div>
                                         <div class="col-lg-6">
                                                <div style="background-color: <?php echo $color1 ?>" class="checkbox"><label><input type="checkbox" name="M">Atividades Profissionais, científicas e técnicas</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="N">Atividades Administrativas e Serviços Complementares</label></div>
                                                <div style="background-color: <?php echo $color1 ?>" class="checkbox"><label><input type="checkbox" name="O">Administração Publica, Defesa e Geguridade Social</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="P">Educação</label></div>
                                                <div style="background-color: <?php echo $color1 ?>" class="checkbox"><label><input type="checkbox" name="Q">Saúde Humana e Serviços Sociais</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="R">Artes, Cultura e Recreação</label></div>
                                                <div style="background-color: <?php echo $color1 ?>"class="checkbox"><label><input type="checkbox"  name="S">Outras Atividades de Serviços</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="T"></label>Serviços Domesticos</div>
                                                <div style="background-color: <?php echo $color1 ?>" class="checkbox"><label><input type="checkbox" name="U">Organismos Internacionais e Outras Instituições Extraterritoriais</label></div>
                                                <div class="checkbox"><label><input type="checkbox" name="V">Atividades Mal Definidas</label></div>
                                                <div style="background-color: <?php echo $color1 ?>" class="checkbox"><label><input type="checkbox" name="Outros">Outros:</label></div>
                                                <div style="margin-top: 20px;"class="form-group">                                                        
                                                        <textarea name="valor_outros" class="form-control" rows="5" id="comment"></textarea>
                                                </div>
                                         </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="subbmit" class="btn btn-default">Próximo</button>
                                    </div>  
                                      
                                      
                                    </div>  
                                    
                                 
                                </div>
                                
                            </form>
                        
                    </div>
                  </div>
                  <div id="menu" class="tab-pane fade">
                    <div class="row">
                        <div class="col-lg-6">
                            
                        </div>
                    </div>
                  </div>
                  </div>
                
                </div>
            
        </div>
    </div>
</section>