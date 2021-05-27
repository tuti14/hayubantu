<html>
    <head>
        <style>
.c1{
    box-sizing: border-box;
    width: 100%;
    margin: 0px auto;
    max-width: 480px;
    display: flex;
}

        </style>
    </head>


<body class="" style="background-color: #EAFAF6;">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-8 col-md-9">

                 <!--<div class="row mt-5">
                    <div class="col-lg-12">
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <a href="<?php echo base_url('home/index') ?>"><i class="far fa-arrow-alt-circle-left f2-l secondary primary-hover"></i></a>
                        </div>
                    </div>
                </div>-->

                <div class="card o-hidden border-0 shadow-lg my-3">

                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">

                                    <div class="c1 justify-content-between">
                                        <a href="<?php echo base_url('fitur/view_fitur/update') ?>" class="secondary secondary-hover w-50" style="text-decoration: none;">
                                            
                                            <div class="border-bottom-success"><p class="text-center">Update</p></div>
                                        </a>
                                        <a href="<?php echo base_url('fitur/view_fitur/notification') ?>" class="secondary secondary-hover w-50" style="text-decoration: none;">
                                            <div class="text-dark ml-3"><p class="text-center">Notifikasi</p></div>
                                        </a>
                                    </div>

                                        <div class="text-center mt-5">
                                            <span>Belum Ada Update</span>
                                        </div>

                                        <div class="text-center mt-5">
                                            <span>Untuk melihat update dari penggalanan dana, masuk ke akun kamu dulu yuk!</span>
                                        </div>
                                        
                                             <form class="user mt-4">
                                        <a href="<?php echo base_url('login/auth/masuk') ?>" class="btn btn-outline-success btn-user btn-block">
                                            <span class="f3-l sans">Masuk</span>
                                        </a>
                                        <div class="text-center mb-5 mt-4">
                                            <h1 class="f4-l">Belum Punya Akun? <a href="<?php echo base_url('login/auth/register') ?>" style="color: lightseagreen; text-decoration: none;"><span class="primary-hover ">Daftar</span></a></h1>
                                        </div>
                                    </form>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

</body>
</html>