<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Lojas
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('dash'); ?>"><i class="fa fa-dashboard"></i> Início</a></li>
            <li>Lojas</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"><?= lang('listar_resultados'); ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="example" class="table table-hover table-condensed">
                            <thead>
                                <tr>
                                    <th>LOGO</th>
                                    <th>ID</th>
                                    <th>CÓDIGO</th>
                                    <th>RAZÃO SOCIAL</th>
                                    <th>NOME FANTASIA</th>
                                    <th>CNPJ</th>
                                    <th>I.E.</th>
                                    <th>E-MAIL</th>
                                    <th>TELEFONE</th>
                                    <th>ENDEREÇO</th>
                                    <th>COMPLEMENTO</th>
                                    <th>CIDADE</th>
                                    <th>ESTADO</th>
                                    <th>CEP</th>
                                    <th>PAÍS</th>
                                    <th>CABEÇALHO DO RECIBO</th>
                                    <th>RODAPÉ DO RECIBO</th>
                                    <th>OPÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($lojas as $loja){ ?>                  
                                <tr>
                                    <td><?= $loja->logo; ?></td>
                                    <td><?= $loja->id; ?></td>
                                    <td><?= $loja->codigo; ?></td>
                                    <td><?= $loja->razao_social; ?></td>
                                    <td><?= $loja->nome_fantasia; ?></td>
                                    <td><?= mask($loja->cnpj, '##.###.###/####-##'); ?></td>
                                    <td><?= mask($loja->ie, '###.###.###.###'); ?></td>
                                    <td><?= $loja->email; ?></td>
                                    <td><?= mask($loja->telefone, '(##) #####-####'); ?></td>
                                    <td><?= $loja->endereco1; ?></td>
                                    <td><?= $loja->endereco2; ?></td>
                                    <td><?= $loja->cidade; ?></td>
                                    <td><?= $loja->estado; ?></td>
                                    <td><?= mask($loja->cep, '#####-###'); ?></td>
                                    <td><?= $loja->pais; ?></td>
                                    <td><?= $loja->cabecalho_recibo; ?></td>
                                    <td><?= $loja->rodape_recibo; ?></td>
                                    <td>
                                        <div class="text-center">
                                            <div class="btn-group">
                                                <a href="#" class="tip image btn btn-danger btn-xs" data-toggle="tooltip" title="Editar: <?= $loja->id; ?>"><i class="fa fa-edit"></i></a>
                                                <a href="#" class="tip image btn btn-warning btn-xs" data-toggle="tooltip" title="Deletar: <?= $loja->id; ?>"><i class="fa fa-trash-o"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>LOGO</th>
                                    <th>ID</th>
                                    <th>CÓDIGO</th>
                                    <th>RAZÃO SOCIAL</th>
                                    <th>NOME FANTASIA</th>
                                    <th>CNPJ</th>
                                    <th>I.E.</th>
                                    <th>E-MAIL</th>
                                    <th>TELEFONE</th>
                                    <th>ENDEREÇO</th>
                                    <th>COMPLEMENTO</th>
                                    <th>CIDADE</th>
                                    <th>ESTADO</th>
                                    <th>CEP</th>
                                    <th>PAÍS</th>
                                    <th>CABEÇALHO DO RECIBO</th>
                                    <th>RODAPÉ DO RECIBO</th>
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
