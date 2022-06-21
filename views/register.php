
  <div class="mask d-flex align-items-center mt-5 gradient-custom-3">
    <div class="container  ">
      <div class="row d-flex justify-content-center align-items-center ">

        <div class="col-12 col-md-9 col-lg-7 col-xl-6">

          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5 ">
              <h2 class=" text-center mb-5">Registration Form </h2>

              <form method="POST" id="form">

                <div class="form-outline mb-2">
                    <label class="form-label" for="">Your Name:</label>
                  <input type="text" name="user_name" id="nom" class="shadow-none form-control form-control-lg" />
                  <div class="text-danger fs-6" id="errorNom"></div>
                </div>

                <div class="form-outline mb-2">
                    <label class="form-label" for="">Your Email:</label>
                  <input type="email" name="user_email" id="email" class="shadow-none form-control form-control-lg" />
                  <div class="text-danger fs-6" id="errorEmail"></div>
                </div>


                <div class="form-outline mb-2">
                    <label class="form-label" for="">Address:</label>
                  <input type="text" name="user_adress" id="address" class="shadow-none form-control form-control-lg" />
                  <div class="text-danger fs-6" id="errorAddress"></div>
                </div>

                <div class="form-outline mb-2">
                    <label class="form-label" for="">Phone Number:</label>
                    <input type="phone" name="user_phone" id="phone" class="shadow-none form-control form-control-lg" />
                    <div class="text-danger fs-6" id="errorPhone"></div>
                  </div>

                <div class="form-outline mb-2">
                    <label class="form-label" for="">Password:</label>
                  <input type="password" name="user_password" id="password" class="shadow-none form-control form-control-lg" />
                  <div class="text-danger fs-6" id="errorPassword"></div>
                </div>

                <div class="form-outline mb-2">
                    <label class="form-label" for="">Repeat your password:</label>
                  <input type="password" id="Cpassword" class="shadow-none form-control form-control-lg" />
                  <div class="text-danger fs-6"  id="errorCpassword"></div>
                </div>


                <input type="submit" name="user_submit"  class="btn btn-success btn-block btn-lg gradient-custom-4 " value="Register">

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="http://localhost:8080/login"
                    class="fw-bold text-primary "><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
