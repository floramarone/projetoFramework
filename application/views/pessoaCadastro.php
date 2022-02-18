<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 
        <a href="<?php echo base_url() . 'home'; ?>">Home</a>
        <div class="jumbotron text-center">
            <h1>Cadastro de Pessoa</h1><br>
            <div class="row">
                <!--Responsivo para smartphone, tablet e PC-->
                <div class="col-xs-1 col-sm-1 col-lg-3"></div>
                <div class="col-xs-10 col-sm-10 col-lg-6">
                    <?php echo form_open('pessoa/inserir'); ?>
                    <input class="form-control" type="text" name="nome" required placeholder="Nome aqui..."/>
                    <br><br>
                    <input class="form-control" type="tel" name="telefone" required placeholder="Telefone aqui..."/>
                    <br><br>
                    <input class="form-control" type="email" name="email" required placeholder="E-mail aqui..."/>
                    <br><br>
                    <input class="form-control" type="text" name="endereco" required placeholder="Enderço aqui..."/>
                    <br><br>
                    <input type="radio" name="tpPessoa" required value="Fisica">Fisíca
                    <input type="radio" name="tpPessoa" required value="Juridica">Jurídica
                    <br><br>
                    <input class="form-control" type="number" name="cpf" placeholder="CPF aqui..."/>
                    <br><br>
                    <input type="radio" name="sexo" value="F">Feminino
                    <input type="radio" name="sexo" value="M">Masculino
                    <br><br>
                    <input class="form-control" type="number" name="cnpj" placeholder="CNPJ aqui..."/>
                    <br><br>
                    <input class="form-control" type="text" name="nomeFantasia" placeholder="Nome Fantasia aqui..."/>
                    <br><br>
                    <input type="submit" name="salvarPF" value="Salvar">
                    <input type="reset" name="limpar" value="Limpar">
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
        <div class="jumbotron text-center">
            <h2>Lista de Pessoas</h2><br>
            <div id="pricing" class="container-fluid">
                <table id="lista" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nome</th><th>E-mail</th><th>Telefone</th><th>Funções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pessoas as $pes): ?>
                            <tr>
                                <td><?php echo $pes->nome; ?></td>
                                <td><?php echo $pes->email; ?></td>
                                <td><?php echo $pes->telefone; ?></td>
                                <td>
                                    <?php
                                    if (!is_null($pes->cpf)) {
                                        echo 'PF';
                                    } else {
                                        echo 'PJ';
                                    }
                                    ?>

                                    <a href="<?php
                                    echo base_url() .
                                    'pessoa/editar/' .
                                    $pes->idPessoa;
                                    ?>">Editar</a> | 
                                    <a href="<?php
                                   echo base_url() .
                                   'pessoa/excluir/' .
                                   $pes->idPessoa;
                                   ?>">Excluir</a>

                                </td>
                            </tr>
                            <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    
