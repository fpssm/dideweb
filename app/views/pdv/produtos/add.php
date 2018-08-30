  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Produtos <small>- Adicionar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('dash') ?>"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="<?= base_url('produtos/listar') ?>"> Produtos</a></li>
        <li>Adicionar</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <?= form_open_multipart('/produtos/cadastrar')?>
            <div class="box-header">
              <h3 class="box-title"><?= lang('formulario_add') ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-lg-12">
                <div class="form-group <?= form_error('codigo') ? 'has-error':'' ?>">
                  <label for="codigo">Código / Código de Barras</label>
                  <input type="text" class="form-control" id="codigo" name="codigo" value="<?= set_value('codigo') ?>">
                  <?php echo form_error('codigo', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group <?= form_error('nome') ? 'has-error':'' ?>">
                  <label for="nome">Nome / Descrição</label>
                  <input type="text" class="form-control" id="nome" name="nome"  value="<?= set_value('nome') ?>">
                  <?php echo form_error('nome', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group">
                  <label for="id_categoria">Categoria</label>
                  <select class="form-control" id="id_categoria" name="id_categoria">
                    <?php foreach($categorias as $row){ ?>  
                      <option value="<?= $row->id ?>" <?= set_select('id_categoria', $row->id) ?>><?= $row->nome ?></option>
                    <?php }?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="tipo">Tipo de Produto</label>
                  <select class="form-control" id="tipo" name="tipo">
                    <option value="0" <?= set_select('tipo', '0') ?>>Simples</option>
                    <option value="1" <?= set_select('tipo', '1') ?>>Combo</option>
                  </select>
                </div>
                <div class="form-group <?= form_error('preco') ? 'has-error':'' ?>">
                  <label for="preco">Preço de Venda</label>
                  <input type="text" class="form-control" id="preco" name="preco" value="<?= set_value('preco') ?>">
                  <?php echo form_error('preco', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group  <?= form_error('custo') ? 'has-error':'' ?>">
                  <label for="custo">Valor de Custo</label>
                  <input type="text" class="form-control" id="custo" name="custo" value="<?= set_value('custo') ?>">
                  <?php echo form_error('custo', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group">
                  <label for="imagem">Imagem do Produto</label>
                  <input type="file" id="imagem" name="imagem">
                  <p class="help-block">Arquivos suportados [.jpg, .png]. Tamanho máximo de 300px x 400px</p>
                </div>
                <div class="form-group <?= form_error('qtd') ? 'has-error':'' ?>">
                  <label for="qtd">Quantidade</label>
                  <input type="text" class="form-control" id="qtd" name="qtd" value="<?= set_value('qtd') ?>">
                  <?php echo form_error('qtd', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group">
                  <label for="detalhes">Detalhes</label>
                  <textarea class="form-control" rows="3" id="detalhes" name="detalhes"><?= set_value('detalhes') ?></textarea>
                </div>
                <div class="form-group <?= form_error('alerta_quantidade') ? 'has-error':'' ?>">
                  <label for="alerta">Alerta de Quantidade</label>
                  <span class="h6"><?= lang('info_alerta_qtde') ?></span>
                  <input type="text" class="form-control" id="alerta" name="alerta_quantidade" value="<?= set_value('alerta_quantidade') ?>">
                  <?php echo form_error('alerta_quantidade', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="checkbox">
                  <input type="checkbox" id="encomendavel" name="encomendavel">
                  <label for="encomendavel"><strong>Encomendável</strong></label>
                  <span class="h6"><?= lang('info_alerta_encomendavel') ?></span>
                </div>
              </div>
              <!-- /.col-lg-12 -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <div class="btn-group pull-right" role="group">
                <button type="submit" class="btn btn-primary btn-sm" id="addProduto"><i class="fa fa-save fa-lg"></i><?= nbs(1) ?>Salvar</button>
                <a href="<?= base_url('produtos/listar') ?>" class="btn btn-danger btn-sm" role="button"><i class="fa fa-ban fa-lg"></i><?= nbs(1) ?>Cancelar</a>
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
