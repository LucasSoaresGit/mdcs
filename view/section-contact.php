<?php 
    
    include_once("model/contact-class.php");
    $sucesso = false;
    if(isset($_POST['nome']) && $_POST['nome'] != '' && isset($_POST['email']) && $_POST['email'] != '' && isset($_POST['mensagem']) && $_POST['mensagem'] != ''){
        $contact = new Contact();
        $contact->adicionar();
        if($contact->send())
            $sucesso = true;
    }

 ?>

<section id="contact" class="container content-section text-center intro-contato" style="margin-bottom: 0px">
    <form action="index.php" method="POST">
        <div class="row" style=" background-color:rgba(255,255,255,0.2); padding: 20px 0px 20px 0px; margin-left: 0px; margin-right: 0px">
            <div class="col-lg-8 col-lg-offset-2">
                <h2 style="color:#333">Contato</h2>
                <p style="color:#333">Digite seus dados e clique em enviar, logo entraremos em contato!</p>
                <div class="row">
                    <div class="form-group">
                      <p class="control-label col-sm-2" for="nome">Nome:*</p>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                      <p class="control-label col-sm-2" for="nome">Email:*</p>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu email">
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                      <p class="control-label col-sm-2" for="nome">Empresa:*</p>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Digite o nome da sua empresa">
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                      <p class="control-label col-sm-2" for="nome">Mensagem:*</p>
                      <div class="col-sm-10">
                          <textarea name="mensagem" placeholder="Digite a mensagem" style="width:100%; min-width: 100%; max-width:100%; max-height:200px; margin-bottom:50px;"></textarea>
                      </div>
                    </div>
                </div>
                <ul class="list-inline banner-social-buttons">
                    <li><input type="submit" class="btn btn-default btn-lg" value="Enviar"></li>
                    <li><input type="button" onclick="window.location = 'index.php'" class="btn btn-default btn-lg" value="Cancalar"></li>
                </ul>
                <ul class="list-inline banner-social-buttons">
                  <?php if($sucesso){ ?>
                        <li style="color:#393; text-transform: uppercase"><b>Mensagem enviada com sucesso!</b></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </form>
</section>
