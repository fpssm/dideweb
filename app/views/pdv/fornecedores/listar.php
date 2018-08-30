<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Fornecedores
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('dash') ?>"><i class="fa fa-dashboard"></i> Início</a></li>
            <li>Fornecedores</li>
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
                                    <th>NOME</th>
                                    <th>E-MAIL</th>
                                    <th>TELEFONE</th>
                                    <th>ENDEREÇO</th>
                                    <th>COMPLEMENTO</th>
                                    <th>CIDADE</th>
                                    <th>ESTADO</th>
                                    <th>CEP</th>
                                    <th>VENDEDOR</th>
                                    <th>TELEFONE DO VENDEDOR</th>
                                    <th>DIAS DE VISITA</th>
                                    <th>DIAS DE ENTREGA</th>
                                    <th>DESCRIÇÃO</th>
                                    <th>OPÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($fornecedores as $row){ ?>                  
                                    <tr>
                                        <td><?= $row->id ?></td>
                                        <td><?= $row->nome ?></td>
                                        <td><?= $row->email ?></td>
                                        <td><?= mask($row->telefone,'(##) ####-####') ?></td>
                                        <td><?= $row->endereco1 ?></td>
                                        <td><?= $row->endereco2 ?></td>
                                        <td><?= $row->cidade ?></td>
                                        <td><?= $row->estado ?></td>
                                        <td><?= mask($row->cep,'#####-###') ?></td>
                                        <td><?= $row->vendedor ?></td>
                                        <td><?= mask($row->telefone_vendedor,'(##) #####-####') ?></td>
                                        <td><?= semanalize($row->dias_visita) ?></td>
                                        <td><?= semanalize($row->dias_entrega) ?></td>
                                        <td><?= character_limiter($row->descricao, 20,'[...]') ?></td>
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
                                    <th>NOME</th>
                                    <th>E-MAIL</th>
                                    <th>TELEFONE</th>
                                    <th>ENDEREÇO</th>
                                    <th>COMPLEMENTO</th>
                                    <th>CIDADE</th>
                                    <th>ESTADO</th>
                                    <th>CEP</th>
                                    <th>VENDEDOR</th>
                                    <th>TELEFONE DO VENDEDOR</th>
                                    <th>DIAS DE VISITA</th>
                                    <th>DIAS DE ENTREGA</th>
                                    <th>DESCRIÇÃO</th>
                                    <th>OPÇÕES</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="<?= base_url('fornecedores/add') ?>" role="button" class="btn btn-primary btn-sm pull-right"><i class="fa fa-file fa-lg"></i><?= nbs(1) ?>Novo Fornecedor</a>
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
