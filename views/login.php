<div class="wrapper  bg-white">
        <div class="h2 text-center"><img src=".\assets\img\navbar-logo.png" width="230px" alt=""></div>
        <div class="h4 text-muted text-center pt-2">Enter your Login Details</div>
        <?php if(isset($errors)){?>
        <div class="alert alert-danger">
            <?= $errors ?>
        </div>
        <?php }?>
        <form class="pt-3" method="POST" action="">
            <div class="form-group py-2">
                <div class="input-field">
                    <span class="far fa-user p-2"></span>
                    <input type="text" name="email" id="email" placeholder="Email Address" required class="">
                    <div id="errEmail"></div>
                </div>
            </div>
            <div class="form-group py-1 pb-2">
                <div class="input-field">
                    <span class="fas fa-lock p-2"></span>
                    <input type="password" placeholder="Enter your Password" id="password" name="password" required class="">
                    <div id="errPassword"></div>
                </div>
            </div>
            <div class="d-flex align-items-start">
                <div class="remember">
                    <label class="option text-muted"> Remember me
                        <input type="radio" name="radio" >
                        <span class="checkmark text-primary"></span>
                    </label>
                </div>
                <div class="ml-auto ms-2">
                    <a href="#" class="text-danger" id="forgot">Forgot Password?</a>
                </div>
            </div>
            <input type="submit" id="submit" name="submit" class="btn btn-block btn-login text-center  w-100 my-3" value="Login">
        </form>
    </div>