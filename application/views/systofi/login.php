<!DOCTYPE html>
<html dir="ltr" lan="pt-PT">

<head>
    <title><?= $this->config->item('app_name') ?></title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/images/favicon.png">

    <!-- Custom CSS -->
    <link href="<?= base_url() ?>assets/dist/css/style.min.css" rel="stylesheet">

    <!-- JQuery -->
    <script src="<?= base_url() ?>assets/js/jquery-1.12.4.min.js"></script>
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(<?= base_url() ?>assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box">
                <div id="formlogin">
                    <div class="logo">
                        <span class="db"><img src="<?= base_url() ?>assets/images/logo-icon.png" alt="logo" /></span>

                        <!-- Saudação -->
                        <h5 class="font-medium m-b-10 m-t-20 text-dark">
                            <?php
                            function saudacao($nome = '')
                            {
                                date_default_timezone_set('Africa/Maputo');
                                $hora = date('H');
                                if ($hora >= 4 && $hora < 12) {
                                    return 'Olá! Bom dia' . (empty($nome) ? '' : ', ' . $nome);
                                } elseif ($hora >= 12 && $hora < 18) {
                                    return 'Olá! Boa tarde' . (empty($nome) ? '' : ', ' . $nome);
                                } elseif ($hora >= 18 && $hora < 23) {
                                    return 'Olá! Boa noite' . (empty($nome) ? '' : ', ' . $nome);
                                } else {
                                    return 'Olá! Boa Madrugada' . (empty($nome) ? '' : ', ' . $nome);
                                }
                            }
                            $login = 'bem-vindo ao S Y S T O F I';
                            echo saudacao($login);

                            // Irá retornar conforme o horário:
                            ?></h5>

                        <h6 class="font-medium m-b-10">Sistema de Gestão de Oficinas Mecânica</h6>
                        <h6 class="font-medium m-b-0 text-danger">Versão: <?= $this->config->item('app_version') ?></h6>
                    </div>

                    <!-- Form -->
                    <div class="row">
                        <div class="col-12">
                            <form class="form-horizontal m-t-20" id="formLogin" method="post" action="<?= site_url('login/verificarLogin') ?>" novalidate>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" id="email" name="email">
                                </div>

                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon2"><i class="ti-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control form-control-lg" placeholder="Senha" aria-label="Senha" name="senha" aria-describedby="basic-addon1">
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Lembre-me</label>
                                            <a href="javascript:void(0)" id="to-recover" class="text-dark float-right"><i class="fa fa-lock m-r-5"></i> Esqueceu a senha?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <div class="col-xs-4"></div>
                                    <div class="col-xs-4 p-b-10 m-t-10">
                                        <button class="btn btn-block btn-lg btn-info" id="btn-acessar">Acessar</button>
                                    </div>
                                    <div class="col-xs-4"></div>
                                </div>

                            </form>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                                    <div class="social">
                                        <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="" data-original-title=""> <i aria-hidden="true" class="fab  fa-facebook"></i> </a>

                                        <a href="javascript:void(0)" class="btn btn-youtube" data-toggle="tooltip" title="" data-original-title=""> <i aria-hidden="true" class="fab  fa-youtube"></i> </a>

                                        <a href="javascript:void(0)" class="btn  btn-linkedin" data-toggle="tooltip" title="" data-original-title=""> <i aria-hidden="true" class="fab  fa-linkedin"></i> </a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group m-b-0 m-t-10">
                                <div class="col-sm-12 text-center">
                                    <b><?php echo date('Y'); ?></b> by <a class="text-info">Rostech-EI.CO.MZ</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="recoverform">
                    <div class="logo">
                        <span class="db"><img src="<?= base_url() ?>assets/images/logo-icon.png" alt="logo" /></span>
                        <h5 class="font-medium m-b-20">Recuperar Senha do Sistema</h5>
                        <span>Insira o teu Email e enviaremos instruções!</span>
                    </div>
                    <div class="row m-t-20">
                        <!-- Form -->
                        <form class="col-12" action="index.html">
                            <!-- email -->
                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control form-control-lg" type="email" required="" placeholder="Email">
                                </div>
                            </div>

                            <!-- Pwd -->
                            <div class="row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-block btn-lg btn-danger" type="submit" name="action">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="<?= base_url() ?>assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/validate.js"></script>
    <script type="text/javascript">
        $('[data-toggle="tooltip"]').tooltip();
        $(".preloader").fadeOut();

        // Login and Recover Password 
        $('#to-recover').on("click", function() {
            $("#formlogin").slideUp();
            $("#recoverform").fadeIn();
        });

        $(document).ready(function() {
            $('#email').focus();
            $("#formLogin").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    senha: {
                        required: true
                    }
                },
                messages: {
                    email: {
                        required: '',
                        email: 'Insira Email válido'
                    },
                    senha: {
                        required: 'Campo Obrigatório.'
                    }
                },
                submitHandler: function(form) {
                    var dados = $(form).serialize();
                    $('#btn-acessar').addClass('disabled');

                    $.ajax({
                        type: "POST",
                        url: "<?= site_url('login/verificarLogin?ajax=true'); ?>",
                        data: dados,
                        dataType: 'json',
                        success: function(data) {
                            if (data.result == true) {
                                window.location.href = "<?= site_url('systofi'); ?>";
                            } else {
                                $('#btn-acessar').removeClass('disabled');
                                $('#message').text(data.message || 'Os dados de acesso estão incorretos, por favor tente novamente!');
                                $('#call-modal').trigger('click');
                            }
                        }
                    });

                    return false;
                },

                errorClass: "help-inline",
                errorElement: "span",
                highlight: function(element, errorClass, validClass) {
                    $(element).parents('.control-group').addClass('error');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).parents('.control-group').removeClass('error');
                    $(element).parents('.control-group').addClass('success');
                }
            });
        });
    </script>
</body>

</html>