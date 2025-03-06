<!DOCTYPE html>
<html dir="ltr" lang="pt-MZ">
<head>
    <title><?= $configuration['app_name'] ?: 'SYSTOFI' ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistema de Gestão de Ordens de Serviço para Oficinas Mecânicas. Controle de Estoque. Gestão de Compras e Vendas. Oficinas de Motas e Manutenção Mecânica.">
    <meta name="author" content="Rostech">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>assets/images/favicon.png">

    <!-- Custom CSS -->
    <link href="<?= base_url(); ?>assets/dist/css/style.min.css" rel="stylesheet">
    <!-- Este CSS deve ser visto pois não esta fazendo efeito -->
    <link href="<?= base_url(); ?>assets/dist/css/myStyle.css" rel="stylesheet">   

    <!-- Google Fonts CDN -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;500;700&display=swap' rel='stylesheet' type='text/css'>
    
    <!-- Grafico Sales Ratio -->
    <link href="<?= base_url(); ?>assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">

    <!-- JS -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-1.12.4.min.js"></script> 
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/shortcut.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/funcoesGlobal.js"></script>   
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/datatables.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/sweetalert.min.js"></script>  
    
  <script type="text/javascript">
    shortcut.add("escape", function() {
      location.href = '<?= base_url(); ?>';
    });
    shortcut.add("F1", function() {
      location.href = '<?= site_url('contacts'); ?>';
    });
    shortcut.add("F2", function() {
      location.href = '<?= site_url('produtos'); ?>';
    });
    shortcut.add("F3", function() {
      location.href = '<?= site_url('viaturas'); ?>';
    });
    shortcut.add("F4", function() {
      location.href = '<?= site_url('servicos'); ?>';
    });    
    shortcut.add("F5", function() {
      location.href = '<?= site_url('cotacoes'); ?>';
    });
    shortcut.add("F6", function() {
      location.href = '<?= site_url('compras'); ?>';
    });
    shortcut.add("F7", function() {
      location.href = '<?= site_url('jobCards'); ?>';
    });
    shortcut.add("F8", function() {
      location.href = '<?= site_url('contratos'); ?>';
    });    
    shortcut.add("F9", function() {
      location.href = '<?= site_url('vendas'); ?>';
    });   
    shortcut.add("F10", function() {
      location.href = '<?= site_url('financeiro'); ?>';
    });
     
    /* Testado e funcionando shift
    shortcut.add("Shift+a", function() {
      location.href = '</?= site_url('login/logOut'); ?>';
    });*/

    shortcut.add("F12", function() {
      location.href = '<?= site_url('login/logOut'); ?>';
    });    
    shortcut.add("1", function() {
      location.href = '<?= site_url('contacts/addContact'); ?>';
    });
    shortcut.add("2", function() {
      location.href = '<?= site_url('produtos/adicionar'); ?>';
    });
    shortcut.add("3", function() {
      location.href = '<?= site_url('viaturas/adicionar'); ?>';
    });
    shortcut.add("4", function() {
      location.href = '<?= site_url('servicos/adicionar'); ?>';
    });  
    shortcut.add("5", function() {
      location.href = '<?= site_url('cotacoes/adicionar'); ?>';
    }); 
    shortcut.add("6", function() {
      location.href = '<?= site_url('compras/adicionar'); ?>';
    });
    shortcut.add("7", function() {
      location.href = '<?= site_url('jobCards/adicionar'); ?>';
    });
    shortcut.add("8", function() {
      location.href = '<?= site_url('contratos/adicionar'); ?>';
    });    
    shortcut.add("9", function() {
      location.href = '<?= site_url('vendas/adicionar'); ?>';
    });   
    shortcut.add("0", function() {
      location.href = '<?= site_url('financeiro/adicionar'); ?>';
    });     
  </script>
            
</head>

