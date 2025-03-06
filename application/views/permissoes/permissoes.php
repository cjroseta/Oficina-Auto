<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-xlg-9 col-md-7">
            <div class="card pt-4 pl-0 pb-4">
                <div class="col-sm-12 mb-3">
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cPermissao')) { ?>
                    <a href="<?php echo base_url(); ?>index.php/permissoes/adicionar" class="btn btn-success p-0-0">
                        <span class="button__icon"><i class="mdi mdi-plus-circle-outline"></i></span><span class="button__text2">Adicionar Permissão</span>
                    </a>
                    <?php } ?>
                </div>
                
                <div class="widget-box">
                    <table id="default_order" class="table table-hover display table-sm m-b-0" style="width:100%">
                        <thead class="bg-info-l">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Permissão</th>
                                <th scope="col">Data de Criação</th>
                                <th scope="col">Situação</th>
                                <th scope="col" width="120" class="text-center"></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                if (!$results) {
                                    echo '<tr><td colspan="7">Nenhuma Permissão Cadastrada</td></tr>';
                                }
                                foreach ($results as $r) {
                                    if ($r->situacao == 1) {
                                        $situacao = 'Activo';
                                    } else {
                                        $situacao = 'Inativo';
                                    }
                                    echo '<tr>';
                                    echo '<td>' . $r->idPermissao . '</td>';
                                    echo '<td>' . $r->nome . '</td>';
                                    echo '<td>' . date('d/m/Y', strtotime($r->data)) . '</td>';
                                    echo '<td>' . $situacao . '</td>';
                                    echo '<td class="text-center">';
                                        echo '<a href="' . base_url() . 'index.php/permissoes/editar/' . $r->idPermissao . '" style="margin-right: 2%" class="btn btn-xs btn-icon btn-info btn-outline" data-toggle="tooltip" data-original-title="Editar Permissão"><i class="ti-pencil-alt"></i></a>';
                                        
                                        echo '<a href="' . base_url() . 'index.php/permissoes/visualizar/' . $r->idPermissao . '" style="margin-right: 2%" class="btn btn-xs btn-icon btn-success btn-outline" data-toggle="tooltip" data-original-title="Desativar Permissão"><i class="fas fa-eraser font-14"></i></a>';

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