<script src="<?php echo base_url() ?>assets/js/jquery.mask.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/funcoes.js"></script>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card bg-light">
                <div class="card-header bg-transparent">
                    <h3 class="card-title">Editar Viatura</h3>
                </div>
                <hr class="m-0-0 bg-white">

                <?php if ($custom_error != '') {
                    echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>' . $custom_error . '</div>';
                } ?>

                <form action="<?php echo current_url(); ?>" method="post" id="formViatura" class="form">
                
                    <div class="card-body">

                        <div class="form-group m-t-20 row col-md-6">
                            <label for="marca" class="col-4 col-form-label text-right">Marca</label>

                            <div class="col-8">
                                <input class="form-control" name="marca" type="text" value="<?php echo $result->marca; ?>" id="marca" />
                            </div>
                        </div>

                        <div class="form-group row col-md-6">
                            <label for="modelo" class="col-4 col-form-label text-right">Modelo</label>
                            <div class="col-8">
                                <input class="form-control" name="modelo" type="text" value="<?php echo $result->modelo; ?>" id="modelo">
                            </div>
                        </div>

                        <div class="form-group row col-md-6">
                            <label for="num_chassis" class="col-4 col-form-label text-right">Número Chassis</label>
                            <div class="col-8">
                                <input class="form-control" name="num_chassis" type="text" value="<?php echo $result->num_chassis; ?>" id="num_chassis">
                            </div>
                        </div>

                        <div class="form-group row col-md-6">
                            <label for="matricula" class="col-4 col-form-label text-right">Matrícula<span class="required text-danger">*</span></label>
                            <div class="col-8">
                                <input class="form-control" name="matricula" type="text" value="<?php echo $result->matricula; ?>" id="matricula">
                            </div>
                        </div>

                        <div class="form-group row col-md-6">
                            <label for="clientes_id" class="col-4 col-form-label text-right">Proprietário<span class="required text-danger">*</span></label>
                            <div class="col-8">
                                <input class="form-control" name="clientes_id" type="text" value="<?php echo $result->clientes_id; ?>" id="clientes_id">
                            </div>
                        </div>

                    </div>
                    <!-- End card body -->
                    <hr class="m-0-0 bg-white">

                    <div class="form-actions">
                        <div class="text-center p-25">
                            <button type="submit" class="btn btn-success waves-effect waves-light p-0-0"><span class="button__icon"><i class="mdi mdi-content-save-all"></i></span><span class="button__text2 bt-w-90">Salvar</span></button>
                                
                            <button type="reset" class="btn btn-warning waves-effect waves-light p-0-0"><span class="button__icon"><i class="mdi mdi-broom"></i></span><span class="button__text2 bt-w-90">Limpar</span></button>

                            <a class="btn btn-danger waves-effect waves-light p-0-0" href="<?php echo site_url() ?>/viaturas"><span class="button__icon"><i class="mdi mdi-reply-all"></i></span><span class="button__text2 bt-w-90">Voltar</span></a>
                        </div>
                    </div>
                    <!-- End Form Action -->

                </form>
            </div>
        </div>
    </div>
</div>
