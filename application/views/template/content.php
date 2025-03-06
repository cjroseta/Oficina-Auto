        <!-- Page wrapper  -->
        <!-- Conteudo e Rodape -->
        <div class="page-wrapper">
            <!-- Bread crumb and right sidebar toggle -->
            <div class="page-breadcrumb p-t-10">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h1 class="page-title"><?php 
                        if ($this->uri->segment(1) == null) {
                            echo "<h3>Dashboard</h3>";
                        } else {
                            // Personalizar os nomes dos Controllers
                            if ($this->uri->segment(1) == "servicos") {
                                echo "Serviços";
                            } elseif ($this->uri->segment(1) == "cotacoes") {
                                echo "Cotações";
                            } elseif ($this->uri->segment(1) == "jobCards") {
                                echo "Ordens de Serviços";
                            } elseif ($this->uri->segment(1) == "rh") {
                                echo "Recursos Humanos";
                            } elseif ($this->uri->segment(1) == "contacts") {
                                echo "Contactos";
                            } else {
                                echo ucfirst($this->uri->segment(1));
                            } 
                        }  
                        ?></h1>
                    </div>

                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="<?= base_url() ?>" class="font-15" title="Dashboard"><i class="mdi mdi-home"></i>Início</a>
                                    </li>
                                    <?php if ($this->uri->segment(1) != null) {?>   
                                        <li class="breadcrumb-item">
                                            <a href="<?= base_url() .'index.php/'. $this->uri->segment(1) ?>" class="font-15" title="<?= ucfirst($this->uri->segment(1)); ?>"><?= ucfirst($this->uri->segment(1)); ?></a>
                                        </li>
                                        
                                        <?php if ($this->uri->segment(2) != null){?>
                                            <a href="<?= base_url() . 'index.php/' . $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/' . $this->uri->segment(3) ?>" class="breadcrumb-item m-t-5 active" title="<?= ucfirst($this->uri->segment(2)); ?>"><?= ucfirst($this->uri->segment(2));
                                        } ?>
                                        </a>
                                    <?php } ?>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Bread crumb and right sidebar toggle -->
            <hr class="m-0-0">

            <!-- Container fluid  -->
                    <?php if ($var = $this->session->flashdata('success')): ?><script>swal("Sucesso!", "<?php echo str_replace('"', '', $var); ?>", "success");</script><?php endif; ?>

                    <?php if ($var = $this->session->flashdata('error')): ?><script>swal("Falha!", "<?php echo str_replace('"', '', $var); ?>", "error");</script><?php endif; ?>
                        
                    <?php if (isset($view)) {
                        echo $this->load->view($view, null, true);
                    } ?>
            <!-- End Container fluid  -->
