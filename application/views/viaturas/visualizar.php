<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-xlg-9 col-md-7">
            <div class="card bg-light">
                <ul class="nav nav-tabs customtab" id="pills-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#dadosCliente" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down"> Dados do Viatura</span></a> </li>

                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#ordensServico" role="tab"><span class="hidden-sm-up"><i class="ti-bookmark-alt"></i></span> <span class="hidden-xs-down"> Ordens de Serviços</span></a> </li>

                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#vendas" role="tab"><span class="hidden-sm-up"><i class="ti-shopping-cart-full"></i></span> <span class="hidden-xs-down"> Productos</span></a> </li>

                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#cotacoes" role="tab"><span class="hidden-sm-up"><i class="ti-write"></i></span> <span class="hidden-xs-down"> Serviços</span></a> </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">

                    <!-- Tab Dados do Cliente -->
                    <div class="tab-pane fade show active p-30" id="dadosCliente" role="tabpanel">
                        <div class="card-body">
                            <table class="table table-hover table-bordered table-sm">
                                <tbody>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>ID</strong></td>
                                        <td>
                                        <?php echo $result->idViatura ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Proprietario</strong></td>
                                        <td>
                                        <?php echo $result->clientes_id ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Marca</strong></td>
                                        <td>
                                        <?php echo $result->nuit ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Modelo</strong></td>
                                        <td>
                                        <?php echo $result->contato ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Matricula</strong></td>
                                        <td>
                                        <?php echo $result->viaMatricula ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Nr Chassi</strong></td>
                                        <td>
                                        <?php echo $result->viaVin ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Chapa Matricula</strong></td>
                                        <td>
                                        <?php echo $result->email ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Nr. Motor</strong></td>
                                        <td>
                                        <?php echo $result->cidade ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Ano Fabrico</strong></td>
                                        <td>
                                        <?php echo $result->viaAno ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Nr. Motor</strong></td>
                                        <td>
                                        <?php echo $result->viaMotor ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Cor</strong></td>
                                        <td>
                                        <?php echo $result->viaCor ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Data de Cadastro</strong></td>
                                        <td>
                                            <?php echo date('d/m/Y', strtotime($result->dataCadastro)) ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Actulizado em</strong></td>
                                        <td>
                                            <?php echo date('d/m/Y', strtotime($result->lastUpdate)) ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- End Tab Dados do Cliente -->

                    <!-- Tab Ordens de Serviços -->
                    <div class="tab-pane fade show" id="ordensServico" role="tabpanel">
                        <div class="card-body">
                            <h3>Ordens de Serviços</h3>
                        </div>
                    </div>
                    <!-- Ehd Tab Ordens de Serviços -->
                    
                    <!-- Tab Productos -->
                    <div class="tab-pane fade show" id="vendas" role="tabpanel">
                        <div class="card-body">
                            <h3>Productos</h3>
                        </div>
                    </div>
                    <!-- End Tab Productos -->
                    
                    <!-- Tab Serviços -->
                    <div class="tab-pane fade show" id="cotacoes" role="tabpanel">
                        <div class="card-body">
                            <h3>Serviços</h3>
                        </div>
                    </div>
                    <!-- End Tab Serviços -->

                </div>

                <div class="card-footer text-center p-4">
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eViatura')) {
                        echo '<a href="'. base_url() .'index.php/viaturas/editar/'. $result->idViatura .'" class="btn btn-info p-0-0">
                        <span class="button__icon"><i class="mdi mdi-pencil-box-outline"></i></span><span class="button__text2 p-r-30">Editar</span>
                        </a>';                        
                    } ?>

                        <a href="<?php echo base_url(); ?>index.php/viaturas" class="btn btn-warning p-0-0">
                        <span class="button__icon"><i class="mdi mdi-undo-variant"></i></span><span class="button__text2 p-r-30">Voltar</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>