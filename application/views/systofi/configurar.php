<script src="<?php echo base_url() ?>assets/js/jquery.mask.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/funcoes.js"></script>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-transparent">
                    <h3 class="card-title">Configurar Sistema</h3>
                </div>
                <hr class="m-0-0 bg-white">
                <?php if ($custom_error != '') {
                    echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>' . $custom_error . '</div>';
                } ?>

                <form action="<?php echo current_url(); ?>" method="post" id="formConfigurar" class="form">
                    <div class="card-body">

                        <div class="form-group m-t-20 row col-md-6">
                            <label for="app_theme" class="col-3 col-form-label text-right">Tema do Sistema<span class="required text-danger">*</span></label>
                            <div class="col-9">                                
                                <select class="custom-select col-12 bg-w dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="app_theme" id="app_theme">                      
                                    <option value="white" <?= $configuration['app_theme'] == 'white' ? 'selected' : ''; ?>>Claro</option>

                                    <option value="dark" <?= $configuration['app_theme'] == 'dark' ? 'selected' : ''; ?>>Escuro</option>

                                    <option value="horizontal" <?= $configuration['app_theme'] == 'horizontal' ? 'selected' : ''; ?>>Formato Horizontal</option>

                                    <option value="mini-sidebar" <?= $configuration['app_theme'] == 'mini-sidebar' ? 'selected' : ''; ?>>Mini-sidebar</option>

                                    <option value="iconbar" <?= $configuration['app_theme'] == 'iconbar' ? 'selected' : ''; ?>>Iconbar</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <!-- End card body -->
                    <hr class="m-0-0 bg-white">

                    <div class="form-actions bg-info-l">
                        <div class="text-center p-25">
                            <button type="submit" class="btn btn-success waves-effect waves-light p-0-0"><span class="button__icon"><i class="mdi mdi-content-save-all"></i></span><span class="button__text2 p-r-30">Salvar</span></button>
                                
                            <button type="reset" class="btn btn-warning waves-effect waves-light p-0-0"><span class="button__icon"><i class="mdi mdi-broom"></i></span><span class="button__text2 p-r-25">Limpar</span></button>

                            <a class="btn btn-danger waves-effect waves-light p-0-0" href="<?php echo site_url() ?>/systofi"><span class="button__icon"><i class="mdi mdi-reply-all"></i></span><span class="button__text2 p-r-20">Voltar</span></a>
                        </div>
                    </div>
                    <!-- End Form Action -->
                
                </form>
            </div>
        </div>
    </div>
</div>