<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12 col-xlg-9 col-md-7">
            <div class="card pt-4 pl-0 pb-4">
                <div class="col-sm-12 mb-3">
                    <a href="<?php echo base_url(); ?>index.php/fornecedores/adicionar" class="btn btn-success p-0-0">
                        <span class="button__icon"><i class="mdi mdi-plus-circle-outline"></i></span><span class="button__text2">Adicionar Fornecedor</span>
                    </a>
                </div>
                            
                <div class="widget-box">
                    <table id="default_order" class="table table-hover display table-sm m-b-0" style="width:100%">
                        <thead class="bg-info-l">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col" width="450">Nome do Fornecedor</th>
                                <th scope="col">NUIT</th>
                                <th scope="col">Contacto</th>
                                <th scope="col">Email</th>
                                <th scope="col">Celular</th>
                                <th scope="col" width="120" class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                if (!$results) {
                                    echo '<tr><td colspan="7">Nenhum Fornecedor Cadastrado</td></tr>';
                                }
                                foreach ($results as $r) {
                                    echo '<tr>';
                                    echo '<td>' . $r->idFornecedores . '</td>';
                                    echo '<td>' . $r->nomeFornecedor . '</td>';
                                    echo '<td>' . $r->nuit . '</td>';
                                    echo '<td>' . $r->contato . '</td>';
                                    echo '<td>' . $r->email . '</td>';
                                    echo '<td>' . $r->celular . '</td>';
                                    echo '<td class="text-center">';
                                        if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vFornecedor')) {
                                            echo '<a href="' . base_url() . 'index.php/fornecedores/visualizar/' . $r->idFornecedores . '" style="margin-right: 2%" class="btn btn-xs btn-icon btn-success btn-outline" data-toggle="tooltip" data-original-title="Ver mais detalhes"><i class="ti-eye"></i></a>';
                                        }

                                        if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eFornecedor')) {
                                            echo '<a href="' . base_url() . 'index.php/fornecedores/editar/' . $r->idFornecedores . '" style="margin-right: 2%" class="btn btn-xs btn-icon btn-info btn-outline" data-toggle="tooltip" data-original-title="Editar"><i class="ti-pencil-alt"></i></a>';
                                        }

                                        if ($this->permission->checkPermission($this->session->userdata('permissao'), 'dFornecedor')) {
                                            echo '<a href="" class="btn btn-xs btn-icon btn-danger btn-outline" fornecedor="' . $r->idFornecedores . '" data-toggle="modal" data-target="#modal-excluir" data-whatever="@getbootstrap" data-original-title="Excluir"><i class="ti-trash"></i></a>';
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

            <!-- Modal Excluir -->                            
            <div id="modal-excluir" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Excluir Cliente</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">

                            <form action="<?php echo base_url()?>index.php/fornecedores/excluir" method="post" class="form-horizontal" >
                                <div class="modal-body">
                                    <input type="text" id="idFornecedor" name="id" value="" />
                                    <h5 style="text-align: center">Tem certeza que deseja excluir este registro?</h5>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-info waves-effect waves-light">Excluir</button>
                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cancelar</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- /.modal -->

        </div>
    </div>
    <!-- End Row  -->
</div>
<!-- End Container fluid  -->

<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', 'a', function(event) {
            var fornecedor = $(this).attr('fornecedor');
            $('#idFornecedor').val(fornecedor);
        });
    });
</script>