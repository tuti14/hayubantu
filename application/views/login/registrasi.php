<body class=" " style="background-color: #EAFAF6;">

	<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-8 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                    	<h1 class="f1-l h4 text-gray-900 mb-4" style="line-height: 150%;">Bergabunglah bersama kami berbuat kebaikan dimulai dari sini!</h1>
                            		</div>
			                            <form class="user" method="post">
			                            	<div class="form-group">
			                            		<?php form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
			                                    <input type="text" name="nama" id="nama" class="form-control form-control-user sans" autocomplete="off" placeholder="Nama Lengkap" value="<?= set_value('nama'); ?>">
			                                </div>
			                                <div class="form-group">
			                                	<?php form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
			                                    <input type="text" name="email/telp" id="email/telp" class="form-control form-control-user sans" autocomplete="off"  placeholder="No Telp atau Email" value="<?= set_value('email/telp'); ?>">
			                                </div>
			                                <button type="submit" name="" class="btn btn-primary btn-user btn-block"><span class="f4-l">Daftar</span></button>
			                                <hr style="margin-top: 20px;">
			                                <h1 class=" f2-l h5 text-gray-900 mb-4 text-center">Alternatif Cepat</h1>
			                                <a href=" " class="btn btn-google btn-user btn-block">
			                                    <i class="fab fa-google fa-fw"></i> <span class="sans"> Daftar Dengan Google</span>
			                                </a>
			                                <a href=" " class="btn btn-facebook btn-user btn-block">
			                                    <i class="fab fa-facebook-f fa-fw"></i><span class="sans"> Daftar Dengan Facebook</span>
			                                </a>
			                            </form>
			                            <hr>
			                           	<div class="text-center mt-4">
			                                <h1 class="f5-l">Sudah Punya Akun? <a href="<?php echo base_url('login/auth/masuk') ?>" style="color: lightseagreen; text-decoration: none;"><span class="primary-hover">Masuk</span></a></h1>
			                            </div>
			                            <hr>
			                           	<div class="text-center mt-4">
			                                <h1 class="f5-l"  style="line-height: 200%;">Dengan mendaftar, Anda setuju dengan <a href="" style="color: lightseagreen; text-decoration: none;"> <span class="primary-hover">Syarat dan Ketentuan</span></a> HayuBantu.com</h1>
			                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

