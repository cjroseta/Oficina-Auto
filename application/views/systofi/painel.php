<!-- Fazer Revisão -->
<!--<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>-->
<script src="<?= base_url(); ?>assets/js/graficosMapos.js"></script>

<!-- Custom Calender -->
<script src='<?= base_url(); ?>assets/js/fullcalendar.min.js'></script>
<link href='<?= base_url(); ?>assets/css/fullcalendar.min.css' rel='stylesheet' />

<div class="container-fluid">
    <!-- Start Row Contact to OS -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-7">
                            <i class="mdi mdi-account-multiple font-24 text-success"></i>
                            <a href="<?php echo base_url(); ?>index.php/contacts/addContact">
                                <p class="font-16 m-b-5 text-secondary" data-toggle="tooltip" data-placement="top" title="Adicionar Contacto">Contactos</p>
                            </a>
                        </div>
                        <div class="col-5">
                            <h1 class="font-light text-right mb-0"><?= $this->db->count_all('contacts'); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-7">
                            <i class="mdi mdi-package-variant font-24 text-danger"></i>
                            <a href="<?php echo base_url(); ?>index.php/products/addProduct">
                                <p class="font-16 m-b-5 text-secondary" data-toggle="tooltip" data-placement="top" title="Adicionar Productos">Productos</p>
                            </a>
                        </div>
                        <div class="col-5">
                            <h1 class="font-light text-right mb-0"><?= $this->db->count_all('products'); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card ">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-7">
                            <i class="mdi mdi-car font-24 text-warning"></i>
                            <a href="<?php echo base_url(); ?>index.php/viaturas/adicionar">
                                <p class="font-16 m-b-5 text-secondary" data-toggle="tooltip" data-placement="top" title="Adicionar Viaturas">Viaturas</p>
                            </a>
                        </div>
                        <div class="col-5">
                            <h1 class="font-light text-right mb-0"><?= $this->db->count_all('viaturas'); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-7">
                            <i class="mdi mdi-credit-card-multiple font-24 text-primary"></i>
                            <a href="<?php echo base_url(); ?>index.php/jobCard/adicionar">
                                <p class="font-16 m-b-5 text-secondary" data-toggle="tooltip" data-placement="top" title="Adicionar OS">Ordens de Serviços (OS)</p>
                            </a>
                        </div>
                        <div class="col-5">
                            <h1 class="font-light text-right mb-0"><?= $this->db->count_all('jobcard'); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Row Contact to OS -->

    <!-- Start Row Contactos to Funcionarios -->
    <div class="row">
        <div class="col-lg-2 col-md-6">
            <div class="card ">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <i class="mdi mdi-truck-delivery font-24 text-info"></i>
                            <a href="<?php echo base_url(); ?>index.php/fornecedores/adicionar">
                                <p class="font-16 m-b-5 text-secondary" data-toggle="tooltip" data-placement="top" title="Adicionar Contratos">Contratos</p>
                            </a>
                        </div>
                        <div class="col-4">
                            <h1 class="font-light text-right mb-0"><?= $this->db->count_all('fornecedores'); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-7">
                            <i class="mdi mdi-oil font-24 text-dark"></i>
                            <a href="<?php echo base_url(); ?>index.php/services/addService">
                                <p class="font-16 m-b-5 text-secondary" data-toggle="tooltip" data-placement="top" title="Adicionar Serviços">Serviços</p>
                            </a>
                        </div>
                        <div class="col-5">
                            <h1 class="font-light text-right mb-0"><?= $this->db->count_all('services'); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-7">
                            <i class="mdi mdi-cart-plus font-24 text-success"></i>
                            <a href="<?php echo base_url(); ?>index.php/vendas/adicionar">
                                <p class="font-16 m-b-5 text-secondary" data-toggle="tooltip" data-placement="top" title="Adicionar Vendas">Vendas</p>
                            </a>
                        </div>
                        <div class="col-5">
                            <h1 class="font-light text-right mb-0"><?= $this->db->count_all('vendas'); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-md-6">
            <div class="card ">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-7">
                            <i class="mdi mdi-view-dashboard font-24 text-primary"></i>
                            <a href="<?php echo base_url(); ?>index.php/cotacoes/adicionar">
                                <p class="font-16 m-b-5 text-secondary" data-toggle="tooltip" data-placement="top" title="Adicionar Cotações">Cotações</p>
                            </a>
                        </div>
                        <div class="col-5">
                            <h1 class="font-light text-right mb-0"><?= $this->db->count_all('cotacoes'); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-md-6">
            <div class="card ">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-7">
                            <i class="mdi mdi-cart font-24 text-danger"></i>
                            <a href="<?php echo base_url(); ?>index.php/compras/adicionar">
                                <p class="font-16 m-b-5 text-secondary" data-toggle="tooltip" data-placement="top" title="Adicionar Compras">Compras</p>
                            </a>
                        </div>
                        <div class="col-5">
                            <h1 class="font-light text-right mb-0"><?= $this->db->count_all('compras'); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-2 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-7">
                            <i class="mdi mdi-wrench font-24 text-info"></i>
                            <a href="<?php echo base_url(); ?>index.php/tecnicos/adicionar">
                                <p class="font-16 m-b-5 text-secondary" data-toggle="tooltip" data-placement="top" title="Adicionar Técnicos">Técnicos</p>
                            </a>
                        </div>
                        <div class="col-5">
                            <h1 class="font-light text-right mb-0"><?= $this->db->count_all('tecnicos'); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Row Contactos to Funcionarios-->

    <!-- Start Estatistica e Agenda -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="">
                    <div class="row">
                        <div class="col-lg-3 m-0">
                            <div class="card-body border-bottom">
                                <h4 class="card-title m-t-10 text-info">Estatísticas do Sistema</h4>
                            </div>
                            <div class="row m-l-10">
                                <div class="col-md-6 m-t-10">
                                    <div class="card border">
                                        <div class="card-boy">
                                            <div class="row align-items-center">
                                                <div class="col-12">
                                                    <h2 class="text-center text-danger m-0"><i class='mdi mdi-arrow-down-bold-circle'></i></h2>
                                                    <h4 class="text-center m-0"><span><strong>1323</strong></span></h4>
                                                    <h6 class="text-center">Clientes</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 m-t-10">
                                    <div class="card border">
                                        <div class="card-boy">
                                            <div class="row align-items-center">
                                                <div class="col-12">
                                                    <h2 class="text-center m-0"><i class="mdi mdi-truck-delivery font-24 text-info"></i></i></h2>
                                                    <h4 class="text-center m-0"><span><strong>1056</strong></span></h4>
                                                    <h6 class="text-center">Fornecedores</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-l-10">
                                <div class="col-md-6">
                                    <div class="card border">
                                        <div class="card-boy">
                                            <div class="row align-items-center">
                                                <div class="col-12">
                                                    <h2 class="text-center text-success m-0"><i class='mdi mdi-currency-usd'></i></h2>
                                                    <h4 class="text-center m-0"><span><strong>1056</strong></span></h4>
                                                    <h6 class="text-center">Lançamentos</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card border">
                                        <div class="card-boy">
                                            <div class="row align-items-center">
                                                <div class="col-12">
                                                    <h2 class="text-center text-dark"><i class='mdi mdi-arrow-down-bold-circle'></i></h2>
                                                    <!--<h6 class="font-light text-center"><span><strong></?php echo number_format(($financeiro_mes_dia->$diaRec), 2, ',', '.'); ?> Mtn</strong></span></h6>-->
                                                    <h6 class="card-title text-center">Orçamentos</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-l-10">
                                <div class="col-md-6">
                                    <div class="card border">
                                        <div class="card-boy">
                                            <div class="row align-items-center">
                                                <div class="col-12">
                                                    <h2 class="text-center text-primary"><i class='mdi mdi-archive'></i></h2>
                                                    <h6 class="font-light text-center"><span><strong>15</strong></span></h6>
                                                    <h6 class="card-title text-center">Documentos</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card border">
                                        <div class="card-boy">
                                            <div class="row align-items-center">
                                                <div class="col-12">
                                                    <h2 class="text-center text-info"><i class='mdi mdi-email-secure'></i></h2>
                                                    <h6 class="font-light text-center"><span>19</strong></span></h6>
                                                    <h6 class="card-title text-center">E-mail</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-l-10">
                                <div class="col-md-6">
                                    <div class="card border">
                                        <div class="card-boy">
                                            <div class="row align-items-center">
                                                <div class="col-12">
                                                    <h2 class="text-center text-danger"><i class='mdi mdi-arrow-down-bold-circle'></i></h2>
                                                    <!--<h6 class="font-light text-center"><span><strong></?php echo number_format(($financeiro_mes_dia->$diaRec), 2, ',', '.'); ?> Mtn</strong></span></h6>-->
                                                    <h6 class="card-title text-center">Receita do Dia</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card border">
                                        <div class="card-boy">
                                            <div class="row align-items-center">
                                                <div class="col-12">
                                                    <h2 class="text-center text-warning"><i class='mdi mdi-arrow-down-bold-circle'></i></h2>
                                                    <!--<h6 class="font-light text-center"><span><strong></?php echo number_format(($financeiro_mes_dia->$diaRec), 2, ',', '.'); ?> Mtn</strong></span></h6>-->
                                                    <h6 class="card-title text-center">Receita do Dia</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="card-body b-l calender-sidebar">
                                <div>
                                    <h4 class="text-info">Agenda</h4>
                                </div>
                                <div id="source-calenda"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Estatistica e Agenda -->

    <!--<div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5>Estatísticas Financeira - SIR Peças</h5>
                    <div class="row" style="padding:10px;margin:25px 0 0;">
                        <canvas id="statusOS"> </canvas>
                    </div>
                    <div class="row" style="padding:5px;"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-8 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="card-title">Balanço Mensal do Ano</h5>
                        </div>
                        <div class="ml-auto">
                            <div class="dl m-b-5">
                                <form method="get" style="display:flex;margin-right:18px;justify-content:flex-end">
                                    <input type="number" style="width:68px;margin-left:17px;padding-left: 5px" name="year" value="<?php echo intval(preg_replace('/[^0-9]/', '', $this->input->get('year'))) ?: date('Y') ?>">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <canvas id="myChart" style="overflow-x: scroll;margin-left: -14px"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="card-title">Balanço Mensal Despesas</h5>
                        </div>
                        <div class="ml-auto">
                            <div class="dl m-b-5">
                                <form method="get" style="display:flex;margin-right:18px;justify-content:flex-end">
                                    <input type="number" style="width:68px;margin-left:17px;padding-left: 5px" name="year" value="<?php echo intval(preg_replace('/[^0-9]/', '', $this->input->get('year'))) ?: date('Y') ?>">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <canvas id="myChart2" style="overflow-x: scroll;margin-left: -14px"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5>Desepesa por Secção</h5>
                    <div class="row" style="padding:10px;margin:25px 0 0;">
                        <canvas id="statusOS3"> </canvas>
                    </div>
                    <div class="row" style="padding:5px;"></div>
                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        if (window.outerWidth > 2000) {
            Chart.defaults.font.size = 15;
        };
        if (window.outerWidth < 2000 && window.outerWidth > 1367) {
            Chart.defaults.font.size = 11;
        };
        if (window.outerWidth < 1367 && window.outerWidth > 480) {
            Chart.defaults.font.size = 9.5;
        };
        if (window.outerWidth < 480) {
            Chart.defaults.font.size = 8.5;
        };

        var ctx = document.getElementById('myChart').getContext('2d');
        var ctx2 = document.getElementById('myChart2').getContext('2d');
        var StatusOS = document.getElementById('statusOS').getContext('2d');
        var StatusOS3 = document.getElementById('statusOS3').getContext('2d');

        var myChart = new Chart(ctx, {
            data: {
                labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                datasets: [{
                        label: 'Receita',
                        data: [<?php echo ($financeiro_mes->VALOR_JAN_REC); ?>,
                            <?php echo ($financeiro_mes->VALOR_FEV_REC); ?>,
                            <?php echo ($financeiro_mes->VALOR_MAR_REC); ?>,
                            <?php echo ($financeiro_mes->VALOR_APR_REC); ?>,
                            <?php echo ($financeiro_mes->VALOR_MAI_REC); ?>,
                            <?php echo ($financeiro_mes->VALOR_JUN_REC); ?>,
                            <?php echo ($financeiro_mes->VALOR_JUL_REC); ?>,
                            <?php echo ($financeiro_mes->VALOR_AGO_REC); ?>,
                            <?php echo ($financeiro_mes->VALOR_SET_REC); ?>,
                            <?php echo ($financeiro_mes->VALOR_OUT_REC); ?>,
                            <?php echo ($financeiro_mes->VALOR_NOV_REC); ?>,
                            <?php echo ($financeiro_mes->VALOR_DEZ_REC); ?>
                        ],

                        backgroundColor: 'rgb(110, 255, 239)',
                        borderRadius: 15,
                    },

                    {
                        label: 'Despesas',
                        data: [<?php echo ($financeiro_mes->VALOR_JAN_DES); ?>,
                            <?php echo ($financeiro_mes->VALOR_FEV_DES); ?>,
                            <?php echo ($financeiro_mes->VALOR_MAR_DES); ?>,
                            <?php echo ($financeiro_mes->VALOR_APR_DES); ?>,
                            <?php echo ($financeiro_mes->VALOR_MAI_DES); ?>,
                            <?php echo ($financeiro_mes->VALOR_JUN_DES); ?>,
                            <?php echo ($financeiro_mes->VALOR_JUL_DES); ?>,
                            <?php echo ($financeiro_mes->VALOR_AGO_DES); ?>,
                            <?php echo ($financeiro_mes->VALOR_SET_DES); ?>,
                            <?php echo ($financeiro_mes->VALOR_OUT_DES); ?>,
                            <?php echo ($financeiro_mes->VALOR_NOV_DES); ?>,
                            <?php echo ($financeiro_mes->VALOR_DEZ_DES); ?>
                        ],

                        backgroundColor: 'rgb(249, 150, 195)',
                        borderRadius: 15,
                    },
                ]

            },
            // configuração
            type: 'bar',
            options: {
                locale: 'pt-MZ',
                scales: {
                    y: {
                        ticks: {
                            callback: (value, index, values) => {
                                return new Intl.NumberFormat('pt-MZ', {
                                    style: 'currency',
                                    currency: 'Mtn',
                                    maximumSignificantDidits: 1
                                }).format(value);
                            }
                        }
                    },
                    x: {
                        beginAtZero: true,
                        title: {
                            display: false,
                            text: 'Meses'
                        }
                    }
                },

                plugins: {

                    legend: {
                        position: "bottom",
                        labels: {
                            usePointStyle: true,
                        }
                    }
                }
            }
        });

        var myChart = new Chart(ctx2, {
            data: {
                labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                datasets: [{
                        label: 'SIR Motors',
                        data: [<?php echo ($despesa_mes_grupo->VALOR_JAN_SIR); ?>,
                            <?php echo ($despesa_mes_grupo->VALOR_FEV_SIR); ?>,
                            <?php echo ($despesa_mes_grupo->VALOR_MAR_SIR); ?>,
                            <?php echo ($despesa_mes_grupo->VALOR_ABR_SIR); ?>,
                            <?php echo ($despesa_mes_grupo->VALOR_MAI_SIR); ?>,
                            <?php echo ($despesa_mes_grupo->VALOR_JUN_SIR); ?>,
                            <?php echo ($despesa_mes_grupo->VALOR_JUL_SIR); ?>,
                            <?php echo ($despesa_mes_grupo->VALOR_AGO_SIR); ?>,
                            <?php echo ($despesa_mes_grupo->VALOR_SET_SIR); ?>,
                            <?php echo ($despesa_mes_grupo->VALOR_OUT_SIR); ?>,
                            <?php echo ($despesa_mes_grupo->VALOR_NOV_SIR); ?>,
                            <?php echo ($despesa_mes_grupo->VALOR_DEZ_SIR); ?>
                        ],

                        backgroundColor: 'rgba(215, 2, 6, .9)',
                        borderRadius: 15,
                    },

                    {
                        label: 'Indigena',
                        data: [<?php echo ($despesa_mes_grupo->VALOR_JAN_IND); ?>,
                            <?php echo ($despesa_mes_grupo->VALOR_FEV_IND); ?>,
                            <?php echo ($despesa_mes_grupo->VALOR_MAR_IND); ?>,
                            <?php echo ($despesa_mes_grupo->VALOR_ABR_IND); ?>,
                            <?php echo ($despesa_mes_grupo->VALOR_MAI_IND); ?>,
                            <?php echo ($despesa_mes_grupo->VALOR_JUN_IND); ?>,
                            <?php echo ($despesa_mes_grupo->VALOR_JUL_IND); ?>,
                            <?php echo ($despesa_mes_grupo->VALOR_AGO_IND); ?>,
                            <?php echo ($despesa_mes_grupo->VALOR_SET_IND); ?>,
                            <?php echo ($despesa_mes_grupo->VALOR_OUT_IND); ?>,
                            <?php echo ($despesa_mes_grupo->VALOR_NOV_IND); ?>,
                            <?php echo ($despesa_mes_grupo->VALOR_DEZ_IND); ?>
                        ],

                        backgroundColor: 'rgba(240, 91, 79, .5)',
                        borderRadius: 15,
                    },
                ]

            },
            // configuração
            type: 'bar',
            options: {
                locale: 'pt-MZ',
                scales: {
                    y: {
                        ticks: {
                            callback: (value, index, values) => {
                                return new Intl.NumberFormat('pt-MZ', {
                                    style: 'currency',
                                    currency: 'Mtn',
                                    maximumSignificantDidits: 1
                                }).format(value);
                            }
                        }
                    },
                    x: {
                        beginAtZero: true,
                        title: {
                            display: false,
                            text: 'Meses'
                        }
                    }
                },

                plugins: {
                    legend: {
                        position: "bottom",
                        labels: {
                            usePointStyle: true,
                        }
                    }
                }
            }
        });

        var myChart = new Chart(statusOS, {
            data: {
                labels: ['Receita total', 'Despesa total'],
                datasets: [{
                    label: 'Total',
                    data: [
                        <?php echo ($estatisticas_financeiro->total_receita != null) ?  $estatisticas_financeiro->total_receita : '0.00'; ?>, <?php echo ($estatisticas_financeiro->total_receita != null) ?  $estatisticas_financeiro->total_despesa : '0.00'; ?>
                    ],

                    backgroundColor: [
                        'rgba(75, 192, 192, 0.5)',
                        'rgba(255, 99, 132, 0.5)'
                    ],
                    hoverOffset: 15,
                    cutout: 185
                }]
            },

            // configuração
            type: 'polarArea',
            options: {
                plugins: {
                    legend: {
                        position: "bottom",
                        labels: {
                            usePointStyle: true,

                        }
                    }
                }
            }
        });

        var myChart = new Chart(statusOS3, {
            data: {
                labels: [
                    'Despesa SIR', 'Despesa Indigena'
                ],
                datasets: [{
                    label: 'Total',
                    data: [
                        /*</?php echo $despesa_ano_grupo->VALOR_DES_SIR; ?>, 
                        </?php echo $despesa_ano_grupo->VALOR_DES_IND; ?>*/

                        <?php echo ($despesa_ano_grupo->VALOR_DES_SIR != null) ?  $despesa_ano_grupo->VALOR_DES_SIR : '0.00'; ?>,
                        <?php echo ($despesa_ano_grupo->VALOR_DES_IND != null) ?  $despesa_ano_grupo->VALOR_DES_IND : '0.00'; ?>
                    ],

                    backgroundColor: [
                        'rgba(215, 2, 6, .9)',
                        'rgba(240, 91, 79, .5)'
                    ],
                    borderWidth: 1
                }]
            },

            // configuração
            type: 'polarArea',
            options: {
                locale: 'pt-MZ',
                scales: {
                    r: {
                        ticks: {
                            callback: (value, index, values) => {
                                return new Intl.NumberFormat('pt-MZ', {
                                    style: 'currency',
                                    currency: 'Mtn',
                                    maximumSignificantDidits: 1
                                }).format(value);
                            }
                        },
                        beginAtZero: true,
                    }
                },
                plugins: {
                    legend: {
                        position: "bottom",
                        labels: {
                            usePointStyle: true,

                        }
                    }
                }
            }
        });

        function responsiveFonts() {
            myChart.update();
        }
    </script>

    <div class="row">

        <div class="col-lg-12 col-md-12">
            < !-- Start Estoque - ->
            <div class="card">
                <div class="card-body">
                    <h5></h5>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="card bg-info-l">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-5">
                                            <h5 class="card-title">Itens em Estoque<span class="font-14 font-normal op-5"></span></h5>
                                        </div>
                                        < !--
                                        <div class="col-7">
                                            <h3 class="font-light text-right"><span></?= number_format(array_sum(array_column($products, 'vendasExternas')), 2, ',', '.'); ?></span></h3>

                                            
                                        </div>- ->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="card bg-info-l">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-5">
                                            <h5 class="card-title">SIR Motors<span class="font-14 font-normal op-5"></span></h5>
                                        </div>
                                        <div class="col-7">
                                            <h3 class="font-light text-right"><span></?= array_sum(array_column($productsSir, 'estoque')) ?></span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="card bg-info-l">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-5">
                                            <h4 class="card-title">Indigena<span class="font-14 font-normal op-5"></span></h4>
                                        </div>
                                        <div class="col-7">
                                            <h3 class="font-light text-right"><span></?= array_sum(array_column($productsIndigena, 'estoque')) ?></span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="card bg-info-l">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-5">
                                            <h5 class="card-title">Valor do Estoque<span class="font-14 font-normal op-5"></span></h5>
                                        </div>
                                        < !--<div class="col-7">
                                            <h4 class="font-light text-right"><span></?= number_format(array_sum(array_column($products, 'valorEstoque')), 2, ',', '.'); ?> Mtn</span></h4>
                                        </div>- ->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="card bg-info-l">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-5">
                                            <h4 class="card-title">SIR Motors<span class="font-14 font-normal op-5"></span></h4>
                                        </div>
                                        <div class="col-7">
                                            <h4 class="font-light text-right"><span></?= number_format(array_sum(array_column($productsSir, 'valorEstoque')), 2, ',', '.'); ?> Mtn</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="card bg-info-l">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-5">
                                            <h4 class="card-title">Indigena<span class="font-14 font-normal op-5"></span></h4>
                                        </div>
                                        <div class="col-7">
                                            <h4 class="font-light text-right"><span></?= number_format(array_sum(array_column($productsIndigena, 'valorEstoque')), 2, ',', '.'); ?> Mtn</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div id="job-card" class="text-left"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            < !-- Start Estoque - ->



        </div>
    </div>-->

