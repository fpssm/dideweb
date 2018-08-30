<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Vales
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('dash') ?>"><i class="fa fa-dashboard"></i> Início</a></li>
            <li>Vales</li>
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
                                    <th>ID</th>
                                    <th>CÓDIGO</th>
                                    <th>LOJA</th>
                                    <th>CLIENTE</th>
                                    <th>VALOR</th>
                                    <th>FUNCIONÁRIO</th>
                                    <th>EXPIRA EM</th>
                                    <th>CRIADO EM</th>
                                    <th>DETALHES</th>
                                    <th>OPÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($vales as $row){ ?>                  

                                <tr>
                                    <td><?= $row->id ?></td>
                                    <td><?= $row->codigo ?></td>
                                    <td><?= $row->codigo_loja ?></td>
                                    <td><?= $row->nome_cliente ?></td>
                                    <td><?= dinheiro($row->valor) ?></td>
                                    <td><?= $row->nome_funcionario ?></td>
                                    <td><?= datacurta($row->expira_em) ?></td>
                                    <td><?= datahoracurta($row->criado_em) ?></td>
                                    <td><?= $row->detalhes ?></td>
                                    <td>
                                        <div class="text-center">
                                            <div class="btn-group">
                                                <a href="#" class="tip image btn btn-danger btn-xs" data-toggle="tooltip" title="Editar: <?= $row->id ?>"><i class="fa fa-edit"></i></a>
                                                <a href="#" class="tip image btn btn-warning btn-xs" data-toggle="tooltip" title="Deletar: <?= $row->id ?>"><i class="fa fa-trash-o"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>CÓDIGO</th>
                                    <th>LOJA</th>
                                    <th>CLIENTE</th>
                                    <th>VALOR</th>
                                    <th>FUNCIONÁRIO</th>
                                    <th>EXPIRA EM</th>
                                    <th>CRIADO EM</th>
                                    <th>DETALHES</th>
                                    <th>OPÇÕES</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="<?= base_url('vales/add') ?>" role="button" class="btn btn-primary btn-sm pull-right"><i class="fa fa-file fa-lg"></i><?= nbs(1) ?>Novo Vale-Presente</a>
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
