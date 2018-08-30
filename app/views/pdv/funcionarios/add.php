  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Funcionários <small>- Adicionar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('dash') ?>"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="<?= base_url('funcionarios/listar') ?>"> Funcionários</a></li>
        <li>Adicionar</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <?= form_open_multipart('/funcionarios/cadastrar') ?>
            <!-- <div class="box-header">
              <h3 class="box-title"></h3>
            </div> -->
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-lg-12">
                <div class="form-group <?= form_error('codigo') ? 'has-error':'' ?>">
                  <label for="codigo">Código</label>
                  <span class="h6"><?= lang('codigo_func') ?></span>
                  <input type="text" class="form-control" id="codigo" name="codigo" value="<?= set_value('codigo') ?>" maxlength="4">
                  <?php echo form_error('codigo', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group <?= form_error('nome') ? 'has-error':'' ?>">
                  <label for="nome">Nome</label>
                  <input type="text" class="form-control" id="nome" name="nome" value="<?= set_value('nome') ?>">
                  <?php echo form_error('nome', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group <?= form_error('sobrenome') ? 'has-error':'' ?>">
                  <label for="sobrenome">Sobrenome</label>
                  <input type="text" class="form-control" id="sobrenome" name="sobrenome" value="<?= set_value('sobrenome') ?>">
                  <?php echo form_error('sobrenome', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group<?= form_error('data_nas') ? ' has-error':'' ?>">
                  <label for="dn_func">Data de Nascimento</label>
                  <span class="h6"><?= lang('icone_data') ?></span>
                  <div class="input-group date" id="dtp-dn">
                    <input type="text" class="form-control" id="dn_func" name="data_nas" value="<?= set_value('data_nas') ?>">
                    <span class="input-group-addon">
                      <a href="javascript:void(0)"><i class="fa fa-calendar"></i></a>
                    </span>
                  </div>
                  <?= form_error('data_nas', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group <?= form_error('genero') ? 'has-error':'' ?>">
                  <label for="genero">Gênero</label>
                  <input type="text" class="form-control" id="genero" name="genero" value="<?= set_value('genero') ?>">
                  <?php echo form_error('genero', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group <?= form_error('endereco1') ? 'has-error':'' ?>">
                  <label for="endereco1">Endereço</label>
                  <input type="text" class="form-control" id="endereco1" name="endereco1" value="<?= set_value('endereco1') ?>">
                  <?php echo form_error('endereco1', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group <?= form_error('endereco2') ? 'has-error':'' ?>">
                  <label for="endereco2">Complemento</label>
                  <input type="text" class="form-control" id="endereco2" name="endereco2" value="<?= set_value('endereco2') ?>">
                  <?php echo form_error('endereco2', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group <?= form_error('cidade') ? 'has-error':'' ?>">
                  <label for="cidade">Cidade</label>
                  <input type="text" class="form-control" id="cidade" name="cidade" value="<?= set_value('cidade') ?>">
                  <?php echo form_error('cidade', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group <?= form_error('estado') ? 'has-error':'' ?>">
                  <label for="estado">Estado</label>
                  <input type="text" class="form-control" id="estado" name="estado" value="<?= set_value('estado') ?>" maxlength="2">
                  <?php echo form_error('estado', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group <?= form_error('cep') ? 'has-error':'' ?>">
                  <label for="cep">CEP</label>
                  <input type="text" class="form-control" id="cep" name="cep" value="<?= set_value('cep') ?>" maxlength="8">
                  <?php echo form_error('cep', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group <?= form_error('email') ? 'has-error':'' ?>">
                  <label for="email">E-mail</label>
                  <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email') ?>">
                  <?php echo form_error('email', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group <?= form_error('telefone') ? 'has-error':'' ?>">
                  <label for="telefone">Telefone</label>
                  <input type="text" class="form-control" id="telefone" name="telefone" value="<?= set_value('telefone') ?>">
                  <?php echo form_error('telefone', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group">
                  <label for="id_grupo">Grupo</label>
                  <select class="form-control" id="id_grupo" name="id_grupo">
                    <?php foreach($grupos as $row){ ?>  
                      <option value="<?= $row->id ?>" <?= set_select('id_grupo', $row->id) ?>><?= $row->nome ?></option>
                    <?php }?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="imagem">Foto</label>
                  <input type="file" id="imagem" name="imagem">
                  <p class="help-block">Arquivos suportados [.jpg, .png]. Tamanho máximo de 300px x 400px</p>
                </div>
                <div class="form-group<?= form_error('data_adm') ? ' has-error':'' ?>">
                  <label for="data_adm">Data de Admissão</label>
                  <span class="h6"><?= lang('icone_data') ?></span>
                  <div class="input-group date" id="dtp-da">
                    <input type="text" class="form-control" id="data_adm" name="data_adm" value="<?= set_value('data_adm') ?>">
                    <span class="input-group-addon">
                      <a href="javascript:void(0)"><i class="fa fa-calendar"></i></a>
                    </span>
                  </div>
                  <?= form_error('data_adm', '<p class="text-danger">','</p>') ?>
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
                <a href="<?= base_url('funcionarios/listar') ?>" role="button" class="btn btn-danger btn-sm"><i class="fa fa-ban fa-lg"></i><?= nbs(1) ?>Cancelar</a>
              </div>
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
