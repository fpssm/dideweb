  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Fornecedores <small>- Adicionar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('dash') ?>"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="<?= base_url('fornecedores/listar') ?>"> Fornecedores</a></li>
        <li>Adicionar</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <?= form_open('/fornecedores/cadastrar') ?>
            <!-- <div class="box-header">
              <h3 class="box-title"></h3>
            </div> -->
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-lg-12">
                <div class="form-group <?= form_error('nome') ? 'has-error':'' ?>">
                  <label for="nome">Descrição do Fornecedor</label>
                  <input type="text" class="form-control" id="nome" name="nome" value="<?= set_value('nome') ?>">
                  <?php echo form_error('nome', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group <?= form_error('telefone') ? 'has-error':'' ?>">
                  <label for="telefone">Telefone da Empresa</label>
                  <input type="text" class="form-control" id="telefone" name="telefone" value="<?= set_value('telefone') ?>" placeholder="(__) ____-_____" data-mask="(99) 9999-9999">
                  <?php echo form_error('telefone', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group <?= form_error('email') ? 'has-error':'' ?>">
                  <label for="email">E-mail</label>
                  <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email') ?>">
                  <?php echo form_error('email', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group <?= form_error('vendedor') ? 'has-error':'' ?>">
                  <label for="vendedor">Nome do Vendedor</label>
                  <input type="text" class="form-control" id="vendedor" name="vendedor" value="<?= set_value('vendedor') ?>">
                  <?php echo form_error('vendedor', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group <?= form_error('telefone_vendedor') ? 'has-error':'' ?>">
                  <label for="telefone_vendedor">Telefone do Vendedor</label>
                  <input type="text" class="form-control" id="telefone_vendedor" name="telefone_vendedor" value="<?= set_value('telefone_vendedor') ?>" placeholder="(__) _____-_____" data-mask="(99) 99999-9999">
                  <?php echo form_error('telefone_vendedor', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="row">
                  <div class="col-lg-6 text-center">
                    <div class="form-group<?= form_error('dias_visita') ? ' has-error':'' ?>">
                      <label for="dias_visita">Dias de Visita</label>
                      <div>
                        <select id="dias_visita" name="dias_visita[]" multiple="multiple">
                          <option value="2">Segundas</option>
                          <option value="3">Terças</option>
                          <option value="4">Quartas</option>
                          <option value="5">Quintas</option>
                          <option value="6">Sextas</option>
                          <option value="7">Sábados</option>
                        </select>
                      </div>  
                    </div>
                    <?= form_error('dias_visita', '<p class="text-danger">','</p>') ?>
                  </div>
                  <div class="col-lg-6 text-center">
                    <div class="form-group<?= form_error('dias_entrega') ? ' has-error':'' ?>">
                      <label for="dias_entrega">Dias de Entrega</label>
                      <div>
                        <select id="dias_entrega" name="dias_entrega[]" multiple="multiple">
                          <option value="2">Segundas</option>
                          <option value="3">Terças</option>
                          <option value="4">Quartas</option>
                          <option value="5">Quintas</option>
                          <option value="6">Sextas</option>
                          <option value="7">Sábados</option>
                        </select>
                      </div>  
                    </div>
                    <?= form_error('dias_entrega', '<p class="text-danger">','</p>') ?>
                  </div>
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
                  <input type="text" class="form-control" id="cep" name="cep" value="<?= set_value('cep') ?>" maxlength="8" placeholder="_____-___" data-mask="99999-999">
                  <?php echo form_error('cep', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group <?= form_error('descricao') ? 'has-error':'' ?>">
                  <label for="descricao">Descrição</label>
                  <textarea type="text" class="form-control" id="descricao" name="descricao"><?= set_value('descricao') ?></textarea>
                  <?php echo form_error('descricao', '<p class="text-danger">','</p>') ?>
                </div>
                
              </div>
              <!-- /.col-lg-12 -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="btn-group pull-right" role="group">
                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save fa-lg"></i><?= nbs(1) ?>Salvar</button>
                <a href="<?= base_url('fornecedores/listar') ?>" role="button" class="btn btn-danger btn-sm"><i class="fa fa-ban fa-lg"></i><?= nbs(1) ?>Cancelar</a>
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
