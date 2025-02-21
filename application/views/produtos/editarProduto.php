<script src="<?php echo base_url() ?>assets/js/jquery.mask.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/funcoes.js"></script>
                
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-xlg-9 col-md-7">
            <div class="card bg-light">
                <div class="card-header bg-transparent">
                    <h3 class="card-title">Editar Producto</h3>
                </div>
                <hr class="m-0-0">
                <?php if ($custom_error != '') {
                    echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>' . $custom_error . '</div>';
                } ?>
                <form action="<?php echo current_url(); ?>" id="formProduto" method="post" class="form-horizontal p-t-5">
                    <div class="form-body">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="descricao" class="control-label text-right col-md-3">Descrição<span class="required text-danger">*</span></label>

                                        <div class="col-md-9">
                                            <input type="text" id="descricao" class="form-control" name="descricao" value="<?php echo $result->descricao; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger row">
                                        <?php echo form_hidden('idProdutos', $result->idProdutos) ?>
                                        <label for="codigo" class="control-label text-right col-md-3">Código<span class="required text-danger">*</span></label>

                                        <div class="col-md-9">
                                            <input id="codigo" type="text" name="codigo" value="<?php echo $result->codigo; ?>" class="form-control form-control-danger" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="modelo" class="control-label text-right col-md-3">Modelo</label>

                                        <div class="col-md-9">
                                            <input type="text" id="modelo" class="form-control" name="modelo" value="<?php echo $result->modelo; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger row">
                                        <label for="localizacao" class="control-label text-right col-md-3">Localização</label>
                                        <div class="col-md-9">
                                            <input id="localizacao" type="text" name="localizacao" value="<?php echo $result->localizacao; ?>" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="precoCompra" class="control-label text-right col-md-3">P. Compra</label>

                                        <div class="col-md-9">
                                            <input type="number" id="precoCompra" class="form-control" name="precoCompra" value="<?php echo $result->precoCompra; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger row">
                                        <label for="precoVenda" class="control-label text-right col-md-3">P. Venda</label>

                                        <div class="col-md-9">
                                            <input type="number" id="precoVenda" name="precoVenda" value="<?php echo $result->precoVenda; ?>" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="estoque" class="control-label text-right col-md-3">Estoque</label>

                                        <div class="col-md-9">
                                            <input type="number" id="estoque" class="form-control" name="estoque" value="<?php echo $result->estoque; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger row">
                                        <label for="estoqueMinimo" class="control-label text-right col-md-3">Estoque Minimo</label>
                                        <div class="col-md-9">
                                            <input type="number" id="estoqueMinimo" name="estoqueMinimo" value="<?php echo $result->estoqueMinimo; ?>" class="form-control form-control-danger" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="grupo" class="control-label text-right col-md-3">Grupo</label>

                                        <div class="col-md-9">
                                            <input type="text" id="grupo" class="form-control" name="grupo" value="<?php echo $result->grupo; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->

                        </div>
                        <!-- End card body -->
                        <hr class="m-0-0">

                        <div class="form-actions bg-info-l">
                            <div class="text-center p-25">
                                <button type="submit" class="btn btn-success waves-effect waves-light p-0-0"><span class="button__icon"><i class="mdi mdi-content-save-all"></i></span><span class="button__text2 p-r-30">Salvar</span></button>

                                <a class="btn btn-danger waves-effect waves-light p-0-0" href="<?php echo site_url() ?>/produtos"><span class="button__icon"><i class="mdi mdi-reply-all"></i></span><span class="button__text2 p-r-20">Cancelar</span></a>
                            </div>
                        </div>
                        <!-- End Form Action -->
                    </div>
                    <!-- End form body -->
                </form>
            </div>
        </div>
    </div>
    <!-- End Row -->
</div>      
<!-- End Container fluid  -->  

<script src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $("#descricao").focus();
        $('#formProduto').validate({
            rules: { descricao: {required: true}, codigo: {required: true}, },
            messages: { descricao: {required: 'Campo Obrigatório.'}, codigo: {required: 'Campo Obrigatório.'}, },

            errorClass: "help-inline",
            errorElement: "span",
            highlight: function(element, errorClass, validClass) {
                $(element).parents('.form-group').addClass('error');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).parents('.form-group').removeClass('error');
                $(element).parents('.form-group').addClass('success');
            }
        });
    });
</script>