<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Vendas <small>- Fechadas</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('dash'); ?>"><i class="fa fa-dashboard"></i> Início</a></li>
            <li>Vendas</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title"><?= lang('listar_resultados'); ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="tabelaDados" class="table table-hover table-condensed">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>REFERÊNCIA</th>
                                    <th>CLIENTE</th>
                                    <th>ABERTURA</th>
                                    <th>FECHAMENTO</th>
                                    <th>TOTAL</th>
                                    <th>PAGAMENTO</th>
                                    <th>RECEBIDA POR</th>
                                    <th>OPÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($fechadas as $row){ ?>                  
                                <tr>
                                    <td><?= $row->id; ?></td>
                                    <td><?= $row->referencia; ?></td>
                                    <td><?= $row->id_cliente; ?></td>
                                    <td><?= $row->abertura; ?></td>
                                    <td><?= $row->fechamento; ?></td>
                                    <td><?= $row->total; ?></td>
                                    <td><?= $row->id_pagamento; ?></td>
                                    <td><?= $row->id_funcionario; ?></td>
                                    <td>
                                        <div class="text-center">
                                            <div class="btn-group">
                                                <a href="#" class="tip image btn btn-danger btn-xs" data-toggle="tooltip" title="Editar: <?= $row->id; ?>"><i class="fa fa-edit fa-lg"></i></a>
                                                <a href="#" class="tip image btn btn-warning btn-xs" data-toggle="tooltip" title="Deletar: <?= $row->id; ?>"><i class="fa fa-trash-o fa-lg"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>REFERÊNCIA</th>
                                    <th>CLIENTE</th>
                                    <th>ABERTURA</th>
                                    <th>FECHAMENTO</th>
                                    <th>TOTAL</th>
                                    <th>PAGAMENTO</th>
                                    <th>RECEBIDA POR</th>
                                    <th>OPÇÕES</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        Footer
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
