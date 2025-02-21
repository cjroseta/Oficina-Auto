
<!--<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.2.0/chartjs-plugin-datalabels.min.js" integrity="sha512-JPcRR8yFa8mmCsfrw4TNte1ZvF1e3+1SdGMslZvmrzDYxS69J7J49vkFL8u6u8PlPJK+H3voElBtUCzaXj+6ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="p-b-20">Estatísticas Financeira - SIR Peças</h4>
                    <div>
                      <canvas id="myChart2"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>


<script>
        const cfg2 = document.getElementById('myChart2');

        new Chart(cfg2, {
            //»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»
            type: 'line',

            //»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'Novembro', 'Dezember'],
                datasets: [{
                    label: 'Loping',
                    data: [65, 59, 80, 81, 26, 55, 40, 75, 85, 42, 65, 84],
                    fill: false,
                    borderColor: 'rgb(75, 192, 192)',
                }],
                datasets: [{
                    label: 'Tension',
                    data: [50, 60, 45, 49, 75, 35, 60, 59, 88, 47, 45, 54],
                    fill: true,
                    borderColor: 'rgb(75, 192, 35)',
                }],
            },

            //»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»»
            options: {
                
                animations: {
                    tension: {
                        duration: 1000,
                        easing: 'linear',
                        from: 1,
                        to: 0,
                        delay: 1000,
                        loop: true
                    }
                },
                scales: {
                    y: {
                        min: 0,
                        max: 100
                    }
                },
                /*
                animations: {
                tension: {
                    duration: 1000,
                    easing: 'linear',
                    from: 1,
                    to: 0,
                    loop: true
                }
                },
                scales: {
                y: { // defining min and max so hiding the dataset does not change scale range
                    min: 0,
                    max: 100
                }
                },*/

                plugins:{
                    legend: {
                    position: "bottom",
                    labels: 
                      {
                        usePointStyle: true,
                        pointStyle: 'rectRounded',
                        borderRadius: 200
                      },
                    }
                }
                
            }

        });
    
    
    </script>
    -->

    
<!--<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
<script src="<?= base_url(); ?>assets/js/graficosMapos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>-->
<script src="<?= base_url(); ?>assets/js/graficosMapos.js"></script>

<div class="container-fluid">  
    <div class="row">
        <!-- responsavel por fazer complementar a variavel "$financeiro_mes_dia->" de receita e despesa -->
        <?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'rFinanceiro')) : ?>
            <?php 
                $diaRec = "VALOR_" . date('y') . "_REC";
                $diaDes = "VALOR_" . date('y') . "_DES"; 

                switch (date("m")) {
                    case '01': $mes = 'Janeiro'; break;
                    case '02': $mes = 'Fevereiro'; break;
                    case '03': $mes = 'Março'; break;
                    case '04': $mes = 'Abril'; break;
                    case '05': $mes = 'Maio'; break;
                    case '06': $mes = 'Junho'; break;
                    case '07': $mes = 'Julho'; break;
                    case '08': $mes = 'Agosto'; break;
                    case '09': $mes = 'Septembro'; break;
                    case '10': $mes = 'Outubro'; break;
                    case '11': $mes = 'Novembro'; break;
                    case '12': $mes = 'Dezembro'; break;
                    default: $mes = ''; break;
                }
            
            ?>
    
                <div class="col-lg-4 col-md-6">
                    <div class="card bg-success-l p-b-5 p-t-5">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-5">
                                    <h4 class="card-title">Total Vendas<span class="font-14 font-normal op-5"><br><?php echo $mes .', '. date("Y")?></span></h4>
                                </div>
                                <div class="col-7">
                                    <h3 class="font-light text-right"><span><?php echo number_format(($financeiro_mes_dia->$diaRec), 2, ',', '.'); ?> Mtn</span></h3>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div> 

                <div class="col-lg-4 col-md-6">
                    <div class="card bg-info-l p-b-5 p-t-5">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-5">
                                    <h4 class="card-title">Vendas Interna<span class="font-14 font-normal op-5"><br><?php echo $mes .', '. date("Y")?></span></h4>
                                </div>
                                <div class="col-7">
                                    <h3 class="font-light text-right"><span><?php echo number_format(($financeiro_mes_dia->$diaDes), 2, ',', '.'); ?> Mtn</span></h3>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div> 

                <div class="col-lg-4 col-md-6">
                    <div class="card bg-danger-l p-b-5 p-t-5">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-5">
                                    <h4 class="card-title">Vendas Externa<span class="font-14 font-normal op-5"><br><?php echo date("Y")?></span></h4>
                                </div>
                                <div class="col-7">
                                    <h3 class="font-light text-right"><span><?php echo number_format(($financeiro_mes_ano->$diaDes), 2, ',', '.'); ?> Mtn</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>            
                </div>
        <?php endif ?>
        </div>

    
        <div class="row">
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
    var StatusOS = document.getElementById('statusOS').getContext('2d');

    var myChart = new Chart(ctx, {
        data: {
            labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
            datasets: [{
                    label: 'Receita',
                    data: [ <?php echo($financeiro_mes->VALOR_JAN_REC); ?>,
                            <?php echo($financeiro_mes->VALOR_FEV_REC); ?>,
                            <?php echo($financeiro_mes->VALOR_MAR_REC); ?>,
                            <?php echo($financeiro_mes->VALOR_APR_REC); ?>,
                            <?php echo($financeiro_mes->VALOR_MAI_REC); ?>,
                            <?php echo($financeiro_mes->VALOR_JUN_REC); ?>,
                            <?php echo($financeiro_mes->VALOR_JUL_REC); ?>,
                            <?php echo($financeiro_mes->VALOR_AGO_REC); ?>,
                            <?php echo($financeiro_mes->VALOR_SET_REC); ?>,
                            <?php echo($financeiro_mes->VALOR_OUT_REC); ?>,
                            <?php echo($financeiro_mes->VALOR_NOV_REC); ?>,
                            <?php echo($financeiro_mes->VALOR_DEZ_REC); ?>],

                    backgroundColor: 'rgb(110, 255, 239)',
                    borderRadius: 15,
                },

                {
                    label: 'Despesas',
                    data: [<?php echo($financeiro_mes->VALOR_JAN_DES); ?>,
                            <?php echo($financeiro_mes->VALOR_FEV_DES); ?>,
                            <?php echo($financeiro_mes->VALOR_MAR_DES); ?>,
                            <?php echo($financeiro_mes->VALOR_APR_DES); ?>,
                            <?php echo($financeiro_mes->VALOR_MAI_DES); ?>,
                            <?php echo($financeiro_mes->VALOR_JUN_DES); ?>,
                            <?php echo($financeiro_mes->VALOR_JUL_DES); ?>,
                            <?php echo($financeiro_mes->VALOR_AGO_DES); ?>,
                            <?php echo($financeiro_mes->VALOR_SET_DES); ?>,
                            <?php echo($financeiro_mes->VALOR_OUT_DES); ?>,
                            <?php echo($financeiro_mes->VALOR_NOV_DES); ?>,
                            <?php echo($financeiro_mes->VALOR_DEZ_DES); ?>],

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
                tooltip: {
                    callbacks: {
                        beforeTitle: function(context) {
                            return 'Referente ao mês de';
                        }
                    }
                },

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

    function responsiveFonts() {
        myChart.update();
    }

</script>

</div>