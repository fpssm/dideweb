<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DideWeb</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="<?= $assets . 'img/favicon.ico' ?>">

    <!-- CSS -->

    <!-- Estilo personalizado -->
    <link rel="stylesheet" href="<?= $assets . 'css/dideweb.css' ?>">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= $assets . 'bower_components/bootstrap/dist/css/bootstrap.min.css' ?>">

    <!-- Bootstrap DateTimePicker -->
    <link rel="stylesheet" href="<?= $assets . 'js/bs-dtp/build/css/bootstrap-datetimepicker.css' ?>">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= $assets . 'bower_components/font-awesome/css/font-awesome.min.css' ?>">

    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= $assets . 'bower_components/Ionicons/css/ionicons.min.css' ?>">

    <!-- DataTables -->
    <link rel="stylesheet" href="<?= $assets . 'bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css' ?>">

    <!-- Theme style -->
    <link rel="stylesheet" href="<?= $assets . 'dist/css/AdminLTE.css' ?>">

    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= $assets . 'dist/css/skins/_all-skins.min.css' ?>">

    <!-- Full Calendar -->
    <link rel="stylesheet" href="<?= $assets . 'js/fullcalendar-3.9.0/fullcalendar.css' ?>">

    <!-- PACE Theme -->
    <link rel="stylesheet" href="<?= $assets . 'js/PACE/themes/black/pace-theme-center-simple.css' ?>">

    <!-- iCheck Skin -->
    <link rel="stylesheet" href="<?= $assets . 'js/iCheck/skins/square/blue.css' ?>">

    <!-- Bootstrap Slider -->
    <link rel="stylesheet" href="<?= $assets. 'js/bs-slider/dist/css/bootstrap-slider.min.css' ?>">

    <!-- Jasny Bootstrap -->
    <link rel="stylesheet" href="<?= $assets. 'css/jasny-bootstrap.css' ?>">

    <!-- Bootstrap Toggle -->
    <link rel="stylesheet" href="<?= $assets. 'js/bs-toggle/css/bootstrap-toggle.min.css' ?>">

    <!-- Bootstrap Multiselect -->
    <link rel="stylesheet" href="<?= $assets. 'css/bootstrap-multiselect.css' ?>">

    <!-- scrollbar-base -->
    <link rel="stylesheet" href="<?= $assets. 'css/scrollbar-base.css' ?>">

    <!-- JS -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    
</head>
<body class="hold-transition skin-blue sidebar-mini fixed <?= isset($hidemenu) ? 'sidebar-collapse' : '' ?>">
    <?= date_default_timezone_set("America/Sao_Paulo") ?>
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="<?= base_url() ?>" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><?= $nome_site_mini ?></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><?= $nome_site ?></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="javascript:void(0)" class="clock h4 no-margin hidden-xs hidden-sm"></a>
                        </li>
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?= $assets . 'dist/img/user2-160x160.jpg' ?>" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?= $assets . 'dist/img/user3-128x128.jpg' ?>" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?= $assets . 'dist/img/user4-128x128.jpg' ?>" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?= $assets . 'dist/img/user3-128x128.jpg' ?>" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="<?= $assets . 'dist/img/user4-128x128.jpg' ?>" class="img-circle" alt="User Image">
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>

                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                                page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-red"></i> 5 new members joined
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-red"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag-o"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Create a nice theme
                                                <small class="pull-right">40%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">40% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                                <li><!-- Task item -->
                                    <a href="#">
                                        <h3>
                                            Some task I need to do
                                            <small class="pull-right">60%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- end task item -->
                            <li><!-- Task item -->
                                <a href="#">
                                    <h3>
                                        Make beautiful transitions
                                        <small class="pull-right">80%</small>
                                    </h3>
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        <span class="sr-only">80% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- end task item -->
                    </ul>
                </li>
                <li class="footer">
                    <a href="#">View all tasks</a>
                </li>
            </ul>
        </li>
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?= $assets . 'dist/img/avatar5.png'?>" class="user-image" alt="User Image">
                <span class="hidden-xs hidden-sm">Felippe Palomares</span>
            </a>
            <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                    <img src="<?= $assets . 'dist/img/avatar5.png' ?>" class="img-circle" alt="User Image">

                    <p>
                        Felippe Palomares - Proprietário
                        <small>Membro desde Nov. 2012</small>
                    </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                    <div class="row">
                        <div class="col-xs-4 text-center">
                            <a href="#">Followers</a>
                        </div>
                        <div class="col-xs-4 text-center">
                            <a href="#">Sales</a>
                        </div>
                        <div class="col-xs-4 text-center">
                            <a href="#">Friends</a>
                        </div>
                    </div>
                    <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <div class="pull-left">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                </li>
            </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li class="<?= ($li_ativo == 'li_pdv') ? '' : 'hide' ?>">
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-folder"></i></a>
        </li>
    </ul>
