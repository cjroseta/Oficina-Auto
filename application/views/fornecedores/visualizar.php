<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-xlg-9 col-md-7">
            <div class="card bg-light">
                <ul class="nav nav-tabs customtab" id="pills-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#dadosFornecedor" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down"> Dados do Fornecedor</span></a> </li>

                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#compras" role="tab"><span class="hidden-sm-up"><i class="ti-shopping-cart-full"></i></span> <span class="hidden-xs-down"> Compras</span></a> </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">

                    <!-- Tab Dados do Cliente -->
                    <div class="tab-pane fade show active p-30" id="dadosFornecedor" role="tabpanel">
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-sm">
                                <tbody>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>ID</strong></td>
                                        <td>
                                        <?php echo $result->idFornecedores ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Nome</strong></td>
                                        <td>
                                        <?php echo $result->nomeFornecedor ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>NUIT</strong></td>
                                        <td>
                                        <?php echo $result->nuit ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Contacto</strong></td>
                                        <td>
                                        <?php echo $result->contato ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Telefone</strong></td>
                                        <td>
                                        <?php echo $result->telefone ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Celular 1</strong></td>
                                        <td>
                                        <?php echo $result->celular ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Celular 2</strong></td>
                                        <td>
                                        <?php echo $result->celular2 ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>E-mail</strong></td>
                                        <td>
                                        <?php echo $result->email ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Cidade</strong></td>
                                        <td>
                                        <?php echo $result->cidade ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Endereço</strong></td>
                                        <td>
                                        <?php echo $result->endereco ?>
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
                    
                    <!-- Tab compras -->
                    <div class="tab-pane fade show" id="compras" role="tabpanel">
                        <div class="card-body">
                            <h3>Compras</h3>
                        </div>
                    </div>
                    <!-- End Tab compras -->

                </div>
                <hr class="m-0">
                <div class="text-center p-4">
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eFornecedor')) {
                        echo '<a href="'. base_url() .'index.php/fornecedores/editar/'. $result->idFornecedores .'" class="btn btn-info p-0-0">
                        <span class="button__icon"><i class="mdi mdi-pencil-box-outline"></i></span><span class="button__text2 p-r-30">Editar</span>
                        </a>';                        
                    } ?>

                        <a href="<?php echo base_url(); ?>index.php/fornecedores" class="btn btn-warning p-0-0">
                            <span class="button__icon"><i class="mdi mdi-undo-variant"></i></span><span class="button__text2 p-r-30">Voltar</span>
                        </a>
                </div>

            </div>
        </div>
    </div>
</div>