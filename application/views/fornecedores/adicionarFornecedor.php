<script src="<?php echo base_url() ?>assets/js/jquery.mask.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/funcoes.js"></script>
                
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card bg-light">
                <div class="card-header bg-transparent">
                    <h3 class="card-title">Cadastro de Fornecedor</h3>
                </div>
                <hr class="m-0-0">
                <?php if ($custom_error != '') {
                    echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>' . $custom_error . '</div>';
                } ?>
                <form action="<?php echo current_url(); ?>" id="formFornecedor" method="post" class="form-horizontal p-t-5">
                    <div class="form-body">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="nuit" class="control-label text-right col-md-3">NUIT<span class="required text-danger">*</span></label>

                                        <div class="col-md-9">
                                            <input type="text" id="nuit" class="form-control" name="nuit" value="<?php echo set_value('nuit'); ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger row">
                                        <label for="nomeFornecedor" class="control-label text-right col-md-3">Nome Fornecedor<span class="required text-danger">*</span></label>

                                        <div class="col-md-9">
                                            <input id="nomeFornecedor" type="text" name="nomeFornecedor" value="<?php echo set_value('nomeFornecedor'); ?>" class="form-control form-control-danger" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="contato" class="control-label text-right col-md-3">Contacto</label>

                                        <div class="col-md-9">
                                            <input type="text" id="contato" class="form-control" name="contato" value="<?php echo set_value('contato'); ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger row">
                                        <label for="telefone" class="control-label text-right col-md-3">Telefone</label>
                                        <div class="col-md-9">
                                            <input id="tel" type="text" name="telefone" value="<?php echo set_value('telefone'); ?>" class="form-control"/>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="celular1" class="control-label text-right col-md-3">Celular 1</label>

                                        <div class="col-md-9">
                                            <input type="tel" id="celular1" class="form-control" name="celular1" value="<?php echo set_value('celular1'); ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger row">
                                        <label for="celular2" class="control-label text-right col-md-3">Celular 2</label>

                                        <div class="col-md-9">
                                            <input type="tel" id="celular2" name="celular2" value="<?php echo set_value('celular2'); ?>" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="email" class="control-label text-right col-md-3">E-mail</label>

                                        <div class="col-md-9">
                                            <input type="email" id="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger row">
                                        <label for="cidade" class="control-label text-right col-md-3">Cidade</label>
                                        <div class="col-md-9">
                                            <input type="text" id="cidade" name="cidade" value="<?php echo set_value('cidade'); ?>" class="form-control form-control-danger" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="endereco" class="control-label text-right col-md-3">Endereco</label>

                                        <div class="col-md-9">
                                            <input type="text" id="endereco" class="form-control" name="endereco" value="<?php echo set_value('endereco'); ?>" />
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

                                <a class="btn btn-danger waves-effect waves-light p-0-0" href="<?php echo site_url() ?>/fornecedores"><span class="button__icon"><i class="mdi mdi-reply-all"></i></span><span class="button__text2 p-r-20">Cancelar</span></a>
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
        $('#formFornecedor').validate({
            rules: { nuit: {required: true}, nomeFornecedor: {required: true}, },
            messages: { nuit: {required: 'Campo Obrigatório.'}, nomeFornecedor: {required: 'Campo Obrigatório.'}, },

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