  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Vales <small>- Adicionar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('dash') ?>"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="<?= base_url('vales/listar') ?>"> Vales</a></li>
        <li>Adicionar</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <?= form_open('/vales/cadastrar')?>
            <div class="box-header">
              <h3 class="box-title"><?= lang('formulario_add') ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-lg-12">
                <div class="form-group">
                  <label for="id_cliente">Cliente</label>
                  <select class="form-control" id="id_cliente" name="id_cliente">
                    <?php foreach($clientes as $row){ ?>  
                      <option value="<?= $row->id ?>" <?= set_select('id_cliente', $row->id) ?>><?= $row->nome . ' ' . $row->sobrenome ?></option>
                    <?php }?>
                  </select>
                </div>
                <div class="form-group<?= form_error('codigo') ? ' has-error':'' ?>">
                  <label for="codigo">Código</label>
                  <span class="h6"><?= lang('icone_gerar_codigo') ?></span>
                  <div class="input-group">
                    <input type="text" class="form-control" id="codigo" name="codigo" value="<?= set_value('codigo') ?>" placeholder="____-____-____-____" data-mask="9999-9999-9999-9999" maxlength="16">
                    <span class="input-group-addon" id="genNo">
                      <a href="javascript:void(0)"><i class="fa fa-gears"></i></a>
                    </span>
                  </div>
                  <?= form_error('codigo', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group<?= form_error('valor') ? ' has-error':'' ?>">
                  <label for="valor_demonstrativo" style="margin-right: 15px">Valor</label>
                  <span>0<?= nbs(3) ?></span>
                  <input data-slider-id="slidervalor" id="slidervalor" type="text" data-slider-min="0" data-slider-max="500" data-slider-step="1" data-slider-value="0" class="form-control" name="valor">
                  <span><?= nbs(3) ?>500</span>
                  <input type="text" class="form-control" id="valor_demonstrativo" value="<?= dinheiro(set_value('valor',0)) ?>">
                  <?= form_error('valor', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group<?= form_error('expira_em') ? ' has-error':'' ?>">
                  <label for="expira_em">Valido até</label>
                  <span class="h6"><?= lang('icone_data') ?></span>
                  <div class="input-group date" id="dtp-vale">
                      <input type="text" class="form-control" id="expira_em" name="expira_em" value="<?= set_value('expira_em') ?>">
                      <span class="input-group-addon">
                          <a href="javascript:void(0)"><i class="fa fa-calendar"></i></a>
                      </span>
                  </div>
                  <?= form_error('expira_em', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group">
                  <label for="detalhes">Detalhes</label>
                  <textarea class="form-control" rows="3" id="detalhes" name="detalhes"><?= set_value('detalhes') ?></textarea>
                </div>
                <div class="form-group">
                  <label for="id_funcionario">Funcionário</label>
                  <select class="form-control" id="id_funcionario" name="id_funcionario">
                    <?php foreach($funcionarios as $row){ ?>  
                      <option value="<?= $row->id ?>" <?= set_select('id_funcionario', $row->id) ?>><?= $row->nome ?></option>
                    <?php }?>
                  </select>
                </div>
                <h4>campo hidden com id_loja</h4>
                <input type="hidden" id="id_loja" name="id_loja" value="1">
                <div class="box-footer">
                  <div class="btn-group pull-right" role="group">
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save fa-lg"></i><?= nbs(1) ?>Salvar</button>
                    <a href="<?= base_url('vales/listar') ?>" role="button" class="btn btn-danger btn-sm"><i class="fa fa-ban fa-lg"></i><?= nbs(1) ?>Cancelar</a>
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

