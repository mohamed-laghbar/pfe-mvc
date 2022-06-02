<div class="wrapper  bg-white">
        <div class="h2 text-center"><img src=".\assets\img\navbar-logo.png" width="230px" alt=""></div>
        <div class="h4 text-muted text-center pt-2">Enter your login details</div>
        <form class="pt-3">
            <div class="form-group py-2">
                <div class="input-field">
                    <span class="far fa-user p-2"></span>
                    <input type="text" placeholder="Username or Email Address" required class="">
                </div>
            </div>
            <div class="form-group py-1 pb-2">
                <div class="input-field">
                    <span class="fas fa-lock p-2"></span>
                    <input type="text" placeholder="Enter your Password" required class="">
                    <button class="btn bg-white text-muted">
                        <span class="far fa-eye-slash"></span>
                    </button>
                </div>
            </div>
            <div class="d-flex align-items-start">
                <div class="remember">
                    <label class="option text-muted"> Remember me
                        <input type="radio" name="radio" >
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="ml-auto ms-2">
                    <a href="#" class="text-danger" id="forgot">Forgot Password?</a>
                </div>
            </div>
            <button class="btn btn-block bg-primary text-center text-black w-100 my-3">Log in</button>
            <div class="text-center pt-3 text-muted">Not a member? <a class="text-black" href="http://localhost:8080/register">Sign up</a></div>
        </form>
    </div>