</div>


<!--This page JavaScript Calendar
<script src="<?= base_url(); ?>assets/libs/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/extra-libs/taskboard/js/jquery.ui.touch-punch-improved.js"></script>
<script src="<?= base_url(); ?>assets/extra-libs/taskboard/js/jquery-ui.min.js"></script>

<script src="<?= base_url(); ?>assets/libs/moment/min/moment.min.js"></script>
<script src="<?= base_url(); ?>assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="<?= base_url(); ?>assets/dist/js/pages/calendar/cal-init.js"></script>-->

<!-- Modal Status OS Calendar -->


<script type="text/javascript">
    $(document).ready(function() {
        var srcCalendarEl = document.getElementById('source-calenda');
        var srcCalendar = new FullCalendar.Calendar(srcCalendarEl, {
            locale: 'pt-Pt',
            height: 500,
            editable: false,
            selectable: false,
            businessHours: true,
            dayMaxEvents: true, // allow "more" link when too many events
            displayEventTime: false,
            events: {
                url: "<?= base_url() . "index.php/systofi/calendar"; ?>",
                method: 'GET',
                extraParams: function() { // a function that returns an object
                    return {
                        status: $("#statusOsGet").val(),
                    };
                },
                failure: function() {
                    // Por verificar este alert está a dar erro ao actualizar a página
                    // alert('Falha ao buscar OS de calendário!');
                },
            },
            eventClick: function(info) {
                var eventObj = info.event.extendedProps;
                $('#modalId').html(eventObj.id);
                $('#modalIdVisualizar').attr("href", "<?php echo base_url(); ?>index.php/os/visualizar/" + eventObj.id);
                if (eventObj.editar) {
                    $('#modalIdEditar').show();
                    $('#linkExcluir').show();
                    $('#modalIdEditar').attr("href", "<?php echo base_url(); ?>index.php/os/editar/" + eventObj.id);
                    $('#modalIdExcluir').val(eventObj.id);
                } else {
                    $('#modalIdEditar').hide();
                    $('#linkExcluir').hide();
                }
                $('#modalCliente').html(eventObj.cliente);
                $('#modalDataInicial').html(eventObj.dataInicial);
                $('#modalDataFinal').html(eventObj.dataFinal);
                $('#modalGarantia').html(eventObj.garantia);
                $('#modalStatus').html(eventObj.status);
                $('#modalDescription').html(eventObj.description);
                $('#modalDefeito').html(eventObj.defeito);
                $('#modalObservacoes').html(eventObj.observacoes);
                $('#modalTotal').html(eventObj.total);
                $('#modalDesconto').html(eventObj.desconto);
                $('#modalValorFaturado').html(eventObj.valorFaturado);

                $('#eventUrl').attr('href', event.url);
                $('#calendarModal').modal();
            },
        });
        srcCalendar.render();
    });
</script>