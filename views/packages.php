<?php  foreach($packages as $value) {?>

<section class="page-section  bg-light" id="services">
  <div class="container  ">

    <div class="row  d-flex justify-content-center">
      <div class="col-md-5  shadow-lg ps-5 pb-3 pt-3 bg-white">

        <h2 class=" text-muted fw-light mb-5"><?php echo $value['title']; ?></h2>
        <p class="text-muted ">
        <?php echo $value['description']; ?>
        </p>
        <p class="text-muted mb-1"><span><i class="text-success fa-solid fa-check"></i></span> no contracts</p><br>
        <p class="text-muted mb-1 "><span><i class="text-success fa-solid fa-check"></i></span> 24/7 alarm monitoring</p><br>
        <p class="text-muted "><span><i class="text-success fa-solid fa-check"></i></span> no phoneline needed</p><br>
        <div class="pricing mt-5 d-flex justify-content-evenly">
          <p class="h3 text-red  fw-light"><?php echo $value['price']; ?> <span class="oldprice"><?php echo $value['priceCompare']; ?></span></p>
          <div><a href="" class=" btn bg-primary text-white    ">Add To Cart <span class="text-white"><i
                  class="fa-solid fa-cart-plus"></i></span> </a> </div>
        </div>
      </div>

      <div class="col-md-5  bg-white">
        <img class=""
          src="./assets/img/<?php echo $value['image']; ?>"
          height="500" alt="">
      </div>

    </div>
  </div>
</section>
<?php }?>

























































<!-- 
        <p class="text-muted mb-1"><span><i class="text-success fa-solid fa-check"></i></span> no contracts</p><br>
        <p class="text-muted mb-1 "><span><i class="text-success fa-solid fa-check"></i></span> 24/7 alarm monitoring</p><br>
        <p class="text-muted "><span><i class="text-success fa-solid fa-check"></i></span> no phoneline needed</p><br> -->