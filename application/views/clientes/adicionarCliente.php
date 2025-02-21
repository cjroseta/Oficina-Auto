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
                <form action="<?php echo current_url(); ?>" id="formCliente" method="post" class="form-horizontal p-t-5">
                    <div class="form-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="nomeCliente" class="control-label text-right col-md-3">Nome/Razão Social<span class="required text-danger"> *</span></label>
                                        <div class="col-md-9">
                                            <input id="nomeCliente" type="text" name="nomeCliente" value="<?php echo set_value('nomeCliente'); ?>" class="form-control form-control-danger" />
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
                                        <label for="contato" class="control-label text-right col-md-3">Contacto</label>
                                        <div class="col-md-9">
                                            <input type="text" id="contato" class="form-control" name="contato" value="<?php echo set_value('contato'); ?>" />
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
                                        <label for="endereco" class="control-label text-right col-md-3">Endereço</label>
                                        <div class="col-md-9">
                                            <input type="text" id="endereco" class="form-control" name="endereco" value="<?php echo set_value('endereco'); ?>" />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="categoria" class="control-label text-right col-md-3">Categória<span class="required text-danger"> *</span></label>
                                        <div class="col-md-9">
                                            <select class="custom-select mr-sm-2" name="categoria" id="categoria">
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
                                        <label class="control-label text-right col-md-3">Tipo de Cliente</label>
                                        <div class="col-lg-9">
                                            <label for="tipo_cliente" class="text-left col-md-3 btn btn-secondary">Fornecedor
                                                <input type="checkbox" id="tipo_cliente" name="tipo_cliente" value="1" class="m-l-15">
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

                                <a class="btn btn-danger waves-effect waves-light p-0-0" href="<?php echo site_url() ?>/clientes"><span class="button__icon"><i class="mdi mdi-reply-all"></i></span><span class="button__text2 p-r-20">Cancelar</span></a>
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

        $("#nomeCliente").focus();
        $('#formCliente').validate({
            rules: {
                nuit: { required: true },
                nomeCliente: { required: true },
                categoria: { required: true},
            },
            messages: {
                nuit: { required: 'Campo Obrigatório.' },
                nomeCliente: { required: 'Campo Obrigatório.' },
                categoria: { required: 'Campo Obrigatório.' },
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