<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-xlg-9 col-md-7">
            <div class="card bg-light">
                <ul class="nav nav-tabs customtab" id="pills-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#dadosCliente" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down"> Dados do Cliente</span></a> </li>

                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#ordensServico" role="tab"><span class="hidden-sm-up"><i class="ti-bookmark-alt"></i></span> <span class="hidden-xs-down"> Ordens de Serviços</span></a> </li>

                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#vendas" role="tab"><span class="hidden-sm-up"><i class="ti-shopping-cart-full"></i></span> <span class="hidden-xs-down"> Vendas</span></a> </li>

                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#cotacoes" role="tab"><span class="hidden-sm-up"><i class="ti-write"></i></span> <span class="hidden-xs-down"> Cotações</span></a> </li>
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
                                        <?php echo $result->idClientes ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Nome/Razão Social</strong></td>
                                        <td>
                                        <?php echo $result->nomeCliente ?>
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
                                        <td style="text-align: right;width: 30%"><strong>Categoria</strong></td>
                                        <td>
                                        <?php echo $result->categoria ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Tipo Contacto</strong></td>
                                        <td>
                                            <?php 
                                                $tipo = $result->tipo_cliente;
                                                if ($tipo == 1) {
                                                    echo "Fornecedor";
                                                } else {
                                                    echo "Cliente";
                                                }
                                            ?>
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
                                            <?php echo date('d/m/Y', strtotime($result->created_at)) ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <?php $update = $result->update_at; ?>
                                        <td style="text-align: right;width: 30%"><strong>Actulizado em</strong></td>
                                        <td>
                                            <?php if ($update != null) {
                                                echo date('d/m/Y', strtotime($update)); 
                                            } ?>
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
                    
                    <!-- Tab Vendas -->
                    <div class="tab-pane fade show" id="vendas" role="tabpanel">
                        <div class="card-body">
                            <h3>Vendas</h3>
                        </div>
                    </div>
                    <!-- End Tab Vendas -->
                    
                    <!-- Tab Cotações -->
                    <div class="tab-pane fade show" id="cotacoes" role="tabpanel">
                        <div class="card-body">
                            <h3>Cotações</h3>
                        </div>
                    </div>
                    <!-- End Tab Cotações -->

                </div>

                <div class="card-footer text-center p-4">
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eCliente')) {
                        echo '<a href="'. base_url() .'index.php/clientes/editar/'. $result->idClientes .'" class="btn btn-info p-0-0">
                        <span class="button__icon"><i class="mdi mdi-pencil-box-outline"></i></span><span class="button__text2 p-r-30">Editar</span>
                        </a>';                        
                    } ?>

                        <a href="<?php echo base_url(); ?>index.php/clientes" class="btn btn-warning p-0-0">
                        <span class="button__icon"><i class="mdi mdi-undo-variant"></i></span><span class="button__text2 p-r-30">Voltar</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>