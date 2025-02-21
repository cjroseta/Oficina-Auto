<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-xlg-9 col-md-7">
            <div class="card pl-0 pb-4">
                <div class="card-header bg-transparent">
                    <h3 class="card-title">Lançamentos Financeiros</h3>
                </div>
                <hr class="m-0-0 pb-2">
                <div class="col-sm-12 mb-3">
                    <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'aLancamento')) { ?>
                        <a href="<?php echo base_url(); ?>index.php/lancamentos/adicionar" class="btn btn-success p-0-0">
                            <span class="button__icon"><i class="mdi mdi-plus-circle-outline"></i></span><span class="button__text2">Adicionar Despesa/Receita</span>
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
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>