</div>

</nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <!-- <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $assets . 'dist/img/avatar5.png' ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Felipe Palomares</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div> -->
        <!-- search form -->
        <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Pesquisar...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form> -->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <!--        <li class="header">MAIN NAVIGATION</li>-->
            <li class="<?= $li_ativo == 'li_dash' ? 'active' : '' ?>"> 
             <!-- painel -->
             <a href="<?= base_url('dash') ?>">
                <i class="fa fa-dashboard"></i> 
                <span>Painel</span>
            </a>
        </li>
        <li>
         <!-- atendimento -->
         <a href="<?= base_url('pdv') ?>">
            <i class="fa fa-cutlery"></i>
            <span>Atendimento</span>
        </a>
    </li>
    <li class="<?= $li_ativo == 'li_categorias' ? 'active' : '' ?> treeview">
     <!-- categorias -->
     <a href="#">
        <i class="fa fa-folder"></i>
        <span>Categorias</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li>
            <a href="<?= base_url('categorias/listar') ?>">
                <i class="fa fa-list"></i> 
                Listar
            </a>
        </li>
        <li>
            <a href="<?= base_url('categorias/add') ?>">
                <i class="fa fa-plus"></i> 
                Adicionar
            </a>
        </li>
    </ul>
</li>
<li class="<?= $li_ativo == 'li_produtos' ? 'active' : '' ?> treeview">
 <!-- produtos -->
 <a href="#">
    <i class="fa fa-barcode"></i>
    <span>Produtos</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
</a>
<ul class="treeview-menu">
    <li>
        <a href="<?= base_url('produtos/listar') ?>">
            <i class="fa fa-list"></i> 
            Listar
            <span class="label label-primary pull-right-container"><?= $this->dados->conta_produtos() ?></span>
        </a>
    </li>
    <li>
        <a href="<?= base_url('produtos/add') ?>">
            <i class="fa fa-plus"></i> 
            Adicionar
        </a>
    </li>
</ul>
</li>
<li class="<?= $li_ativo == 'li_vendas' ? 'active' : '' ?> treeview">
 <!-- vendas -->
 <a href="#">
    <i class="fa fa-money"></i>
    <span>Vendas</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
</a>
<ul class="treeview-menu">
    <li>
        <a href="<?= base_url('vendas/fechadas') ?>">
            <i class="fa fa-thumbs-o-up"></i> 
            Fechadas
        </a>
    </li>
    <li>
        <a href="<?= base_url('vendas/abertas') ?>">
            <i class="fa fa-hourglass-start"></i> 
            Abertas
        </a>
    </li>
    <li>
        <a href="<?= base_url('vendas/canceladas') ?>">
            <i class="fa fa-thumbs-o-down"></i> 
            Canceladas
        </a>
    </li>
</ul>
</li>
<li class="<?= $li_ativo == 'li_encomendas' ? 'active' : '' ?> treeview">
 <!-- encomendas -->
 <a href="#">
    <i class="fa fa-birthday-cake"></i>
    <span>Encomendas</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
</a>
<ul class="treeview-menu">
    <li>
        <a href="<?= base_url('encomendas/listar') ?>">
            <i class="fa fa-list"></i> 
            Listar
        </a>
    </li>
    <li>
        <a href="<?= base_url('encomendas/add') ?>">
            <i class="fa fa-plus"></i> 
            Adicionar
        </a>
    </li>
</ul>
</li>
<li class="<?= $li_ativo == 'li_despesas' ? 'active' : '' ?> treeview">
 <!-- despesas -->
 <a href="#">
    <i class="fa fa-file-text-o"></i>
    <span>Despesas</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
