<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Produtos
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('dash') ?>"><i class="fa fa-dashboard"></i> Início</a></li>
            <li>Produtos</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <?php 
                            if($this->session->has_userdata('msg')){
                        ?>
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <i class="fa fa-check fa-2x"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong><?= $this->session->flashdata('msg') ?></strong>
                        </div>
                        <?php
                            }
                        ?>
                        <?php 
                            if($this->session->has_userdata('msg_erro')){
                        ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <i class="fa fa-ban fa-2x"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong><?= $this->session->flashdata('msg_erro') ?></strong>
                        </div>
                        <?php
                            }
                        ?>
                        <h3 class="box-title"><?= lang('listar_resultados') ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="tabelaDados" class="table table-hover table-condensed">
                            <thead>
                                <tr>
                                    <th>IMAGEM</th>
                                    <th>ID</th>
                                    <th>CÓDIGO</th>
                                    <th>NOME</th>
                                    <th>CATEGORIA</th>
                                    <th>PREÇO</th>
                                    <th>CUSTO</th>
                                    <th>TIPO</th>
                                    <th>DETALHES</th>
                                    <th>ALERTA DE QUANTIDADE</th>
                                    <th>ENCOMENDÁVEL</th>
                                    <th>OPÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($produtos as $row){ ?>                  
                                <tr>
                                    <td><img src="<?= base_url('app/views/assets/img/'.$row->imagem) ?>" alt="Miniatura" class="img-responsive img-thumbnail sem_miniatura_lista"></td>
                                    <td><?= $row->id ?></td>
                                    <td><?= $row->codigo ?></td>
                                    <td><?= $row->nome ?></td>
                                    <td><?= $row->nome_categoria ?></td>
                                    <td><?= dinheiro($row->preco) ?></td>
                                    <td><?= dinheiro($row->custo) ?></td>
                                    <td><?= $row->tipo == 0 ? 'Simples':'Combo' ?></td>
                                    <td><?= $row->detalhes ?></td>
                                    <td><?= intval($row->alerta_quantidade) ?></td>
                                    <td><?= $row->encomendavel ? 'Sim':'Não' ?></td>
                                    <td>
                                        <div class="text-center">
                                            <div class="btn-group">
                                                <a href="<?= base_url('produtos/editar/'.$row->id) ?>" role="button" class="tip image btn btn-warning btn-xs" title="Editar: <?= $row->nome ?>"><i class="fa fa-edit"></i></a>
                                                <a href="#" role="button" data-toggle="modal" data-target="#deletaModal" data-item="<?= $row->nome ?>" data-codigo="<?= $row->id ?>" class="tip image btn btn-danger btn-xs" title="Deletar: <?= $row->nome ?>"><i class="fa fa-trash-o"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <th>IMAGEM</th>
                                <th>ID</th>
                                <th>CÓDIGO</th>
                                <th>NOME</th>
                                <th>CATEGORIA</th>
                                <th>PREÇO</th>
                                <th>CUSTO</th>
                                <th>TIPO</th>
                                <th>DETALHES</th>
                                <th>ALERTA DE QUANTIDADE</th>
                                <th>ENCOMENDÁVEL</th>
                                <th>OPÇÕES</th>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="<?= base_url('produtos/add') ?>" role="button" class="btn btn-primary btn-sm pull-right"><i class="fa fa-file fa-lg"></i><?= nbs(1) ?>Novo Produto</a>
                    </div>
                    <!-- /.box-footer-->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.-wrapper -->

<?php modal_deletar('Produtos') ?>