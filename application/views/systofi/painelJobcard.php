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
                    <div class="card p-b-5 p-t-5">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-5">
                                    <h4 class="card-title">Total Job Card<span class="font-14 font-normal op-5"><br><?php echo date("Y")?></span></h4>
                                </div>
                                <div class="col-7">
                                    <h3 class="font-light text-right"><span><?php echo number_format(($financeiro_mes_dia->$diaRec), 0, '', ''); ?></span></h3>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div> 

                <div class="col-lg-4 col-md-6">
                    <div class="card p-b-5 p-t-5">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-5">
                                    <h4 class="card-title">Total Aberto<span class="font-14 font-normal op-5"><br><?php echo date("Y")?></span></h4>
                                </div>
                                <div class="col-7">
                                    <h3 class="font-light text-right"><span><?php echo number_format(($financeiro_mes_dia->$diaDes), 0, '', ''); ?></span></h3>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div> 

                <div class="col-lg-4 col-md-6">
                    <div class="card p-b-5 p-t-5">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-5">
                                    <h4 class="card-title">Total Concluido<span class="font-14 font-normal op-5"><br><?php echo date("Y")?></span></h4>
                                </div>
                                <div class="col-7">
                                    <h3 class="font-light text-right"><span><?php echo number_format(($financeiro_mes_ano->$diaDes), 0, '', ''); ?></span></h3>
                                </div>
                            </div>
                        </div>
                    </div>            
                </div>
        <?php endif ?>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-4">
            <div class="card p-b-5 p-t-5">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <h4 class="card-title">Total Facturado<span class="font-14 font-normal op-5"><br><?php echo date("Y")?></span></h4>
                        </div>
                        <div class="col-7">
                            <h3 class="font-light text-right"><span><?php echo number_format(($financeiro_mes_dia->$diaDes), 0, '', ''); ?></span></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card p-b-5 p-t-5">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <h4 class="card-title">Valor Total Facturado<span class="font-14 font-normal op-5"><br><?php echo date("Y")?></span></h4>
                        </div>
                        <div class="col-7">
                            <h3 class="font-light text-right"><span><?php echo number_format(($financeiro_mes_dia->$diaDes), 2, ',', '.'); ?> Mtn</span></h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card p-b-5 p-t-5">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <h4 class="card-title">Valor Pendente<span class="font-14 font-normal op-5"><br><?php echo date("Y")?></span></h4>
                        </div>
                        <div class="col-7">
                            <h3 class="font-light text-right"><span><?php echo number_format(($financeiro_mes_dia->$diaDes), 2, ',', '.'); ?> Mtn</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="card-body">   
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="card-title">Balanço Mensal</h5>
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
                        <canvas id="myChart3" style="overflow-x: scroll;margin-left: -14px;height: 116px;"></canvas>
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

    var ctx3 = document.getElementById('myChart3').getContext('2d');

    var myChart = new Chart(ctx3, {
        data: {
            labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
            datasets: [{
                    label: 'Aberto',
                    data: [<?php echo($jobcard_mes->JOB_JAN_ABRT);?>,                    
                        <?php echo($jobcard_mes->JOB_FEV_ABRT);?>, 
                        <?php echo($jobcard_mes->JOB_MAR_ABRT);?>, 
                        <?php echo($jobcard_mes->JOB_ABR_ABRT);?>, 
                        <?php echo($jobcard_mes->JOB_MAI_ABRT);?>, 
                        <?php echo($jobcard_mes->JOB_JUN_ABRT);?>, 
                        <?php echo($jobcard_mes->JOB_JUL_ABRT);?>, 
                        <?php echo($jobcard_mes->JOB_AGO_ABRT);?>, 
                        <?php echo($jobcard_mes->JOB_SET_ABRT);?>, 
                        <?php echo($jobcard_mes->JOB_OUT_ABRT);?>,
                        <?php echo($jobcard_mes->JOB_NOV_ABRT);?>,
                        <?php echo($jobcard_mes->JOB_DEZ_ABRT);?>],

                    backgroundColor: 'rgba(45, 107, 255)',
                    borderRadius: 15,
                },

                {
                    label: 'Concluido',
                    data: [<?php echo($jobcard_mes->JOB_JAN_CON);?>,                    
                        <?php echo($jobcard_mes->JOB_FEV_CON);?>, 
                        <?php echo($jobcard_mes->JOB_MAR_CON);?>, 
                        <?php echo($jobcard_mes->JOB_ABR_CON);?>, 
                        <?php echo($jobcard_mes->JOB_MAI_CON);?>, 
                        <?php echo($jobcard_mes->JOB_JUN_CON);?>, 
                        <?php echo($jobcard_mes->JOB_JUL_CON);?>, 
                        <?php echo($jobcard_mes->JOB_AGO_CON);?>, 
                        <?php echo($jobcard_mes->JOB_SET_CON);?>, 
                        <?php echo($jobcard_mes->JOB_OUT_CON);?>,
                        <?php echo($jobcard_mes->JOB_NOV_CON);?>,
                        <?php echo($jobcard_mes->JOB_DEZ_CON);?>],

                    backgroundColor: 'rgb(110, 255, 239)',
                    borderRadius: 15,
                },

                {
                    label: 'Cancelado',
                    data: [<?php echo($jobcard_mes->JOB_JAN_CAN);?>,                    
                        <?php echo($jobcard_mes->JOB_FEV_CAN);?>, 
                        <?php echo($jobcard_mes->JOB_MAR_CAN);?>, 
                        <?php echo($jobcard_mes->JOB_ABR_CAN);?>, 
                        <?php echo($jobcard_mes->JOB_MAI_CAN);?>, 
                        <?php echo($jobcard_mes->JOB_JUN_CAN);?>, 
                        <?php echo($jobcard_mes->JOB_JUL_CAN);?>, 
                        <?php echo($jobcard_mes->JOB_AGO_CAN);?>, 
                        <?php echo($jobcard_mes->JOB_SET_CAN);?>, 
                        <?php echo($jobcard_mes->JOB_OUT_CAN);?>,
                        <?php echo($jobcard_mes->JOB_NOV_CAN);?>,
                        <?php echo($jobcard_mes->JOB_DEZ_CAN);?>],

                    backgroundColor: 'rgba(240, 91, 79)',
                    borderRadius: 15,
                },
            ]

        },
        // configuração
        type: 'bar',
        options: {
            locale: 'pt-MZ',
            scales: {
                
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

    function responsiveFonts() {
        myChart.update();
    }

</script>
</div>


