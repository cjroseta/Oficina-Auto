<script src="<?php echo base_url() ?>assets/js/jquery.mask.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/funcoes.js"></script>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card bg-light">
                <div class="card-header bg-transparent">
                    <h3 class="card-title">Cadastro de Usuário</h3>
                </div>
                <hr class="m-0-0 bg-white">
                <?php if ($custom_error != '') {
                    echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>' . $custom_error . '</div>';
                } ?>

                <form action="<?php echo current_url(); ?>" method="post" id="formUsuario" class="form">
                
                    <div class="card-body">

                        <div class="form-group m-t-20 row col-md-6">
                            <label for="nome" class="col-4 col-form-label text-right">Nome<span class="required text-danger">*</span></label>
                            <div class="col-8">
                                <input class="form-control" name="nome" type="text" value="<?php echo set_value('nome'); ?>" id="nome" />
                            </div>
                        </div>

                        <div class="form-group row col-md-6">
                            <label for="email" class="col-4 col-form-label text-right">Email<span class="required text-danger">*</span></label>
                            <div class="col-8">
                                <input class="form-control" name="email" type="email" value="<?php echo set_value('email'); ?>" id="email">
                            </div>
                        </div>

                        <div class="form-group row col-md-6">
                            <label for="senha" class="col-4 col-form-label text-right">Senha<span class="required text-danger">*</span></label>
                            <div class="col-8">
                                <input class="form-control" name="senha" type="password" value="<?php echo set_value('nome'); ?>" id="senha">
                            </div>
                        </div>

                        <div class="form-group row col-md-6">
                            <label for="dataExpiracao" class="col-4 col-form-label text-right">Data Limite<span class="required text-danger">*</span></label>
                            <div class="col-8">
                                <input class="form-control" name="dataExpiracao" type="date" value="<?php echo set_value('dataExpiracao'); ?>" id="dataExpiracao">
                            </div>
                        </div>

                        <div class="form-group row col-md-6">
                            <label for="situacao" class="col-4 col-form-label text-right">Situação<span class="required text-danger">*</span></label>
                            <div class="col-8">
                                <select class="custom-select col-12" name="situacao" id="situacao">
                                    <option value="1">Activo</option>
                                    <option value="0">Inactivo</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row col-md-6">
                            <label for="permissao" class="col-4 col-form-label text-right">Nível de Permissão<span class="required text-danger">*</span></label>
                            <div class="col-8">
                                <select class="custom-select col-12" id="permissoes_id" name="permissoes_id">
                                    <?php foreach ($permissoes as $p) {
                                        echo '<option value="' . $p->idPermissao . '">' . $p->nome . '</option>';
                                    } ?>
                                </select>
                            </div>
                        </div>

                    </div>
                    <!-- End card body -->
                    <hr class="m-0-0 bg-white">

                    <div class="form-actions">
                        <div class="text-center p-25">
                            <button type="submit" class="btn btn-success waves-effect waves-light p-0-0"><span class="button__icon"><i class="mdi mdi-content-save-all"></i></span><span class="button__text2 bt-w-90">Salvar</span></button>
                                
                            <button type="reset" class="btn btn-warning waves-effect waves-light p-0-0"><span class="button__icon"><i class="mdi mdi-broom"></i></span><span class="button__text2 bt-w-90">Limpar</span></button>

                            <a class="btn btn-danger waves-effect waves-light p-0-0" href="<?php echo site_url() ?>/usuarios"><span class="button__icon"><i class="mdi mdi-reply-all"></i></span><span class="button__text2 bt-w-90">Voltar</span></a>
                        </div>
                    </div>
                    <!-- End Form Action -->

                </form>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $("#nome").focus();
        $('#formUsuario').validate({
            rules: { nome: {required: true}, email: {required: true}, senha: {required: true}, dataExpiracao: {required: true}, situacao: {required: true}, permissao: {required: true}, },
            messages: { nome: {required: 'Campo Obrigatório.'}, email: {required: 'Campo Obrigatório.'}, senha: {required: 'Campo Obrigatório.'}, dataExpiracao: {required: 'Campo Obrigatório.'}, situacao: {required: 'Campo Obrigatório.'}, permissao: {required: 'Campo Obrigatório.'}, },

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