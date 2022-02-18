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
        <a href="<?php echo base_url() . 'home'; ?>">Home</a>
        <div class="jumbotron text-center" >
        <div class="row">
            <!--Responsivo para smartphone, tablet e PC-->
            <div class="col-xs-1 col-sm-1 col-lg-3"></div>
            <div class="col-xs-10 col-sm-10 col-lg-6">
            <h1>Cadastro de Carro</h1><br>
        <?php echo form_open('carro/inserir'); ?>
        <input class="form-control" type="text" name="marca" required placeholder="Marca aqui..."/>
        <br><br>
        <input class="form-control" type="text" name="modelo" required placeholder="Modelo aqui..."/>
        <br><br>
        <input class="form-control" type="number" name="portas" required placeholder="Num Portas aqui..."/>
        <br><br>
        <input class="form-control" type="color" name="cor" required placeholder="Cor aqui..."/>
        <br><br>
        <input class="form-control" type="text" name="placa" placeholder="Placa aqui..."/>
        <br><br>
        <select class="form-control" name="idPessoa">
            <option value="">Proprietário</option> 
            <?php foreach ($pessoas as $pes): ?>
                <option value="<?php echo $pes->idPessoa; ?>">
                    <?php echo $pes->nome; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br><br><br>
        <input type="submit" name="salvarPF" value="Salvar">
        <input type="reset" name="limpar" value="Limpar">
        <?php echo form_close(); ?>
        </div>
        </div>
        </div>
        <div class="jumbotron text-center" >
            <h2>Lista de Carros</h2><br>
        <div id="pricing" class="container-fluid">
        <table class="table table-bordered table-striped" style="background-color:#9dbbc7">
            <thead>
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Placa</th>
                    <th>Portas</th>
                    <th>Cor</th>
                    <th>Proprietário</th>
                    <th>Funções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carros as $car): ?>
                    <tr>
                        <td><?php echo $car->marca; ?></td>
                        <td><?php echo $car->modelo; ?></td>
                        <td><?php echo $car->placa; ?></td>
                        <td><?php echo $car->portas; ?></td>
                        <td><input type="color" disabled value="<?php echo $car->cor; ?>"/></td>
                        <td><?php
                            foreach ($pessoas as $pes):
                                if($pes->idPessoa==$car->idPessoa){
                                    echo $pes->nome;
                                    break;
                                }
                            endforeach;
                            ?>
                        </td>
                        <td>
                            <a href="<?php
                               echo base_url() .
                               'carro/editar/' .
                               $car->idCarro;
                               ?>">Editar</a> | 
                            <a href="<?php
                        echo base_url() .
                        'carro/excluir/' .
                        $car->idCarro;
                        ?>">Excluir</a>
                        </td>
                    </tr>
<?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </body>
</html>
