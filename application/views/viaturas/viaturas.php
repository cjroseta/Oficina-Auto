<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-xlg-9 col-md-7">
            <div class="card pt-4 pl-0 pb-4">

                <div class="col-lg-12 col-xlg-9 col-md-7">
                    <div class="col-sm-12 mb-3">
                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cUsuario')) { ?>
                        <a href="<?php echo base_url(); ?>index.php/viaturas/adicionar" class="btn btn-success p-0-0">
                            <span class="button__icon"><i class="mdi mdi-plus-circle-outline"></i></span><span class="button__text2" style="min-width: 150px;">Adicionar Viaturas</span>
                        </a>
                        <?php } ?>

                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cUsuario')) { ?>
                        <a href="<?php echo base_url(); ?>index.php/marcas" class="btn btn-info p-0-0 m-l-15">
                            <span class="button__icon"><i class="mdi mdi-plus-circle-outline"></i></span><span class="button__text2" style="min-width: 150px;">Marcas</span>
                        </a>
                        <?php } ?>

                        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cUsuario')) { ?>
                        <a href="<?php echo base_url(); ?>index.php/modelos " class="btn btn-info p-0-0 m-l-15">
                            <span class="button__icon"><i class="mdi mdi-plus-circle-outline"></i></span><span class="button__text2" style="min-width: 150px;">Modelos</span>
                        </a>
                        <?php } ?>
                    </div>
                </div>

                <div class="widget-box">
                    <table id="default_order" class="table table-hover display table-sm m-b-0" style="width:100%">
                        <thead class="bg-info-l">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col"><b>Matrícula</b></th>
                                <th scope="col"><b>Marca</b></th>
                                <th scope="col"><b>Modelo</b></th>
                                <th scope="col"><b>Vin Number</b></th>
                                <th scope="col" width="380"><b>Proprietario</b></th>
                                <th scope="col" width="120" class="text-center"></th> 
                            </tr>
                        </thead>

                        <tbody class="table-striped">
                            <?php
                                if (!$results) {
                                    echo '<tr><td colspan="7">Nenhuma Viatura Cadastrado</td></tr>';
                                }
                                foreach ($results as $r) {
                                    echo '<tr>';
                                    echo '<td>' . $r->idViatura . '</td>';
                                    echo '<td>' . $r->matricula . '</td>';
                                    echo '<td>' . $r->marca . '</td>';
                                    echo '<td>' . $r->modelo . '</td>';
                                    echo '<td>' . $r->num_chassis . '</td>';
                                    echo '<td>' . $r->clientes_id . '</td>';
                                    echo '<td class="text-center">';
                                    
                                        if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vViatura')) {
                                            echo '<a href="' . base_url() . 'index.php/viaturas/visualizar/' . $r->idViatura . '" style="margin-right: 2%" class="btn btn-xs btn-icon btn-success btn-outline" data-toggle="tooltip" data-original-title="Ver mais detalhes"><i class="ti-eye"></i></a>';
                                        }

                                        if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eViatura')) {
                                            echo '<a href="' . base_url() . 'index.php/viaturas/editar/' . $r->idViatura . '" style="margin-right: 2%" class="btn btn-xs btn-icon btn-info btn-outline" data-toggle="tooltip" data-original-title="Editar"><i class="ti-pencil-alt"></i></a>';
                                        }

                                        if ($this->permission->checkPermission($this->session->userdata('permissao'), 'dViatura')) {
                                            echo '<a href="" class="btn btn-xs btn-icon btn-danger btn-outline" viatura="' . $r->idViatura . '" data-toggle="modal" data-target="#modal-excluir" data-whatever="@getbootstrap" data-original-title="Excluir"><i class="ti-trash"></i></a>';
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

                            <form action="<?php echo base_url()?>index.php/viaturas/excluir" method="post" class="form-horizontal" >
                                <div class="modal-body">
                                    <input type="hidden" id="idViatura" name="id" value="" />
                                    <h5 style="text-align: center">Deseja excluir esta viatura?</h5>
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
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('click', 'a', function(event) {
            var viatura = $(this).attr('viatura');
            $('#idViatura').val(viatura);
        });
    });
</script>