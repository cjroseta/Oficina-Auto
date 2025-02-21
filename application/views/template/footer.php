            <!-- footer -->
            <footer class="footer text-center">
                <?php echo date('Y') ?> &map; Powered by ROSTECH-EI.CO.MZ
            </footer>
            <!-- End footer -->
            </div>
            </div>
            <!-- End Wrapper -->

            <!-- modal  -->
            <div id="add1-cliente-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Novo Cliente</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url() . "index.php/clientes/adicionarModal" ?>" id="formCliente" method="post" class="form-horizontal">
                                <div class="form-group">
                                    <label for="nuit" class="control-label">NUIT: </label>
                                    <input type="text" id="nuit" class="form-control" name="nuit" value="" />
                                    <input id="urlAtual" type="hidden" name="urlAtual" value="<?php echo current_url() ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="nomeCliente" class="control-label">Nome/Razão Social: </label>
                                    <input id="nomeCliente" type="text" name="nomeCliente" value="" class="form-control form-control-danger" />
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success waves-effect waves-light">Salvar</button>
                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cancelar</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /.modal -->

            <!-- All Jquery -->
            <!-- Bootstrap tether Core JavaScript -->
            <script src="<?= base_url(); ?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
            <script src="<?= base_url(); ?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
            <script src="<?= base_url(); ?>assets/js/matrix.js"></script>

            <!-- apps -->
            <script src="<?= base_url(); ?>assets/dist/js/app.min.js"></script>

            <?php if ($configuration['app_theme'] == 'dark') { ?>
                <script src="<?= base_url(); ?>assets/dist/js/app.init.dark.js"></script>
            <?php } ?>

            <?php if ($configuration['app_theme'] == 'white') { ?>
                <script src="<?= base_url(); ?>assets/dist/js/app.init.js"></script>
            <?php } ?>

            <?php if ($configuration['app_theme'] == 'horizontal') { ?>
                <script src="<?= base_url(); ?>assets/dist/js/app.init.horizontal.js"></script>
            <?php } ?>

            <?php if ($configuration['app_theme'] == 'iconbar') { ?>
                <script src="<?= base_url(); ?>assets/dist/js/app.init.iconbar.js"></script>
            <?php } ?>

            <?php if ($configuration['app_theme'] == 'mini-sidebar') { ?>
                <script src="<?= base_url(); ?>assets/dist/js/app.init.mini-sidebar.js"></script>
            <?php } ?>

            <script src="<?= base_url(); ?>assets/dist/js/app-style-switcher.js"></script>

            <!-- slimscrollbar scrollbar JavaScript -->
            <script src="<?= base_url(); ?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
            <script src="<?= base_url(); ?>assets/extra-libs/sparkline/sparkline.js"></script>

            <!--Wave Effects -->
            <script src="<?= base_url(); ?>assets/dist/js/waves.js"></script>
            <!--Menu sidebar -->
            <script src="<?= base_url(); ?>assets/dist/js/sidebarmenu.js"></script>

            <!--Datatable plugins-->
            <script src="<?= base_url(); ?>assets/extra-libs/DataTables/datatables.min.js"></script>
            <script src="<?= base_url(); ?>assets/dist/js/pages/datatable/datatable-basic.init.js"></script>

            <!--Custom JavaScript -->
            <script src="<?= base_url(); ?>assets/dist/js/custom.js"></script>
            <script src="<?= base_url(); ?>assets/dist/js/custom.min.js"></script>

            <!-- chart -->
            <script src="<?= base_url(); ?>assets/extra-libs/c3/d3.min.js"></script>
            <script src="<?= base_url(); ?>assets/extra-libs/c3/c3.min.js"></script>

            <script src="<?= base_url(); ?>assets/dist/js/pages/c3-chart/bar-pie/c3-donut.js"></script>
            <script src="<?= base_url(); ?>assets/dist/js/pages/dashboards/dashboard3.js"></script>

            <!--chartis chart-->
            <script src="<?= base_url(); ?>assets/libs/chartist/dist/chartist.min.js"></script>
            <script src="<?= base_url(); ?>assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

            <script src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>

            </body>

            </html>