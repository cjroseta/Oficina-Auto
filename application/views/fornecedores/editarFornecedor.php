<script src="<?php echo base_url() ?>assets/js/jquery.mask.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/funcoes.js"></script>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-xlg-9 col-md-7">
            <div class="card bg-light">
                <div class="card-header bg-transparent">
                    <h3 class="card-title">Editar Fornecedor</h3>
                </div>
                <hr class="m-0-0">

                <?php if ($custom_error != '') {
                    echo '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>' . $custom_error . '</div>';
                } ?>

                <form action="<?php echo current_url(); ?>" method="post" class="form-horizontal p-t-5" id="formCliente">
                
                    <div class="form-body">
                        <div class="card-body pb-0">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="nuit" class="control-label text-right col-md-3">NUIT<span class="required text-danger">*</span></label>

                                        <div class="col-md-9">
                                            <input type="text" id="nuit" class="form-control" name="nuit" value="<?php echo $result->nuit; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger row">
                                        <?php echo form_hidden('idFornecedores', $result->idFornecedores) ?>
                                        <label for="nomeFornecedor" class="control-label text-right col-md-3">Nome<span class="required text-danger">*</span></label>

                                        <div class="col-md-9">
                                            <input id="nomeFornecedor" type="text" name="nomeFornecedor" value="<?php echo $result->nomeFornecedor; ?>" class="form-control form-control-danger" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row1-->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="contato" class="control-label text-right col-md-3">Contacto</label>

                                        <div class="col-md-9">
                                            <input type="text" id="contato" class="form-control" name="contato" value="<?php echo $result->contato; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger row">
                                        <label for="telefone" class="control-label text-right col-md-3">Telefone</label>

                                        <div class="col-md-9">
                                            <input id="telefone" type="text" name="telefone" value="<?php echo $result->telefone; ?>" class="form-control form-control-danger" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row2-->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="celular" class="control-label text-right col-md-3">Celular1</label>

                                        <div class="col-md-9">
                                            <input type="text" id="celular1" class="form-control" name="celular1" value="<?php echo $result->celular; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger row">
                                        <label for="celular2" class="control-label text-right col-md-3">Celular2</label>

                                        <div class="col-md-9">
                                            <input id="celular2" type="text" name="celular2" value="<?php echo $result->celular2; ?>" class="form-control form-control-danger" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row3-->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="email" class="control-label text-right col-md-3">E-mail</label>

                                        <div class="col-md-9">
                                            <input type="text" id="email" class="form-control" name="email" value="<?php echo $result->email; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group has-danger row">
                                        <label for="cidade" class="control-label text-right col-md-3">Cidade</label>

                                        <div class="col-md-9">
                                            <input id="cidade" type="text" name="cidade" value="<?php echo $result->cidade; ?>" class="form-control form-control-danger" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row4-->

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label for="endereco" class="control-label text-right col-md-3">Endereço</label>

                                        <div class="col-md-9">
                                            <input type="text" id="endereco" class="form-control" name="endereco" value="<?php echo $result->endereco; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row5-->

                        </div>
                        <!-- End card body -->
                        <hr class="m-0-0">

                        <div class="form-actions">
                            <div class="text-center p-25">
                                <button type="submit" class="btn btn-success waves-effect waves-light p-0-0"><span class="button__icon"><i class="mdi mdi-content-save-all"></i></span><span class="button__text2">Actualizar</span></button>

                                <a class="btn btn-danger waves-effect waves-light p-0-0" href="<?php echo site_url() ?>/fornecedores"><span class="button__icon"><i class="mdi mdi-reply-all"></i></span><span class="button__text2 p-r-20">Voltar</span></a>
                            </div>
                        </div>
                        <!-- End Form Action -->
                    </div>
                    <!-- End form body -->            
                </form>
            </div>
            <!-- End card -->
        </div>
    </div>
    <!-- End row -->
</div>
<!-- End container fluid -->