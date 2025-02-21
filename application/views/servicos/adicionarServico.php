<script src="<?php echo base_url() ?>assets/js/jquery.mask.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/funcoes.js"></script>
                
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card bg-light">
                <div class="card-header bg-transparent">
                    <h3 class="card-title">Cadastro de Serviços</h3>
                </div>
                <hr class="m-0-0">
                <?php if ($custom_error != '') {
                    echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>' . $custom_error . '</div>';
                } ?>
                <form action="<?php echo current_url(); ?>" id="formCliente" method="post" class="form-horizontal p-t-5">
                    <div class="form-body">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="nome" class="control-label text-right col-md-3">Nome<span class="required text-danger">*</span></label>

                                        <div class="col-md-9">
                                            <input type="text" id="nome" class="form-control" name="nome" value="<?php echo set_value('nome'); ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger row">
                                        <label for="preco" class="control-label text-right col-md-3">Preço<span class="required text-danger">*</span></label>

                                        <div class="col-md-9">
                                            <input id="preco" type="text" name="preco" value="<?php echo set_value('preco'); ?>" class="form-control form-control-danger" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="descricao" class="control-label text-right col-md-1">Descrição</label>

                                        <div class="col-md-11">
                                            <input type="text" id="descricao" class="form-control" name="descricao" value="<?php echo set_value('descricao'); ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                        </div>
                        <!-- End card body -->
                        <hr class="m-0-0">

                        <div class="form-actions">
                            <div class="text-center p-25">
                                <button type="submit" class="btn btn-success waves-effect waves-light p-0-0"><span class="button__icon"><i class="mdi mdi-content-save-all"></i></span><span class="button__text2 p-r-30">Salvar</span></button>
                                
                                <button type="reset" class="btn btn-warning waves-effect waves-light p-0-0"><span class="button__icon"><i class="mdi mdi-broom"></i></span><span class="button__text2 p-r-25">Limpar</span></button>

                                <a class="btn btn-danger waves-effect waves-light p-0-0" href="<?php echo site_url() ?>/servicos"><span class="button__icon"><i class="mdi mdi-reply-all"></i></span><span class="button__text2 p-r-20">Cancelar</span></a>
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

        $("#nuit").focus();
        $('#formCliente').validate({
            rules: { nome: {required: true}, preco: {required: true}, },
            messages: { nome: {required: 'Campo Obrigatório.'}, preco: {required: 'Campo Obrigatório.'}, },

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