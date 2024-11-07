<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <img src="<?php echo base_url(); ?>assets/img/logo-perjadin.png" height="50px">
                                    <br />
                                    <br />
                                    <h1 class="h4 text-gray-900 mb-4">Halaman Login</h1>
                                </div>
                                <?php echo $this->session->flashdata('message') ?>
                                <form class="user" method="post" action="<?php echo base_url('auth') ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?php echo set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password"> <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <!-- <a class="small" href="forgot-password.html">Forgot Password?</a> -->
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?php echo base_url('auth/registration'); ?>">
                                        <h6>Ulah Akun Hanyar</h6>
                                    </a>
                                </div>
                                <div class="text-center">
                                    <!-- Button trigger modal-->
                                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalYT">Video Tutorial</button> -->

                                    <!--Modal: modalYT-->
                                    <div class="modal fade" id="modalYT" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">

                                            <!--Content-->
                                            <div class="modal-content">

                                                <!--Body-->
                                                <div class="modal-body mb-0 p-0">

                                                    <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_IftW62rRTY" allowfullscreen></iframe>
                                                    </div>

                                                </div>

                                                <!--Footer-->
                                                <div class="modal-footer justify-content-center flex-column flex-md-row">


                                                    <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Tutup</button>


                                                </div>

                                            </div>
                                            <!--/.Content-->

                                        </div>
                                    </div>
                                    <!--Modal: modalYT-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>