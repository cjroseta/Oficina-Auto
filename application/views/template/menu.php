<!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- Barra de Menu -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        
                        <!--Dashboard -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" aria-expanded="false">
                                <i class="mdi mdi-av-timer"></i>
                                <span class="hide-menu">Dashboard </span>
                                <span class="badge badge-pill badge-info ml-auto m-r-15">Esc</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="<?= base_url() ?>">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Home </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?= site_url('systofi/painelVendas') ?>" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Vendas </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="<?= site_url('systofi/painelJobCard') ?>" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Job Card's </span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Cadastros -->                        
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" aria-expanded="false">
                                <i class="mdi mdi-tune"></i>
                                <span class="hide-menu">Cadastros </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vContact')) { ?>
                                    <li class="sidebar-item">
                                        <a href="<?= site_url('contacts') ?>" class="sidebar-link <?php if (isset($menuContacts)) { echo 'active'; } ?>">
                                            <i class="mdi mdi-account-multiple"></i>
                                            <span class="hide-menu"> Contacto </span>
                                            <span class="badge badge-pill badge-info ml-auto m-r-15">F1</span>
                                        </a>
                                    </li>
                                <?php } ?>
                                
                                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vProduto')) { ?>
                                    <li class="sidebar-item">
                                        <a href="<?= site_url('produtos') ?>" class="sidebar-link <?php if (isset($menuProdutos)) { echo 'active'; } ?>">
                                            <i class="mdi mdi-package-variant"></i>
                                            <span class="hide-menu"> Producto </span>
                                            <span class="badge badge-pill badge-info ml-auto m-r-15">F2</span>
                                        </a>
                                    </li>
                                <?php } ?>
                                                                
                                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vViatura')) { ?>
                                    <li class="sidebar-item">
                                        <a href="<?= site_url('viaturas') ?>" class="sidebar-link <?php if (isset($menuViaturas)) { echo 'active'; } ?>">
                                            <i class="mdi mdi-car"></i>
                                            <span class="hide-menu"> Viaturas </span>
                                            <span class="badge badge-pill badge-info ml-auto m-r-15">F3</span>
                                        </a>
                                    </li>
                                <?php } ?>
                                
                                <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vServico')) { ?>
                                    <li class="sidebar-item">
                                        <a href="<?= site_url('servicos') ?>" class="sidebar-link <?php if (isset($menuServicos)) { echo 'active'; } ?>">
                                            <i class="mdi mdi-oil"></i>
                                            <span class="hide-menu"> Serviços </span>
                                            <span class="badge badge-pill badge-info ml-auto m-r-15">F4</span>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>

                        <!-- Quotation --> 
                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vQuotation')) { ?>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link <?php if (isset($menuQuotation)) { echo 'active'; } ?>" href="<?= site_url('quotation') ?>" aria-expanded="false">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span class="hide-menu">Cotações</span>
                                    <span class="badge badge-pill badge-info ml-auto m-r-15">F5</span>
                                </a>
                            </li>
                        <?php } ?>

                        <!-- Compras --> 
                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vCompra')) { ?>
                            <li class="sidebar-item">
                                <a class="sidebar-link has-arrow waves-effect waves-dark sidebar-link <?php if (isset($menuPurchase)) { echo 'active'; } ?>" href="<?= site_url('compras') ?>" aria-expanded="false">
                                    <i class="mdi mdi-cart"></i>
                                    <span class="hide-menu">Compras</span>
                                    <span class="badge badge-pill badge-info ml-auto m-r-15">F6</span>
                                </a>
                                <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a class="sidebar-link" <?php if (isset($menuPurchase)) { echo 'active'; } ?>" href="<?= site_url('purchaseOrder') ?>">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Ordens de Compra </span>
                                    </a>
                                </li>   

                                <li class="sidebar-item">
                                    <a class="sidebar-link" <?php if (isset($menuPurchase)) { echo 'active'; } ?>" href="<?= site_url('purchases') ?>">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Compras </span>
                                    </a>
                                </li>
                        </ul>
                            </li>
                        <?php } ?>

                        <!-- Ordens de Serviços --> 
                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vJc')) { ?>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link <?php if (isset($menuJobcards)) { echo 'active'; } ?>" href="<?= site_url('jobCards') ?>" aria-expanded="false">
                                    <i class="mdi mdi-credit-card-multiple"></i>
                                    <span class="hide-menu">Ordens de Serviço</span>
                                    <span class="badge badge-pill badge-info ml-auto m-r-15">F7</span>
                                </a>
                            </li>
                        <?php } ?>

                        <!-- Contratos --> 
                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vJc')) { ?>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link <?php if (isset($menuJobcards)) { echo 'active'; } ?>" href="<?= site_url('contratos') ?>" aria-expanded="false">
                                    <i class="mdi mdi-comment-text"></i>
                                    <span class="hide-menu">Gestão de Contractos</span>
                                    <span class="badge badge-pill badge-info ml-auto m-r-15">F8</span>
                                </a>
                            </li>
                        <?php } ?>

                        <!-- Vendas --> 
                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vVenda')) { ?> 
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link <?php if (isset($menuVendas)) { echo 'active'; } ?>" href="<?= site_url('vendas') ?>" aria-expanded="false">
                                    <i class="mdi mdi-cart-plus"></i>
                                    <span class="hide-menu">Vendas</span>
                                    <span class="badge badge-pill badge-info ml-auto m-r-15">F9</span>
                                </a>
                            </li>
                        <?php } ?>             

                        <!-- Lançamentos -->
                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vLancamento')) { ?> 
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" aria-expanded="false">
                                <i class="mdi mdi-currency-usd"></i>
                                <span class="hide-menu">Financeiro</span>
                                <span class="badge badge-pill badge-info ml-auto m-r-15">F10</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a class="sidebar-link" <?php if (isset($menuLancamentos)) { echo 'active'; } ?>" href="<?= site_url('jobCards') ?>">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Lançamentos </span>
                                    </a>
                                </li>   

                                <li class="sidebar-item">
                                    <a class="sidebar-link" <?php if (isset($menuLancamentos)) { echo 'active'; } ?>" href="<?= site_url('jobCards/novos') ?>">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Facturas </span>
                                    </a>
                                </li>

                                <li class="sidebar-item">
                                    <a class="sidebar-link" <?php if (isset($menuLancamentos)) { echo 'active'; } ?>" href="<?= site_url('jobCards/novos') ?>">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Fluxo de Caixa </span>
                                    </a>
                                </li>    
                                
                                <li class="sidebar-item">
                                    <a class="sidebar-link" <?php if (isset($menuLancamentos)) { echo 'active'; } ?>" href="<?= site_url('jobCards/novos') ?>">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Realizados </span>
                                    </a>
                                </li> 

                                <li class="sidebar-item">
                                    <a class="sidebar-link" <?php if (isset($menuLancamentos)) { echo 'active'; } ?>" href="<?= site_url('jobCards/novos') ?>">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Pendentes </span>
                                    </a>
                                </li> 

                                <li class="sidebar-item">
                                    <a class="sidebar-link" <?php if (isset($menuLancamentos)) { echo 'active'; } ?>" href="<?= site_url('jobCards/novos') ?>">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Atrasados </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <?php } ?>

                        <!-- Recursos Humanos -->
                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vLancamento')) { ?> 
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" aria-expanded="false">
                                <i class="mdi mdi-account-star"></i>
                                <span class="hide-menu">Recursos Humanos</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a class="sidebar-link" <?php if (isset($menuLancamentos)) { echo 'active'; } ?>" href="<?= site_url('jobCards') ?>">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Funcionarios </span>
                                    </a>
                                </li>   

                                <li class="sidebar-item">
                                    <a class="sidebar-link" <?php if (isset($menuLancamentos)) { echo 'active'; } ?>" href="<?= site_url('jobCards/novos') ?>">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Departamentos </span>
                                    </a>
                                </li>    
                                
                                <li class="sidebar-item">
                                    <a class="sidebar-link" <?php if (isset($menuLancamentos)) { echo 'active'; } ?>" href="<?= site_url('jobCards/novos') ?>">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Contractos </span>
                                    </a>
                                </li> 

                                <li class="sidebar-item">
                                    <a class="sidebar-link" <?php if (isset($menuLancamentos)) { echo 'active'; } ?>" href="<?= site_url('jobCards/novos') ?>">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Folha de Sálario </span>
                                    </a>
                                </li> 
                            </ul>
                        </li>
                        <?php } ?>

                        <!-- E-mail --> 
                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vJc')) { ?>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link <?php if (isset($menuJobcards)) { echo 'active'; } ?>" href="<?= site_url('contratos') ?>" aria-expanded="false">
                                    <i class="mdi mdi-email-secure"></i>
                                    <span class="hide-menu"> E-mail</span>
                                </a>
                            </li>
                        <?php } ?>

                        <!-- E-mail --> 
                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vJc')) { ?>
                            <li class="sidebar-item">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link <?php if (isset($menuJobcards)) { echo 'active'; } ?>" href="<?= site_url('contratos') ?>" aria-expanded="false">
                                    <i class="mdi mdi-archive"></i>
                                    <span class="hide-menu"> Documentos</span>
                                </a>
                            </li>
                        <?php } ?>

                        <!-- Log Out -->
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= site_url('login/logOut'); ?>" aria-expanded="false">
                                <i class="mdi mdi-logout"></i>
                                <span class="hide-menu">Sair do Sistema</span>
                                <span class="badge badge-pill badge-info ml-auto m-r-15">F12</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
        </aside>
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->