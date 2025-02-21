<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-xlg-9 col-md-7">
            <div class="card">
                                  
                        <div class="card-body">
                        <h3>Dados do Producto</h3>
                            <table class="table table-hover table-sm">
                                <tbody>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>ID</strong></td>
                                        <td>
                                        <?php echo $result->idProdutos ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Descrição</strong></td>
                                        <td>
                                        <?php echo $result->descricao ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Código</strong></td>
                                        <td>
                                        <?php echo $result->codigo ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Modelo</strong></td>
                                        <td>
                                        <?php echo $result->modelo ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Localização</strong></td>
                                        <td>
                                        <?php echo $result->localizacao ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Preço de Compra</strong></td>
                                        <td>
                                        <?php echo $result->precoCompra ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Preço de Venda</strong></td>
                                        <td>
                                        <?php echo $result->precoVenda ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Estoque</strong></td>
                                        <td>
                                        <?php echo $result->estoque ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Estoque Minimo</strong></td>
                                        <td>
                                        <?php echo $result->estoqueMinimo ?>
                                        </td>
                                    </tr>                                    
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Estoque Inicial</strong></td>
                                        <td><?php echo $result->estoqueInicial ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Data de Cadastro</strong></td>
                                        <td><?php echo date('d/m/Y', strtotime($result->dataCadastro)) ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Data de Ultima Actulização</strong></td>
                                        <td>
                                            <?php echo date('d/m/Y', strtotime($result->ultimaAtualizacao)) ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                <div class="card-footer text-center p-4">
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eCliente')) {
                        echo '<a href="'. base_url() .'index.php/produtos/editar/'. $result->idProdutos .'" class="btn btn-info p-0-0">
                        <span class="button__icon"><i class="mdi mdi-pencil-box-outline"></i></span><span class="button__text2 p-r-30">Editar</span>
                        </a>';                        
                    } ?>

                        <a href="<?php echo base_url(); ?>index.php/produtos" class="btn btn-warning p-0-0">
                        <span class="button__icon"><i class="mdi mdi-undo-variant"></i></span><span class="button__text2 p-r-30">Voltar</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>