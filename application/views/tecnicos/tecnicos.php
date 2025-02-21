<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-xlg-9 col-md-7">
            <div class="card pt-4 pl-0 pb-4">
                <div class="col-sm-12 mb-3">
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'cUsuario')) { ?>
                    <a href="<?php echo base_url(); ?>index.php/tecnicos/adicionar" class="btn btn-success p-0-0">
                        <span class="button__icon"><i class="mdi mdi-plus-circle-outline"></i></span><span class="button__text2">Adicionar Técnicos</span>
                    </a>
                    <?php } ?>
                </div>
                
                <div class="col-sm-12">
                    <table id="tabela" class="table table-hover display table-sm m-b-0" style="width:100%">
                        <thead class="bg-info-l">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col" width="380"><b>Nome</b></th>
                                <th scope="col"><b>Secção</b></th>
                                <th scope="col"><b>Area</b></th>
                                <th scope="col"><b>Categoria</b></th>
                                <th scope="col"><b>Salario Base</b></th>
                                <th scope="col"><b>Profissão</b></th>
                                <th scope="col" width="120" class="text-center"></th>
                            </tr>
                        </thead>

                        <tbody>
                             
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>