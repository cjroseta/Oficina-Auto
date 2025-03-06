<script src="<?php echo base_url() ?>assets/js/jquery.mask.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/funcoes.js"></script>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card bg-light">
                <div class="card-header bg-transparent">
                    <h3 class="card-title">Cadastro de Contacto</h3>
                </div>
                <hr class="m-0-0">
                <?php if ($custom_error != '') {
                    echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>' . $custom_error . '</div>';
                } ?>
                <form action="<?php echo current_url(); ?>" id="formContact" method="post" class="form-horizontal p-t-5">
                    <div class="form-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="nameContact" class="control-label text-right col-md-3">Nome/Razão Social<span class="required text-danger"> *</span></label>
                                        <div class="col-md-9">
                                            <input id="nameContact" type="text" name="nameContact" value="<?php echo set_value('nameContact'); ?>" class="form-control form-control-danger" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="nuit" class="control-label text-right col-md-3">NUIT<span class="required text-danger"> *</span></label>
                                        <div class="col-md-9">
                                            <input type="number" id="nuit" class="form-control" maxlength="9" minlength="9" min="0" name="nuit" placeholder="Somente números" value="<?php echo set_value('nuit'); ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="contact" class="control-label text-right col-md-3">Contacto</label>
                                        <div class="col-md-9">
                                            <input type="text" id="contact" class="form-control" name="contact" value="<?php echo set_value('contato'); ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="telefone" class="control-label text-right col-md-3">Telefone</label>
                                        <div class="col-md-9">
                                            <input id="telefone" type="text" name="telefone" value="<?php echo set_value('telefone'); ?>" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="celular" class="control-label text-right col-md-3">Celular</label>
                                        <div class="col-md-9">
                                            <input type="tel" id="celular" class="form-control" name="celular" value="<?php echo set_value('celular'); ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
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
                                    <div class="form-group row">
                                        <label for="city" class="control-label text-right col-md-3">Cidade</label>
                                        <div class="col-md-9">
                                            <input type="text" id="city" name="city" value="<?php echo set_value('city'); ?>" class="form-control form-control-danger" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->

                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="adrress" class="control-label text-right col-md-3">Endereço</label>
                                        <div class="col-md-9">
                                            <input type="text" id="adrress" class="form-control" name="adrress" value="<?php echo set_value('adrress'); ?>" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="category" class="control-label text-right col-md-3">Categória<span class="required text-danger"> *</span></label>
                                        <div class="col-md-9">
                                            <select class="custom-select mr-sm-2" name="category" id="category">
                                                <option value=""></option>
                                                <option value="Empresa Pública">Empresa Pública</option>
                                                <option value="Empresa Privada">Empresa Privada</option>
                                                <option value="ONG">ONG</option>
                                                <option value="Pessoa Física">Pessoa Física</option>
                                                <option value="Outro">Outro</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Tipo de Contacto</label>
                                        <div class="col-lg-9">
                                            <label for="type_contact" class="text-left col-md-3 btn btn-secondary">Fornecedor
                                                <input type="checkbox" id="type_contact" name="type_contact" value="1" class="m-l-15">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="notas" class="control-label text-right col-md-3">Notas e Observações</label>
                                        <div class="col-md-9">
                                            <textarea id="notas" name="notas" class="form-control"></textarea>
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

                                <a class="btn btn-danger waves-effect waves-light p-0-0" href="<?php echo site_url() ?>/contacts"><span class="button__icon"><i class="mdi mdi-reply-all"></i></span><span class="button__text2 p-r-20">Cancelar</span></a>
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

<script type="text/javascript">
    $(document).ready(function() {

        $("#nameContact").focus();
        $('#formContact').validate({
            rules: {
                nuit: { required: true },
                nameContact: { required: true },
                category: { required: true},
            },
            messages: {
                nuit: { required: 'Campo Obrigatório.' },
                nameContact: { required: 'Campo Obrigatório.' },
                category: { required: 'Campo Obrigatório.' },
            },

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