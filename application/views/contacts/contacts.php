<!-- Container fluid  -->
<div class="container-fluid">
    <!-- Row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row m-t-10">
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card card-hover">
                                <div class="box bg-info text-center">
                                    <h1 class="font-light text-white"><?= $this->db->count_all('contacts'); ?></h1>
                                    <h6 class="text-white">Total Contactos</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 col-xlg-3">
                            <div class="card card-hover">
                                <div class="box bg-primary text-center">
                                    <h1 class="font-light text-white"><?php echo $total_contacts; ?></h1>
                                    <h6 class="text-white">Clientes</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2 col-xlg-2">
                            <div class="card card-hover">
                                <div class="box bg-success text-center">
                                    <h1 class="font-light text-white"><?php echo $total_fornecedores; ?></h1>
                                    <h6 class="text-white">Fornecedores</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2 col-xlg-2">
                            <div class="card card-hover">
                                <div class="box bg-dark text-center">
                                    <h1 class="font-light text-white"><?php echo $empresa_publica; ?></h1>
                                    <h6 class="text-white">Empresas Pública</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-2 col-xlg-2">
                            <div class="card card-hover">
                                <div class="box bg-dark text-center">
                                    <h1 class="font-light text-white"><?php echo $empresa_privada; ?></h1>
                                    <h6 class="text-white">Empresas Privada</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-xlg-9 col-md-7">
            <div class="card pt-4 pl-0 pb-4">
                <div class="col-sm-12 mb-3">
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'aContact')) { ?>
                        <a href="<?php echo base_url(); ?>index.php/contacts/addContact" class="btn btn-success p-0-0">
                            <span class="button__icon"><i class="mdi mdi-plus-circle-outline"></i></span><span class="button__text2">Adicionar Contacto</span>
                        </a>
                    <?php } ?>

                    <form action="<?= base_url() ?>index.php/contacts" method="get" style="display: flex; justify-content: flex-end; margin-top: -35px">
                        <div class="col-lg-6">
                            <input type="text" name="pesquisa" id="pesquisa"
                                placeholder="Buscar por Nome/Razão Social, Nuit, Email, Celular ou Contacto..." class="col-lg-12"
                                value="<?= $this->input->get('pesquisa') ?>" style="padding: 5px">
                        </div>
                        <div >
                            <button class="button btn btn-mini btn-warning">
                                <span><i class="ti-search"></i></span></button>
                        </div>
                    </form>
                </div>

                <div class="widget-box">
                    <table id="tabela" class="table table-hover display table-sm m-b-0" style="width:100%">
                        <thead>
                            <tr style="border-bottom: 3px solid #000;">
                                <th scope="col">#</th>
                                <th scope="col" width="300"><strong>Nome/Razão Social</strong></th>
                                <th scope="col"><strong>NUIT</strong></th>
                                <th scope="col"><strong>Contacto</strong></th>
                                <th scope="col"><strong>Email</strong></th>
                                <th scope="col"><strong>Celular</strong></th>
                                <th scope="col"><strong>Categória</strong></th>
                                <th scope="col"><strong>Tipo Contacto</strong></th>
                                <th scope="col" width="120" class="text-center"><strong>Acções</strong></th>
                            </tr>
                        </thead>

                        <tbody class="table-striped">
                            <?php
                            if (!$results) {
                                echo '<tr><td colspan="7">Nenhum Contacto Cadastrado</td></tr>';
                            }
                            foreach ($results as $r) {
                                $type = $r->type_contact;
                                if ($type == 1) {
                                    $type = "Fornecedor";
                                } else {
                                    $type = "Cliente";
                                }
                                echo '<tr>';
                                echo '<td>' . $r->idContacts . '</td>';
                                echo '<td>' . $r->nameContact . '</td>';
                                echo '<td>' . $r->nuit . '</td>';
                                echo '<td>' . $r->contact . '</td>';
                                echo '<td>' . $r->email . '</td>';
                                echo '<td>' . $r->celular . '</td>';
                                echo '<td>' . $r->category . '</td>';
                                echo '<td>' . $type . '</td>';
                                
                                echo '<td class="text-center">';
                                if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vContact')) {
                                    echo '<a href="' . base_url() . 'index.php/contacts/viewContact/' . $r->idContacts . '" style="margin-right: 2%" class="btn btn-xs btn-icon btn-success btn-outline" data-toggle="tooltip" data-original-title="Ver mais detalhes"><i class="ti-eye"></i></a>';
                                }

                                if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eContact')) {
                                    echo '<a href="' . base_url() . 'index.php/contacts/editContact/' . $r->idContacts . '" style="margin-right: 2%" class="btn btn-xs btn-icon btn-info btn-outline" data-toggle="tooltip" data-original-title="Editar"><i class="ti-pencil-alt"></i></a>';
                                }

                                if ($this->permission->checkPermission($this->session->userdata('permissao'), 'dContact')) {
                                    echo '<a href="" class="btn btn-xs btn-icon btn-danger btn-outline" contact="' . $r->idContacts . '" data-toggle="modal" data-target="#modal-excluir" data-whatever="@getbootstrap" data-original-title="Excluir"><i class="ti-trash"></i></a>';
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
                            <h4 class="modal-title">Excluir Contacto</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">

                            <form action="<?php echo base_url() ?>index.php/contacts/removeContact" method="post" class="form-horizontal">
                                <div class="modal-body">
                                    <input type="hidden" id="idContact" name="id" value="" />
                                    <h5 style="text-align: center">Deseja realmente excluir este Contacto e os dados associados a ele (OS, Vendas, Receitas)?</h5>
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
            var contact = $(this).attr('contact');
            $('#idContact').val(Contact);
        });
    });
</script>