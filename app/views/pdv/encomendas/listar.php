<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Encomendas
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('dash') ?>"><i class="fa fa-dashboard"></i> Início</a></li>
            <li>Encomendas</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-body">
                        <div id="encomendas"></div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer pull-right">
                        <a href="<?= base_url('encomendas/add') ?>" role="button" class="btn btn-primary btn-sm pull-right" id="btn-add-encomenda"><i class="fa fa-file fa-lg"></i><?= nbs(1) ?>Nova Encomenda</a>
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
