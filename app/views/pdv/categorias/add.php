  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Categorias <small>- Adicionar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('dash') ?>"><i class="fa fa-dashboard"></i> Início</a></li>
        <li><a href="<?= base_url('categorias/listar') ?>"> Categorias</a></li>
        <li>Adicionar</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-success">
            <?= form_open_multipart('/categorias/cadastrar')?>
            <div class="box-header">
              <h3 class="box-title"><?= lang('formulario_add') ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-lg-12">
                <div class="form-group <?= form_error('codigo')? 'has-error':''?>">
                  <label for="codigo">Código</label>
                  <input type="text" class="form-control" id="codigo" name="codigo" value="<?= set_value('codigo') ?>">
                  <?php echo form_error('codigo', '<p class="text-danger">','</p>') ?>
                </div>               
                <div class="form-group <?= form_error('nome')? 'has-error':''?>">
                  <label for="nome">Nome / Descrição</label>
                  <input type="text" class="form-control" id="nome" name="nome" value="<?= set_value('nome') ?>">
                  <?php echo form_error('nome', '<p class="text-danger">','</p>') ?>
                </div>
                <div class="form-group">
                  <label for="detalhes">Detalhes</label>
                  <textarea class="form-control" rows="3" id="detalhes" name="detalhes"><?= set_value('detalhes') ?></textarea>
                </div>
                <div class="form-group">
                  <label for="imagem">Imagem da Categoria</label>
                  <input type="file" id="imagem" name="imagem">
                  <p class="help-block">Arquivos suportados [.jpg, .png]. Tamanho máximo de 300px x 400px</p>
                </div>
              </div><!-- /.col-lg-12 -->
            </div><!-- /.box-body -->
            <div class="box-footer">
              <div class="btn-group pull-right" role="group">
                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save fa-lg"></i><?= nbs(1) ?>Salvar</button>
                <a href="<?= base_url('categorias/listar') ?>" role="button" class="btn btn-danger btn-sm"><i class="fa fa-ban fa-lg"></i><?= nbs(1) ?>Cancelar</a>
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

