<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery-ui/css/smoothness/jquery-ui-1.9.2.custom.css" />
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-ui/js/jquery-ui-1.9.2.custom.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>

<script src="<?php echo base_url() ?>assets/js/jquery.mask.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/funcoes.js"></script>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card bg-light">
                <div class="card-header bg-transparent">
                    <h3 class="card-title">Cadastro de Viatura</h3>
                </div>
                <hr class="m-0-0">
                <?php if ($custom_error != '') {
                    echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>' . $custom_error . '</div>';
                } ?>
                <form action="<?php echo current_url(); ?>" id="formViatura" method="post" class="form-horizontal p-t-5" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="matricula" class="control-label text-right col-md-3">Matrícula<span class="required text-danger"> *</span></label>
                                        <div class="col-md-9">
                                            <input id="matricula" type="text" name="matricula" value="<?php echo set_value('matricula'); ?>" class="form-control" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="modelo" class="control-label text-right col-md-3">Modelo<span class="required text-danger"> *</span></label>
                                        <div class="col-md-9">
                                            <input id="modelo" type="text" name="modelo" value="<?php echo set_value('modelo'); ?>" class="form-control" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="marca" class="control-label text-right col-md-3">Marca<span class="required text-danger"> *</span></label>
                                        <div class="col-md-9">
                                            <input id="marca" type="text" name="marca" value="<?php echo set_value('marca'); ?>" class="form-control" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="ano" class="control-label text-right col-md-3">Ano de Fabricação</label>
                                        <div class="col-md-9">
                                            <input id="ano" type="number" name="ano" value="<?php echo set_value('ano'); ?>" class="form-control" min="1900" max="<?php echo date('Y'); ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="tipo_viatura" class="control-label text-right col-md-3">Tipo de Viatura<span class="required text-danger"> *</span></label>
                                        <div class="col-md-9">
                                            <select class="custom-select" name="tipo_viatura" id="tipo_viatura">
                                                <option value=""></option>
                                                <option value="Ligeiro">Ligeiro</option>
                                                <option value="Pesado">Pesado</option>
                                                <option value="Outro">Outro</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="num_chassis" class="control-label text-right col-md-3">Número do Chassis</label>
                                        <div class="col-md-9">
                                            <input id="num_chassis" type="text" name="num_chassis" value="<?php echo set_value('num_chassis'); ?>" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="capacidade_tanque" class="control-label text-right col-md-3">Capacidade do Tanque (litros)</label>
                                        <div class="col-md-9">
                                            <input id="capacidade_tanque" type="number" name="capacidade_tanque" value="<?php echo set_value('capacidade_tanque'); ?>" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="tipo_combustivel" class="control-label text-right col-md-3">Tipo de Combustível<span class="required text-danger"> *</span></label>
                                        <div class="col-md-9">
                                            <select class="custom-select" name="tipo_combustivel" id="tipo_combustivel">
                                                <option value=""></option>
                                                <option value="Gasolina">Gasolina</option>
                                                <option value="Diesel">Diesel</option>
                                                <option value="Elétrico">Elétrico</option>
                                                <option value="Híbrido">Híbrido</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="cliente" class="control-label text-right col-md-3">Cliente</label>
                                        <div class="col-md-9">
                                            <input id="cliente" type="text" name="cliente" value="<?php echo set_value('cliente'); ?>" class="form-control" />                                            
                                            <input id="clientes_id" class="span12" type="hidden" name="clientes_id" value="<?php echo set_value('clientes_id'); ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="status_viatura" class="control-label text-right col-md-3">Status da Viatura</label>
                                        <div class="col-md-9">
                                            <input id="status_viatura" type="text" name="status_viatura" value="<?php echo set_value('status_viatura'); ?>" class="form-control" />
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
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Container fluid  -->

<script type="text/javascript">
    $(document).ready(function() {
        $("#cliente").autocomplete({
            source: "<?php echo base_url(); ?>index.php/viaturas/autoCompleteCliente",
            minLength: 1,
            select: function(event, ui) {
                $("#clientes_id").val(ui.item.id);
            }
        });
        $("#tecnico").autocomplete({
            source: "<?php echo base_url(); ?>index.php/viaturas/autoCompleteUsuario",
            minLength: 1,
            select: function(event, ui) {
                $("#usuarios_id").val(ui.item.id);
            }
        });

        $("#cliente").focus();
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