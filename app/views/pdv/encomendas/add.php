<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Encomendas <small>- Adicionar</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('dash') ?>"><i class="fa fa-dashboard"></i> Início</a></li>
            <li><a href="<?= base_url('encomendas/listar') ?>"> Encomendas</a></li>
            <li>Adicionar</li>
        </ol>
    </section>
    <!--     Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-success">
                    <?php
                    $atributos = array('id' => 'formEncomendas');
                    echo form_open('/encomendas/cadastrar', $atributos);
                    ?>
                    <!--                    <div class="box-header">-->
                        <!--                        <h3 class="box-title"></h3>-->
                        <!--                    </div> -->
                        <!--                     /.box-header -->
                        <div class="box-body">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="loja">Loja</label>
                                    <select class="form-control" id="loja" name="loja">
                                        <?php foreach($lojas as $loja){ ?>  
                                            <option value="<?= $loja->id ?>"><?= $loja->nome_fantasia . ' - ' . $loja->codigo ?></option>
                                        <?php }?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="dncliente">Data e horário</label>
                                    <span class="h6"><?= lang('icone_data_hora') ?></span>
                                    <div class="input-group date" id="dtp-encomenda">
                                        <input type="text" class="form-control" id="paradiahora" name="paradiahora" value="<?= set_value('paradiahora', $dia ? $dia . ' ' . hora(now()):'') ?>">
                                        <span class="input-group-addon">
                                            <a href="javascript:void(0)"><i class="fa fa-calendar"></i></a>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cliente">Cliente</label>
                                    <span class="h6"><?= lang('icone_cliente') ?></span>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="cliente" name="cliente">
                                        <span class="input-group-addon">
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#modalClientes"><i class="fa fa-search"></i></a>
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tel2">Celular</label>
                                            <input type="text" class="form-control" id="tel2" name="tel2" placeholder="(__) _____-____"  data-mask="(99) 99999-9999">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tel1">Telefone Fixo</label>
                                            <input type="text" class="form-control" id="tel1" name="tel1" placeholder="(__) ____-____" data-mask="(99) 9999-9999">
                                        </div> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="checkbox checkEntregar">
                                            <input type="checkbox" id="checkEntregar" name="entregar">
                                            <label for="checkEntregar">
                                                <strong>Entregar</strong>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-10" id="divEntregar" style="display:none">
                                        <div class="form-group">
                                            <label for="endereco">Endereço</label>
                                            <input type="text" class="form-control" id="endereco" name="endereco">
                                        </div>
                                        <div class="form-group">
                                            <label for="complemento">Complemento</label>
                                            <input type="text" class="form-control" id="complemento" name="complemento">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Tipo</label>
                                    <div class="radio">
                                        <input type="radio" name="origem" id="tipoTelefone" value="telefone" checked>
                                        <label for="tipoTelefone"><strong>Telefone</strong></label>
                                    </div>
                                    <div class="radio">
                                        <input type="radio" name="origem" id="tipoPessoalmente" value="pessoalmente">
                                        <label for="tipoPessoalmente"><strong>Pessoalmente</strong></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="loja">Funcionário</label>
                                    <select class="form-control" id="funcionario" name="funcionario">
                                        <option value="1">Fulano</option>
                                        <option value="2">Ciclano</option>
                                        <option value="3">Beltrano</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="detalhes">Detalhes</label>
                                    <textarea class="form-control" id="detalhes" name="detalhes"></textarea>
                                </div>
                                <h3>Produtos</h3>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <label for="inputCodigo" class="input-group-text">Código</label>
                                                </div>
                                                <input type="text" class="form-control text-center" maxlength="3" id="inputCodigo">
                                                <div class="input-group-addon"><a href="javascript:void(0)" data-toggle="modal" data-target="#modalProdutos"><i class="fa fa-search"></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <label class="input-group-text" for="inputDescricao">Produto</label>
                                                </div>
                                                <input type="text" class="form-control" id="inputDescricao" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <label for="inputAdd" class="input-group-text">Quantidade</label>
                                                </div>
                                                <input type="text" class="form-control text-center" id="inputAdd">
                                                <div class="input-group-addon" id="botaoAdd">
                                                    <a href="javascript:void(0)"><i class="fa fa-level-down"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="itens-encomenda" class="table-responsive">
                                    <table class="table table-hover table-sm table-light">
                                        <thead class="thead-light">
                                            <th>Produto</th>
                                            <th>Qtde</th>
                                            <th>Unitario</th>
                                            <th>Total</th>
                                            <th>Opções</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Bisnaga de alho</td>
                                                <td>1</td>
                                                <td>7,00</td>
                                                <td>7,00</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="+1" role="button" class="btn btn-xs btn-success"><i class="fa fa-plus"></i></a>
                                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="-1" role="button" class="btn btn-xs btn-primary"><i class="fa fa-minus"></i></a>
                                                        <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="remover" class="btn btn-xs btn-danger"><i class="fa fa-times" role="button"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <div class="btn-group pull-right" role="group">
                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save fa-lg"></i><?= nbs(1) ?>Salvar</button>
                                <a href="<?= base_url('encomendas/listar') ?>" role="button" class="btn btn-danger btn-sm"><i class="fa fa-ban fa-lg"></i><?= nbs(1) ?>Cancelar</a>
                            </div>
                        </div>
                        <!-- /.box-footer-->
                        <?= form_close() ?>
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

    <!-- Modal - Clientes -->
    <div class="modal fade" id="modalClientes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Clientes</h4>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Salvar alterações</button>
        </div>
    </div>
</div>
</div>

<!-- Modal - Produtos -->
<div class="modal fade" id="modalProdutos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times</span></button>
                <h4 class="modal-title" id="myModalLabel">Produtos</h4> 
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Salvar alterações</button>
            </div>
        </div>
    </div>
</div>
