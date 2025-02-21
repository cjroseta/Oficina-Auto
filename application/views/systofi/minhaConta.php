<!-- Container fluid  -->
<div class="container-fluid m-t-10">
    <!-- Row -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <center class="m-t-30">
                        <img src="<?= base_url() ?>assets/images/users/2.jpg" class="rounded-circle" width="150" />
                        <h4 class="card-title m-t-10">Cláudio Roseta</h4>
                        <h6 class="text-muted">Engenheiro Informático</h6>
                        <h6 class="text-muted">Acesso expira: 31/12/2023</h6>
                        <h6 class="text-muted">Permissão: Administrador do Sistema</h6>
                    </center>
                </div>
            </div>
        </div>

        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <!-- Tabs -->
                <ul class="nav nav-tabs customtab" id="pills-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home2" role="tab"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down"> Perfíl</span></a> </li>

                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down"> Editar Perfíl</span></a> </li>

                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages2" role="tab"><span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down"> Actividades Recentes</span></a> </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    
                    <div class="tab-pane fade show active" id="home2" role="tabpanel">
                        <div class="p-20 card-body">
                            <div class="row">
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Nome Completo</strong>
                                <br>
                                <p class="text-muted">Cláudio Roseta</p>
                                </div>
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Contacto</strong>
                                <br>
                                <p class="text-muted">(+258) 84 616 6958</p>
                                </div>
                                <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                <br>
                                <p class="text-muted">admin@systofi.co.mz</p>
                                </div>
                                <div class="col-md-3 col-xs-6"> <strong>Endereço</strong>
                                <br>
                                <p class="text-muted">Maputo - Moçambique</p>
                                </div>
                            </div>
                            <hr>
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Nivél de Permissão</strong>
                                                <br>
                                                <p class="text-muted">Administrador do Sistema</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Data Cadastro</strong>
                                                <br>
                                                <p class="text-muted">01/01/2023</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Acesso Expira</strong>
                                                <br>
                                                <p class="text-muted">31/12/2023</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Situação</strong>
                                                <br>
                                                <p class="text-muted">Activo</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <hr>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade p-20" id="profile2" role="tabpanel">
                        <div class="card-body">
                        <form class="form-horizontal form-material">
                                            <div class="form-group">
                                                <label class="col-md-12">Nome Completo</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" placeholder="" class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Profissão</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Cargo</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Senha</label>
                                                <div class="col-md-12">
                                                    <input type="password" value="password" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Contacto</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Endereço</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Sobre Você</label>
                                                <div class="col-md-12">
                                                    <textarea rows="5" class="form-control form-control-line"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Actualizar Perfíl</button>
                                                </div>
                                            </div>
                                        </form>
                        </div>
                    </div>

                    <div class="tab-pane fade p-20" id="messages2" role="tabpanel">
                    <div class="card-body">
                                        <div class="profiletimeline m-t-0">
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="<?= base_url() ?>assets/images/users/1.jpg" alt="user" class="rounded-circle" /> </div>
                                                <div class="sl-right">
                                                    <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <p>assign a new task <a href="javascript:void(0)"> Design weblayout</a></p>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="<?= base_url() ?>assets/images/big/img1.jpg" class="img-fluid rounded" /></div>
                                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="<?= base_url() ?>assets/images/big/img2.jpg" class="img-fluid rounded" /></div>
                                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="<?= base_url() ?>assets/images/big/img3.jpg" class="img-fluid rounded" /></div>
                                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="<?= base_url() ?>assets/images/big/img4.jpg" class="img-fluid rounded" /></div>
                                                        </div>
                                                        <div class="like-comm"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="<?= base_url() ?>assets/images/users/2.jpg" alt="user" class="rounded-circle" /> </div>
                                                <div class="sl-right">
                                                    <div> <a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <div class="m-t-20 row">
                                                            <div class="col-md-3 col-xs-12"><img src="<?= base_url() ?>assets/images/big/img1.jpg" alt="user" class="img-fluid rounded" /></div>
                                                            <div class="col-md-9 col-xs-12">
                                                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. </p> <a href="javascript:void(0)" class="btn btn-success"> Design weblayout</a></div>
                                                        </div>
                                                        <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="<?= base_url() ?>assets/images/users/3.jpg" alt="user" class="rounded-circle" /> </div>
                                                <div class="sl-right">
                                                    <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                                                    </div>
                                                    <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="<?= base_url() ?>assets/images/users/4.jpg" alt="user" class="rounded-circle" /> </div>
                                                <div class="sl-right">
                                                    <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                                        <blockquote class="m-t-10">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Container fluid  -->
