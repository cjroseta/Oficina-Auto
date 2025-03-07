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
                                        <?php echo $result->idProduct ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Nome</strong></td>
                                        <td>
                                        <?php echo $result->name ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Código</strong></td>
                                        <td>
                                        <?php echo $result->bar_code ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Modelo</strong></td>
                                        <td>
                                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Localização</strong></td>
                                        <td>
                                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Custo</strong></td>
                                        <td>
                                        <?php echo $result->cost ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Preço</strong></td>
                                        <td>
                                        <?php echo $result->price ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Estoque</strong></td>
                                        <td>
                                        <?php echo $result->stock ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Estoque Minimo</strong></td>
                                        <td>
                                        <?php echo $result->min_stock ?>
                                        </td>
                                    </tr>   
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Data de Cadastro</strong></td>
                                        <td><?php echo date('d/m/Y', strtotime($result->created_at)) ?></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: right;width: 30%"><strong>Data de Ultima Actulização</strong></td>
                                        <td>
                                            <?php echo date('d/m/Y', strtotime($result->update_at)) ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                <div class="card-footer text-center p-4">
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eProduct')) {
                        echo '<a href="'. base_url() .'index.php/products/editProduct/'. $result->idProduct .'" class="btn btn-info p-0-0">
                        <span class="button__icon"><i class="mdi mdi-pencil-box-outline"></i></span><span class="button__text2 p-r-30">Editar</span>
                        </a>';                        
                    } ?>

                        <a href="<?php echo base_url(); ?>index.php/products" class="btn btn-warning p-0-0">
                        <span class="button__icon"><i class="mdi mdi-undo-variant"></i></span><span class="button__text2 p-r-30">Voltar</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>