<body>
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <div id="main-wrapper">
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- Cabeçalho -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- Logo -->
                    <div class="navbar-brand">
                        <a href="" class="logo">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="<?= base_url(); ?>assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="<?= base_url(); ?>assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="<?= base_url(); ?>assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="<?= base_url(); ?>assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                            <!--End Logo text -->
                        </a>
                        <a class="sidebartoggler d-none d-md-block" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                            <i class="mdi mdi-toggle-switch mdi-toggle-switch-off font-20"></i>
                        </a>
                    </div>                    
                    <!-- End Logo -->
                    <!-- Toggle which is visible on mobile only -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <!-- End Logo -->

                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav float-left mr-auto">
                        <!-- Search -->
                        <li class="nav-item search-box">
                            <a href="javascript:void(0)" class="nav-link waves-effect waves-dark">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-magnify font-20 mr-1"></i>
                                    <div class="ml-1 d-none d-sm-block">
                                        <span>Pesquisar</span>
                                    </div>
                                </div>
                            </a>                            
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Insira o termo que pretende Pesquisar &amp; click no enter">
                                <a class="srh-btn">
                                    <i class="ti-close"></i>
                                </a>
                            </form>
                        </li>
                    </ul>

                    <!-- Right side toggle and nav items -->
                    <ul class="navbar-nav float-right"> 

                        <!-- Novo -->                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-plus font-18"></i>
                            </a>
                            
                            <div class="dropdown-menu dropdown-menu-right animated bounceInDown">
                                <span class="with-arrow">
                                    <span class="bg-info"></span>
                                </span>
                                <ul class="list-style-none">
                                    <li>
                                        <div class="drop-title bg-info text-white">
                                            <h5 class="p-2">Novo</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="drop-title">
                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'aContact')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" data-toggle="modal" data-target="#add1-cliente-modal" data-whatever="@getbootstrap" href="">Contact</a>
                                            <?php } ?>

                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rProduto')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="">Producto</a>
                                            <?php } ?>

                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rFornecedor')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="">Fornecedor</a>
                                            <?php } ?>

                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rServico')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="">Serviço</a>
                                            <?php } ?>

                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rViatura')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="">Viatura</a>
                                            <?php } ?>

                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rTecnico')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="">Técnico</a>
                                            <?php } ?>

                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rVenda')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="">Venda</a>
                                            <?php } ?>

                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rCompra')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="">Compra</a>
                                            <?php } ?>

                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rJc')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="">Job Card</a>
                                            <?php } ?>

                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rCotacao')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="">Cotação</a>
                                            <?php } ?>

                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rFinanceiro')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="">Despesa</a>
                                            <?php } ?>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>  
                        <!-- End Novo -->

                        <!-- Relatorios -->
                        <li class="nav-item dropdown">
                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eRelatorio')) { ?>
                                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-poll font-15"></i>
                                </a>
                            <?php } ?>
                            
                            <div class="dropdown-menu dropdown-menu-right animated bounceInDown">
                                <span class="with-arrow">
                                    <span class="bg-danger"></span>
                                </span>
                                <ul class="list-style-none">
                                    <li>
                                        <div class="drop-title bg-danger text-white">
                                            <h5 class="p-2">Relatórios</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="drop-title">
                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rContact')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="<?= site_url('relatorios/contacts') ?>">Contactos</a>
                                            <?php } ?>

                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rProduto')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="<?= site_url('relatorios/produtos') ?>">Productos</a>
                                            <?php } ?>

                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rFornecedor')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="<?= site_url('relatorios/fornecedores') ?>">Fornecedores</a>
                                            <?php } ?>

                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rServico')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="<?= site_url('relatorios/servicos') ?>">Serviços</a>
                                            <?php } ?>

                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rViatura')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="<?= site_url('relatorios/viaturas') ?>">Viaturas</a>
                                            <?php } ?>

                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rTecnico')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="<?= site_url('relatorios/tecnicos') ?>">Técnicos</a>
                                            <?php } ?>

                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rVenda')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="<?= site_url('relatorios/vendas') ?>">Vendas</a>
                                            <?php } ?>

                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rCompra')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="<?= site_url('relatorios/compras') ?>">Compras</a>
                                            <?php } ?>

                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rJc')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="<?= site_url('relatorios/jobcard') ?>">Job Card's</a>
                                            <?php } ?>

                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rCotacao')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="<?= site_url('relatorios/cotacoes') ?>">Cotações</a>
                                            <?php } ?>

                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rEntrada')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="<?= site_url('relatorios/entradas') ?>">Entradas de Peças</a>
                                            <?php } ?>

                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rSaida')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="<?= site_url('relatorios/saidas') ?>">Saídas de Peças</a>
                                            <?php } ?>

                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rFinanceiro')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="<?= site_url('relatorios/financeiro') ?>">Financeiro</a>
                                            <?php } ?>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li> 
                        <!-- End Relatorios --> 

                        <!-- Configuracoes -->
                        <li class="nav-item dropdown border-right">
                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cConfiguracoes')) { ?>
                                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-cogs font-15"></i>
                                </a>
                            <?php } ?>

                            <div class="dropdown-menu dropdown-menu-right animated bounceInDown">
                                <span class="with-arrow">
                                    <span class="bg-success"></span>
                                </span>
                                <ul class="list-style-none" style="border-radius: 7px">
                                    <li>
                                        <div class="drop-title bg-success text-white">
                                            <h5 class="p-2">Configurações</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="drop-title">
                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cSistema')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="<?= site_url('systofi/configurar') ?>">Sistema</a>
                                            <?php } ?>

                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cUsuario')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="<?= site_url('usuarios') ?>">Usuários</a>
                                            <?php } ?>

                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cEmpresa')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="<?= site_url('systofi/empresa') ?>">Empresa</a>                                                
                                            <?php } ?>

                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cPermissao')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="<?= site_url('permissoes') ?>">Permissões</a>
                                            <?php } ?>

                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cAuditoria')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="<?= site_url('auditoria') ?>">Auditoria</a>
                                            <?php } ?>
                                            
                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cEmail')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="<?= site_url('systofi/emails') ?>">Emails</a>  
                                            <?php } ?>            

                                            <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cBackup')) { ?>
                                                <a class="dropdown-item pl-2 pt-1 pb-1" href="<?= site_url('systofi/backup') ?>">Backup</a>
                                            <?php } ?>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- End Configuracoes -->     

                        <!-- User profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?= base_url(); ?>assets/images/users/2.jpg" alt="user" class="rounded-circle" width="40">
                                <span class="m-l-5 font-medium d-none d-sm-inline-block"><?= $this->session->userdata('nome_admin') ?><i class="mdi mdi-chevron-down"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                                    <div class="">
                                        <img src="<?= base_url(); ?>assets/images/users/2.jpg" alt="user" class="rounded-circle" width="60">
                                    </div>
                                    <div class="m-l-10">
                                        <h4 class="mb-0"><?= $this->session->userdata('nome_admin') ?></h4>
                                        <p class=" mb-0">admin@systofi.co.mz</p>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="<?= site_url('systofi/minhaConta'); ?>">
                                    <i class="ti-user m-r-5 m-l-5"></i> Meu Perfíl</a>

                                <a class="dropdown-item" href="<?= site_url('systofi/minhaConta'); ?>">
                                    <i class="ti-wallet m-r-5 m-l-5"></i> Minhas Tarefas</a>

                                <a class="dropdown-item" href="javascript:void(0)">
                                    <i class="ti-email m-r-5 m-l-5"></i> Caixa de Entrada</a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="">
                                    <i class="ti-settings m-r-5 m-l-5"></i> Minha Conta</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= site_url('login/logOut'); ?>">
                                    <i class="fa fa-power-off m-r-5 m-l-5"></i> Sair do Sistema</a>
                            </div>
                        </li>                        
                        <!-- End User profile and search -->

                    </ul>
                </div>
            </nav>
        </header>
        <!-- End Topbar header -->

       