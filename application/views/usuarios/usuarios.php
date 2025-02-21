<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-xlg-9 col-md-7">
            <div class="card pt-4 pl-0 pb-4">
                <div class="col-sm-12 mb-3">
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cUsuario')) { ?>
                    <a href="<?php echo base_url(); ?>index.php/usuarios/adicionar" class="btn btn-success p-0-0">
                        <span class="button__icon"><i class="mdi mdi-plus-circle-outline"></i></span><span class="button__text2">Adicionar Usuário</span>
                    </a>
                    <?php } ?>
                </div>

                <div class="widget-box">
                    <table id="default_order" class="table table-hover display table-sm m-b-0" style="width:100%">
                        <thead class="bg-info-l">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col" width="380"><b>Nome</b></th>
                                <th scope="col"><b>Permissão</b></th>
                                <th scope="col"><b>Data de Cadastro</b></th>
                                <th scope="col"><b>Validade</b></th>
                                <th scope="col"><b>Situação</b></th>
                                <th scope="col" width="120" class="text-center"></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                if (!$results) {
                                    echo '<tr><td colspan="6">Nenhum Usuário Cadastrado</td></tr>';
                                }
                                foreach ($results as $r) {

                                    if ($r->situacao == 1) {
                                        $situacao = "Activo";
                                    } else {
                                        $situacao = "Inactivo";
                                    }
                                    echo '<tr>';
                                    echo '<td>' . $r->idUsuarios . '</td>';
                                    echo '<td>' . $r->nome . '</td>';
                                    echo '<td>' . $r->permissao . '</td>';
                                    echo '<td>' . date('d/m/Y',strtotime($r->dataCadastro)) . '</td>';
                                    echo '<td>' . date('d/m/Y',strtotime($r->dataExpiracao)) . '</td>';
                                    echo '<td>' . $situacao . '</td>';
                                    echo '<td class="text-center">';
                                        echo '<a href="' . base_url() . 'index.php/usuarios/visualizar/' . $r->idUsuarios . '" style="margin-right: 2%" class="btn btn-xs btn-icon btn-success btn-outline" data-toggle="tooltip" data-original-title="Ver mais detalhes"><i class="ti-eye"></i></a>';

                                        echo '<a href="' . base_url() . 'index.php/usuarios/editar/' . $r->idUsuarios . '" style="margin-right: 2%" class="btn btn-xs btn-icon btn-info btn-outline" data-toggle="tooltip" data-original-title="Editar"><i class="ti-pencil-alt"></i></a>';

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
        </div>
    </div>
</div>