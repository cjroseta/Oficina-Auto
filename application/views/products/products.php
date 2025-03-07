<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-xlg-9 col-md-7">
            <div class="card pt-4 pl-0 pb-4">
                <div class="col-sm-12 mb-3">
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'aProduct')) { ?>
                    <a href="<?php echo base_url(); ?>index.php/products/addProduct" class="btn btn-success p-0-0">
                        <span class="button__icon"><i class="mdi mdi-plus-circle-outline"></i></span><span class="button__text2">Adicionar Producto</span>
                    </a>
                    <?php } ?>
                </div>

                <div class="widget-box">
                    <table id="default_order" class="table table-hover display table-sm m-b-0" style="width: 100%">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col" width="360">Nome do Producto</th>
                                <th scope="col">Código de Barra</th>
                                <!--<th scope="col">Modelo</th>
                                <th scope="col">Localização</th>-->
                                <th scope="col">Estoque</th>
                                <th scope="col">Preço Venda</th>
                                <th scope="col" width="120" class="text-center"></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                if (!$products) {
                                    echo '<tr><td colspan="8">Nenhum Producto Cadastrado</td></tr>';
                                }
                                
                                foreach ($products as $p) {
                                    echo '<tr>';
                                    echo '<td>' . $p->idProduct . '</td>';
                                    echo '<td>' . $p->name . '</td>';
                                    echo '<td>' . $p->bar_code . '</td>';
                                    /*echo '<td>' . $p->modelo . '</td>';
                                    echo '<td>' . $p->localizacao . '</td>';*/
                                    echo '<td>' . $p->stock . '</td>';
                                    echo '<td>' . $p->price . '</td>';
                                    echo '<td class="text-center">';
                                        if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vProduct')) {
                                            echo '<a href="' . base_url() . 'index.php/products/viewProduct/' . $p->idProduct . '" style="margin-right: 2%" class="btn btn-xs btn-icon btn-success btn-outline" data-toggle="tooltip" data-original-title="Ver mais detalhes"><i class="ti-eye"></i></a>';
                                        }

                                        if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eProduct')) {
                                            echo '<a href="' . base_url() . 'index.php/products/editProduct/' . $p->idProduct . '" style="margin-right: 2%" class="btn btn-xs btn-icon btn-info btn-outline" data-toggle="tooltip" data-original-title="Editar"><i class="ti-pencil-alt"></i></a>';
                                        }

                                        if ($this->permission->checkPermission($this->session->userdata('permissao'), 'dProduct')) {
                                            echo '<a href="#modal-excluir" role="button" data-toggle="modal" product="' . $p->idProduct . '" class="btn btn-xs btn-icon btn-danger btn-outline"><i class="ti-trash"></i></a>';
                                        }

                                    echo '</td>';
                                    echo '<tr>';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <?php echo $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>
</div>
            
            <!-- Modal Excluir -->                            
            <div id="modal-excluir" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Excluir Producto</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">

                            <form action="<?php echo base_url()?>index.php/products/removeProduct" method="post" class="form-horizontal" >
                                <div class="modal-body">
                                    <input type="hidden" id="idproduct" name="id" value="" />
                                    <h5 style="text-align: center">Deseja excluir este producto número?</h5>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success waves-effect waves-light">Excluir</button>
                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cancelar</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- /.modal -->
            
<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', 'a', function(event) {
            var product = $(this).attr('product');
            $('#idProduct').val(product);
        });
    });
</script>