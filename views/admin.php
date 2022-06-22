
<div class="container mt-5">
    <div class="row ">
        <div class="col-md-4 offset-md-4 ">
            <div class="login-form bg-light mt-4 p-4 shadow-lg">
                <?php if (!empty($errors) ){ ?><div class="alert alert-danger"> <?php echo $errors; ?></div><?php } ?>
                    <form action="" method="POST" id="form" class="row g-3">
                        <h4>Welcome Back Mr Admin</h4>
                        <div class="col-12">
                            <label>Email Adress</label>
                            <input type="text" require name="username" id="admin_login" class="form-control" placeholder="Email Adress">
                            <div class="text-danger fs-6" id="errorEmail"></div>

                        </div>
                        <div class="col-12">
                            <label>Password</label>
                            <input type="password" name="password" id="admin_password" class="form-control" placeholder="Password">
                            <div class="text-danger fs-6" id="errorPassword"></div>

                        </div>
                        <div class="col-12">
                          
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark float-end">Login</button>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>