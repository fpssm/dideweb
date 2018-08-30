  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Clientes <small>- Adicionar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('dash') ?>"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="<?= base_url('clientes/listar') ?>"> Clientes</a></li>
        <li>Adicionar</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <?= form_open('/clientes/cadastrar')?>
            <!-- <div class="box-header">
              <h3 class="box-title"></h3>
            </div> -->
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-lg-12">
                <div class="form-group<?= form_error('nome') ? ' has-error':'' ?>">
                  <label for="nome">Nome</label>
                  <input type="text" class="form-control" id="nome" name="nome" value="<?= set_value('nome') ?>">
                  <?= form_error('nome', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group<?= form_error('sobrenome') ? ' has-error':'' ?>">
                  <label for="sobrenome">Sobrenome</label>
                  <input type="text" class="form-control" id="sobrenome" name="sobrenome" value="<?= set_value('sobrenome') ?>">
                  <?= form_error('sobrenome', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group<?= form_error('cpf') ? ' has-error':'' ?>">
                  <label for="cpf">CPF</label>
                  <input type="text" id="cpf" name="cpf" class="form-control" placeholder="___.___.___-__" data-mask="999.999.999-99" value="<?= set_value('cpf') ?>">
                  <?= form_error('cpf', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group<?= form_error('dncliente') ? ' has-error':'' ?>">
                  <label for="dncliente">Data de Nascimento</label>
                  <span class="h6"><?= lang('icone_data') ?></span>
                  <div class="input-group date" id="dtp-dn">
                      <input type="text" class="form-control" id="dncliente" name="data_nas" value="<?= set_value('data_nas') ?>">
                      <span class="input-group-addon">
                          <a href="javascript:void(0)"><i class="fa fa-calendar"></i></a>
                      </span>
                  </div>
                  <?= form_error('data_nas', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group<?= form_error('endereco') ? ' has-error':'' ?>">
                  <label for="endereco">Endereço</label>
                  <input type="text" class="form-control" id="endereco" name="endereco1" value="<?= set_value('endereco1') ?>">
                  <?= form_error('endereco', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group">
                  <label for="complemento">Complemento</label>
                  <input type="text" class="form-control" id="complemento" name="endereco2" value="<?= set_value('endereco2') ?>">
                </div>
                <div class="form-group<?= form_error('cidade') ? ' has-error':'' ?>">
                  <label for="cidade">Cidade</label>
                  <input type="text" class="form-control" id="cidade" name="cidade" value="<?= set_value('cidade') ?>">
                  <?= form_error('cidade', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group<?= form_error('estado') ? ' has-error':'' ?>">
                  <label for="estado">Estado</label>
                  <input type="text" class="form-control" id="estado" name="estado" value="<?= set_value('estado') ?>" maxlength="2">
                  <?= form_error('estado', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group<?= form_error('cep') ? ' has-error':'' ?>">
                  <label for="cep">CEP</label>
                  <input type="text" class="form-control" id="cep" name="cep" value="<?= set_value('cep') ?>" maxlength="8">
                  <?= form_error('preco', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group<?= form_error('email') ? ' has-error':'' ?>">
                  <label for="email">E-mail</label>
                  <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email') ?>">
                  <?= form_error('email', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group">
                  <label for="trabalho">Trabalho / Referência</label>
                  <input type="text" class="form-control" id="trabalho" name="trabalho" value="<?= set_value('trabalho') ?>">
                </div>
                <div class="row">
                  <div class="col-lg-6">
                  <div class="form-group<?= form_error('tel_contato') ? ' has-error':'' ?>">
                    <label for="tel_contato">Telefone Fixo</label>
                    <input type="text" class="form-control" id="tel_contato" name="tel_contato" value="<?= set_value('tel_contato') ?>" placeholder="(__) ____-____" data-mask="(99) 9999-9999">
                    <?= form_error('tel_contato', '<p class="text-danger">','</p>') ?>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group<?= form_error('celular') ? ' has-error':'' ?>">
                    <label for="celular">Celular</label>
                    <input type="text" class="form-control" id="celular" name="celular" value="<?= set_value('celular') ?>" placeholder="(__) _____-____" data-mask="(99) 99999-9999">
                    <?= form_error('celular', '<p class="text-danger">','</p>') ?>
                  </div>
                </div>
                </div>
                <div class="form-group<?= form_error('limite_fiado') ? ' has-error':'' ?>">
                  <label for="limite_fiado" style="margin-right: 15px">Limite de fiado</label>
                  <span>0<?= nbs(3) ?></span>
                  <input data-slider-id="sliderfiado" id="sliderfiado" type="text" data-slider-min="0" data-slider-max="500" data-slider-step="10" data-slider-value="0" class="form-control">
                  <span><?= nbs(3) ?>500</span>
                  <input type="text" class="form-control" id="limite_fiado" value="R$ 0,00" name="limite_fiado" value="<?= set_value('limite_fiado') ?>">
                  <?= form_error('limite_fiado', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group">
                  <label for="loja">Loja</label>
                  <select class="form-control" id="loja" name="id_loja">
                  <?php foreach($lojas as $loja){ ?>  
                    <option value="<?= $loja->id ?>" <?= set_select('loja', $loja->id) ?>><?= $loja->nome_fantasia . ' - ' . $loja->codigo ?></option>
                  <?php }?>
                  </select>
                </div>
              </div>
              <!-- /.col-lg-12 -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="btn-group pull-right" role="group">
                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save fa-lg"></i><?= nbs(1) ?>Salvar</button>
                <a href="<?= base_url('clientes/listar') ?>" role="button" class="btn btn-danger btn-sm"><i class="fa fa-ban fa-lg"></i><?= nbs(1) ?>Cancelar</a>
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
