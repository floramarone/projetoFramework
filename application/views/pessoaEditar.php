<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    </head>
    <body>
        <a href="<?php echo base_url() . 'pessoa';?>">Voltar</a>
        <div class="jumbotron text-center">
            <h1>Editar Pessoa</h1><br>
        <div class="row">
            <!--Responsivo para smartphone, tablet e PC-->
            <div class="col-xs-1 col-sm-1 col-lg-3"></div>
            <div class="col-xs-10 col-sm-10 col-lg-6">
        <?php echo form_open('pessoa/atualizar'); ?>
            <input type="hidden" name="idPessoa" required value="<?php echo $pessoa[0]->idPessoa; ?>"/>
            <input class="form-control" type="text" name="nome" required value="<?php echo $pessoa[0]->nome; ?>"/>
            <br><br>
            <input class="form-control" type="tel" name="telefone" required value="<?php echo $pessoa[0]->telefone; ?>"/>
            <br><br>
            <input class="form-control" type="email" name="email" required value="<?php echo $pessoa[0]->email; ?>"/>
            <br><br>
            <input class="form-control" type="text" name="endereco" required value="<?php echo $pessoa[0]->endereco; ?>"/>
            <br><br>
            <input type="radio" name="tpPessoa" required value="Fisica"
                   <?php if(!is_null($pessoa[0]->cpf)){ echo 'checked'; } ?> 
                   <?php if(!is_null($pessoa[0]->cnpj)){ echo 'disabled'; } ?>>Fisíca
            <input type="radio" name="tpPessoa" required value="Juridica"
                   <?php if(!is_null($pessoa[0]->cnpj)){ echo 'checked'; } ?>
                   <?php if(!is_null($pessoa[0]->cpf)){ echo 'disabled'; } ?>>Jurídica
            <br><br>
            <input class="form-control" type="number" name="cpf" value="<?php echo $pessoa[0]->cpf; ?>" 
                <?php if(!is_null($pessoa[0]->cnpj)){ echo 'disabled'; } ?>/>
            
            <br><br>
            <input type="radio" name="sexo" value="F" <?php if(!is_null($pessoa[0]->cnpj)){ echo 'disabled'; } ?>>Feminino
            <input type="radio" name="sexo" value="M" <?php if(!is_null($pessoa[0]->cnpj)){ echo 'disabled'; } ?>>Masculino
            <br><br>
            <input class="form-control" type="number" name="cnpj" value="<?php echo $pessoa[0]->cnpj; ?>"
                   <?php if(!is_null($pessoa[0]->cpf)){ echo 'disabled'; } ?>/>
            <br><br>
            <input class="form-control" type="text" name="nomeFantasia" value="<?php echo $pessoa[0]->nomeFantasia; ?>"
                   <?php if(!is_null($pessoa[0]->cpf)){ echo 'disabled'; } ?>/>
            <br><br>
            <input type="submit" name="salvarPF" value="Salvar">
            
        <?php echo form_close(); ?>
        </div>
        </div>
        </div>
    </body>
</html>
