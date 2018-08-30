  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Despesas <small>- Adicionar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('dash') ?>"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="<?= base_url('despesas/listar') ?>"> Despesas</a></li>
        <li>Adicionar</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <?= form_open('/despesas/cadastrar')?>
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
              <h3 class="box-title"><?= lang('formulario_add') ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="id_loja">Loja</label>
                  <select class="form-control" id="id_loja" name="id_loja">
                    <?php foreach($lojas as $row){ ?>  
                      <option value="<?= $row->id ?>" <?= set_select('id_loja', $row->id) ?>><?= $row->nome_fantasia . ' - ' . $row->codigo ?></option>
                    <?php }?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="id_funcionario">Funcionário</label>
                  <select class="form-control" id="id_funcionario" name="id_funcionario">
                    <?php foreach($funcionarios as $row){ ?>  
                      <option value="<?= $row->id ?>" <?= set_select('id_funcionario', $row->id) ?>><?= $row->nome ?></option>
                    <?php }?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="id_tipo_despesa">Tipo de Despesa</label>
                  <div class="input-group">
                    <select class="form-control" id="id_tipo_despesa" name="id_tipo_despesa">
                      <?php foreach($tipos_despesas as $row){ ?>  
                        <option value="<?= $row->id ?>" <?= set_select('id_tipo_despesa', $row->id) ?>><?= $row->descricao ?></option>
                      <?php }?>
                    </select>
                    <span class="input-group-addon">
                      <a href="javascript:void(0)" data-toggle="modal" data-target="#modalAddTipoDespesa">
                        <i class="fa fa-plus"></i>
                      </a>
                    </span>
                  </div>
                </div>
                <div class="form-group <?= form_error('data') ? 'has-error':'' ?>">
                  <label for="data">Data e horário</label>
                  <span class="h6"><?= lang('icone_data_hora') ?></span>
                  <div class="input-group date" id="dtp-despesa">
                    <input type="text" class="form-control" id="data" name="data" value="<?= set_value('data') ?>">
                    <span class="input-group-addon">
                      <a href="javascript:void(0)">
                        <i class="fa fa-calendar"></i>
                      </a>
                    </span>
                  </div>
                  <?php echo form_error('data', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group <?= form_error('valor_despesa') ? 'has-error':'' ?>">
                  <label for="valor_despesa">Valor da Despesa</label>
                  <input type="text" class="form-control" id="valor_despesa" name="valor_despesa" value="<?= set_value('valor_despesa'); ?>">
                  <?php echo form_error('valor_despesa', '<p class="text-danger">','</p>') ?>
                </div>
              </div>
            </div><!-- /.col-lg-12 -->
          </div><!-- /.box-body -->
          <div class="box-footer">
            <div class="btn-group pull-right" role="group">
              <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save fa-lg"></i><?= nbs(1) ?>Salvar</button>
              <a href="<?= base_url('despesas/listar') ?>" role="button" class="btn btn-danger btn-sm"><i class="fa fa-ban fa-lg"></i><?= nbs(1) ?>Cancelar</a>
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


<!-- Modal - Produtos -->
<div class="modal fade" id="modalAddTipoDespesa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <?= form_open('/despesas/cadastrar_tipo')?>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times</span></button>
        <h4 class="modal-title" id="myModalLabel">Adicionar Tipo de Despesa</h4> 
      </div>
      <div class="modal-body">      
        <div class="form-group <?= form_error('descricao') ? 'has-error':'' ?>">
          <label for="descricao">Descrição</label>
          <input type="text" class="form-control" id="descricao" name="descricao" value="<?= set_value('descricao') ?>">
          <?php echo form_error('descricao', '<p class="text-danger">','</p>') ?>
        </div>
      </div>
      <div class="modal-footer">
        <div class="btn-group pull-right" role="group">
          <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save fa-lg"></i><?= nbs(1) ?>Salvar</button>
          <a href="javascript:void(0)" role="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-ban fa-lg"></i><?= nbs(1) ?>Cancelar</a>
        </div>
      </div>
      <?= form_close() ?>
    </div>
  </div>
</div>