</a>
<ul class="treeview-menu">
    <li>
        <a href="<?= base_url('despesas/listar') ?>">
            <i class="fa fa-list"></i> 
            Listar
        </a>
    </li>
    <li>
        <a href="<?= base_url('despesas/add') ?>">
            <i class="fa fa-plus"></i> 
            Adicionar
        </a>
    </li>
</ul>
</li>
<li class="<?= $li_ativo == 'li_vales' ? 'active' : '' ?> treeview">
 <!-- vales -->
 <a href="#">
    <i class="fa fa-gift"></i>
    <span>Vales-presente</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
</a>
<ul class="treeview-menu">
    <li>
        <a href="<?= base_url('vales/listar') ?>">
            <i class="fa fa-list"></i> 
            Listar
        </a>
    </li>
    <li>
        <a href="<?= base_url('vales/add') ?>">
            <i class="fa fa-plus"></i> 
            Adicionar
        </a>
    </li>
</ul>
</li>
<li class="<?= $li_ativo == 'li_pessoas' ? 'active' : '' ?> treeview">
 <!-- pessoas -->
 <a href="#">
    <i class="fa fa-users"></i>
    <span>Pessoas</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
</a>
<ul class="treeview-menu">
    <li>
        <a href="<?= base_url('clientes/listar') ?>">
            <i class="fa fa-list"></i> 
            Listar Clientes
        </a>
    </li>
    <li>
        <a href="<?= base_url('clientes/add') ?>">
            <i class="fa fa-plus"></i> 
            Adicionar Cliente
        </a>
    </li>
    <div class="li_divider"></div>
    <li>
        <a href="<?= base_url('funcionarios/listar') ?>">
            <i class="fa fa-list"></i> 
            Listar Funcionarários
        </a>
    </li>
    <li>
        <a href="<?= base_url('funcionarios/add') ?>">
            <i class="fa fa-plus"></i> 
            Adicionar Funcionário
        </a>
    </li>
    <div class="li_divider"></div>
    <li>
        <a href="<?= base_url('fornecedores/listar') ?>">
            <i class="fa fa-list"></i> 
            Listar Fornecedores
        </a>
    </li>
    <li>
        <a href="<?= base_url('fornecedores/add') ?>">
            <i class="fa fa-plus"></i> 
            Adicionar Fornecedor
        </a>
    </li>
</ul>
</li>
<li class="<?= $li_ativo == 'li_config' ? 'active' : '' ?> treeview">
 <!-- config -->
 <a href="#">
    <i class="fa fa-cog"></i>
    <span>Configurações</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
</a>
<ul class="treeview-menu">
    <li>
        <a href="<?= base_url('ajustes') ?>">
            <i class="fa fa-wrench"></i> 
            Ajustes
        </a>
    </li>
    <div class="li_divider"></div>
    <li>
        <a href="<?= base_url('lojas/listar') ?>">
            <i class="fa fa-list"></i> 
            Listar Lojas
        </a>
    </li>
    <li>
        <a href="<?= base_url('lojas/add') ?>">
            <i class="fa fa-plus"></i> 
            Adicionar Loja
        </a>
    </li>
    <div class="li_divider"></div>
    <li>
        <a href="<?= base_url('impressoras/listar') ?>">
            <i class="fa fa-list"></i> 
            Listar Impressoras
        </a>
    </li>
    <li>
        <a href="<?= base_url('impressoras/add') ?>">
            <i class="fa fa-plus"></i> 
            Adicionar Impressora
        </a>
    </li>
</ul>
</li>
<li class="<?= $li_ativo == 'li_relatorios' ? 'active' : '' ?> treeview">
 <!-- relatorios -->
 <a href="#">
    <i class="fa fa-line-chart"></i>
    <span>Relatórios</span>
    <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
    </span>
</a>
<ul class="treeview-menu">
    <li>
        <a href="<?= base_url('relatorios/caixa') ?>">
            <i class="fa fa-area-chart"></i> 
            Caixa
        </a>
    </li>
    <li>
        <a href="<?= base_url('relatorios/vendas') ?>">
            <i class="fa fa-area-chart"></i> 
            Vendas
        </a>
    </li>
    <li>
        <a href="<?= base_url('relatorios/maisvendidos') ?>">
            <i class="fa fa-bar-chart"></i> 
            Produtos mais vendidos
        </a>
    </li>
</ul>
</li>
</ul>
</section>
<!-- /.sidebar -->
</aside>