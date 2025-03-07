<script src="<?php echo base_url() ?>assets/js/jquery.mask.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/funcoes.js"></script>
                
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card bg-light">
                <div class="card-header bg-transparent">
                    <h3 class="card-title">Cadastro de Producto</h3>
                </div>
                <hr class="m-0-0">
                <?php if ($custom_error != '') {
                    echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>' . $custom_error . '</div>';
                } ?>
                <form action="<?php echo current_url(); ?>" id="formProduct" method="post" class="form-horizontal p-t-5">
                    <div class="form-body">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="name" class="control-label text-right col-md-3">Nome<span class="required text-danger"> *</span></label>

                                        <div class="col-md-9">
                                            <input type="text" id="name" class="form-control" name="name" value="<?php echo set_value('name'); ?>" autofocus />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger row">
                                        <label for="bar_code" class="control-label text-right col-md-3">Código de Barra<span class="required text-danger">*</span></label>

                                        <div class="col-md-9">
                                            <input id="bar_code" type="text" name="bar_code" value="<?php echo set_value('bar_code'); ?>" class="form-control form-control-danger" />
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
                                            <input type="text" id="modelo" class="form-control" name="modelo" value="<?php echo set_value('modelo'); ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger row">
                                        <label for="localizacao" class="control-label text-right col-md-3">Localização</label>
                                        <div class="col-md-9">
                                            <input id="localizacao" type="text" name="localizacao" value="<?php echo set_value('localizacao'); ?>" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="cost" class="control-label text-right col-md-3">Custo</label>
                                        <div class="col-md-9">
                                            <input type="number" id="cost" class="form-control" name="cost" value="<?php echo set_value('cost'); ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger row">
                                        <label for="price" class="control-label text-right col-md-3">Preço</label>

                                        <div class="col-md-9">
                                            <input type="number" id="price" name="price" value="<?php echo set_value('price'); ?>" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="stock" class="control-label text-right col-md-3">Estoque Actual</label>
                                        <div class="col-md-9">
                                            <input type="number" id="stock" class="form-control" name="stock" value="<?php echo set_value('stock'); ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger row">
                                        <label for="min_stock" class="control-label text-right col-md-3">Estoque Minimo</label>
                                        <div class="col-md-9">
                                            <input type="number" id="min_stock" name="min_stock" value="<?php echo set_value('min_stock'); ?>" class="form-control form-control-danger" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            
                            <div class="row">                                
                                <div class="col-md-6">
                                    <div class="form-group has-danger row">
                                        <label for="grupo" class="control-label text-right col-md-3">Grupo</label>
                                        <div class="col-md-9">
                                            <input id="grupo" type="text" name="grupo" value="<?php echo set_value('grupo'); ?>" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="notas" class="control-label text-right col-md-3">Notas e Observações</label>
                                        <div class="col-md-9">
                                            <textarea id="notas" name="notas" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="fotos" class="control-label text-right col-md-3">Imagem</label>
                                        <div class="col-md-9">
                                            <input id="fotos" type="file" name="fotos[]" multiple class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End card body -->
                        <hr class="m-0-0">

                        <div class="form-actions">
                            <div class="text-center p-25">
                                <button type="submit" class="btn btn-success waves-effect waves-light p-0-0"><span class="button__icon"><i class="mdi mdi-content-save-all"></i></span><span class="button__text2 p-r-30">Salvar</span></button>
                                
                                <button type="reset" class="btn btn-warning waves-effect waves-light p-0-0"><span class="button__icon"><i class="mdi mdi-broom"></i></span><span class="button__text2 p-r-25">Limpar</span></button>

                                <a class="btn btn-danger waves-effect waves-light p-0-0" href="<?php echo site_url() ?>/products"><span class="button__icon"><i class="mdi mdi-reply-all"></i></span><span class="button__text2 p-r-20">Cancelar</span></a>
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
        $('#formProduct').validate({
            rules: { name: {required: true}, bar_code: {required: true}, },
            messages: { name: {required: 'Campo Obrigatório.'}, bar_code: {required: 'Campo Obrigatório.'}, },

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