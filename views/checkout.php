

<section class="">
  <div class="container   ">
    <div class="row d-flex justify-content-center ">
   
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header bg-wh py-3">
            <h5 class="mb-0"><?php if(!empty($fooo)){ echo count($fooo);}else echo 0  ?> Items In Cart</h5>
          </div>
          <?php 
          if($fooo){

foreach($fooo as $value){

  echo $value['title'];


?>
          <div class="card-body ">
            <!-- Single item -->
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">



                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="./assets/img/<?= $value['image'] ?>" width="160px" height="160px" class="" alt="" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p><strong><?= $value['title'] ?></strong></p>
                
                  <!-- remove btn -->
                
                  <!-- Remove btn -->
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->
                <div class="d-flex mb-4" style="max-width: 300px">
                 
                <form action="" method="POST">
                  <div class="form-outline">
                    <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                    <label class="form-label" for="form1">Quantity</label>
                  </div>


                </div>
                <!-- Quantity -->

                <!-- Price -->
                <p class="text-start text-md-center h5">Price:
                  <strong class="text-primary"><?= $value['price'] ?> </strong> <span class="oldprice text-muted"><?= $value['priceCompare']; ?></span>
                </p>
                <!-- Price -->
              </div>
            </div>
            <!-- Single item -->

            <hr class="my-4" />

         
            <!-- Single item -->
          </div>
          <?php }} ?>
        </div>
        <div class="card mb-4">
          <div class="card-body">
            <p><strong>Expected shipping delivery</strong></p>
            <p class="mb-0">12.10.2020 - 14.10.2020</p>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body">
            <p><strong>We accept</strong></p>
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
              alt="Visa" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
              alt="American Express" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
              alt="Mastercard" />
            <img class="me-2" width="45px"
              src="https://upload.wikimedia.org/wikipedia/commons/a/a4/Paypal_2014_logo.png" height="40px" 
              alt="PayPal acceptance mark" />
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Summary</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
        
              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                Shipping
                <span>Free Shipping </span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total amount</strong>
                  <strong>
                    <p class="mb-0">(including VAT)</p>
                  </strong>
                </div>
                <span><strong><?php $result = 0 ; if(!empty($fooo)){ foreach($fooo as $key){ 
                  $result += $key['price'];}
                }  echo $result;?>.00 $</strong></span>
              </li>
            </ul>
            <a href="" class=" btn btn-primary btn-lg btn-block mb-2  rounded-1"  data-bs-toggle="modal" data-bs-target="#exampleModal">Place your Order</a>
            <!-- modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content ">
      <div class="modal-header ">
        <h5 class="modal-title " id="exampleModalLabel">Shipping informations</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-3">

    
 

              <form method="POST">

                <div class="form-outline mb-2">
                    <label class="form-label" for="">Your Name:</label>
                  <input type="text" name="order-name" value="<?php if(!empty($_SESSION['user_name'])) {echo $_SESSION['user_name'];}  ?>" id="form3Example1cg" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-2">
                    <label class="form-label" for="">Your Email:</label>
                  <input type="email" name="order-email" id="form3Example3cg" value="<?php if(!empty($_SESSION['user_email'])) {echo $_SESSION['user_email'];} ?>" class="form-control form-control-lg" />
                </div>


                <div class="form-outline mb-2">
                    <label class="form-label" for="">Address:</label>
                  <input type="text" name="order_adress"  id="form3Example3cg" value="<?php if(!empty($_SESSION['user_adress'])) {echo $_SESSION['user_adress'];} ?>" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-2">
                    <label class="form-label" for="">Phone Number:</label>
                  <input type="phone" name="order_phone" id="form3Example3cg" value="<?php if(!empty($_SESSION['user_phone'])) {echo $_SESSION['user_phone'];}  ?>" class="form-control form-control-lg" />
                </div>




                <input type="submit" name="user_submit"  class="btn btn-success btn-block btn-lg rounded-1 " value="Order Now">

               

              </form>

           



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger bg-danger btn-block btn-lg rounded-1 " data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
            <!-- modal end -->
                <a class=" btn bg-warning text-black btn-lg btn-block rounded-1" href="http://localhost:8080/card">Back to Shopping Cart</a>
        </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




