
<body class="bg-gradient-success">

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
                                        <h1 class="h4 text-gray-900 mb-4">Form Admin</h1>
                                    </div>
                                   
                                    <form class="user" action="<?php echo base_url('admin/auth/login'); ?>" method="post" autocomplete="off">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user" placeholder="Username">
                                        
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user mt-4" placeholder="Password">
                                            
                                        </div>

                                       <button type="submit" class="btn btn-primary btn-user btn-block w-75 mt-5 mx-auto"> Masuk </button>
                                    
                                    </form>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

