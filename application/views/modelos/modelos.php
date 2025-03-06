<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12 col-xlg-9 col-md-7">
            <div class="card pt-4 pl-0 pb-4">
                <div class="col-sm-12 mb-3">
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'aViatura')) { ?>
                    <a href="<?php echo base_url(); ?>index.php/modelos/adicionar" class="btn btn-success p-0-0">
                        <span class="button__icon"><i class="mdi mdi-plus-circle-outline"></i></span><span class="button__text2">Adicionar Modelo</span>
                    </a>
                    <?php } ?>
                </div>
                            
                <div class="widget-box">
                    <table id="default_order" class="table table-hover display table-sm m-b-0" style="width:100%">
                        <thead class="bg-info-l">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col" width="250">Nome</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Descrição</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                if (!$results) {
                                    echo '<tr><td colspan="5">Nenhum Serviço Cadastrado</td></tr>';
                                }
                                foreach ($results as $r) {
                                    echo '<tr>';
                                    echo '<td>' . $r->idModelo . '</td>';
                                    echo '<td>' . $r->nome . '</td>';
                                    echo '<td>' . $r->marca_id . '</td>';
                                    echo '<td>' . $r->descricao . '</td>';
                                    echo '<td class="text-center">';
                                        echo '<a href="' . base_url() . 'index.php/servicos/editar/' . $r->idModelo . '" style="margin-right: 2%" class="btn btn-xs btn-icon btn-info btn-outline" data-toggle="tooltip" data-original-title="Editar"><i class="ti-pencil-alt"></i></a>';

                                        echo '<a href="" class="btn btn-xs btn-icon btn-danger btn-outline" data-toggle="tooltip" data-original-title="Excluir"><i class="ti-trash"></i></a>';

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
            <div id="#modal-excluir" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title text-danger">SYSTOFI</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <h5 class="text-center text-dark" id="message">Os dados de acesso estão incorretos, por favor tente novamente!</h5>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- End Row  -->
</div>
<!-- End Container fluid  -->