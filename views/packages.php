<?php if(isset($alert)){  ?>
<div id="box" class="alert p-3 container-fluid text-center alert-success"> <?= $alert ?> </div> <?php } ?>
<?php  
if($packages){
foreach($packages as $value)
 {?>

<section class="page-section  bg-light" id="services">
  <div class="container  ">

    <div class="row  d-flex justify-content-center">
      <!-- <div class="alert alert-success"></div> -->
      <div class="col-md-5  shadow-lg ps-5 pb-3 pt-3 bg-white">

        <h2 class=" text-muted fw-light mb-5"><?php echo $value['title']; ?></h2>
        <p class="text-muted ">
        <?php echo $value['description']; ?>
        </p>
        <p class="text-muted mb-1"><span><i class="text-success fa-solid fa-check"></i></span> no contracts</p><br>
        <p class="text-muted mb-1 "><span><i class="text-success fa-solid fa-check"></i></span> 24/7 alarm monitoring</p><br>
        <p class="text-muted "><span><i class="text-success fa-solid fa-check"></i></span> no phoneline needed</p><br>
        <div class="pricing mt-5 d-flex justify-content-evenly">
          <p class="h3 text-success  fw-light">$<?php echo $value['price']; ?> <span class="oldprice"><?php echo $value['priceCompare']; ?></span></p>

          <form action="" method="POST">

        <input type="hidden" value="<?= $value['id'] ?>" name="id">
         <input type="submit" value="Add To Cart" class="btn bg-primary text-white"> 



            </form>

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
<?php }}?>

























































<!-- 
        <p class="text-muted mb-1"><span><i class="text-success fa-solid fa-check"></i></span> no contracts</p><br>
        <p class="text-muted mb-1 "><span><i class="text-success fa-solid fa-check"></i></span> 24/7 alarm monitoring</p><br>
        <p class="text-muted "><span><i class="text-success fa-solid fa-check"></i></span> no phoneline needed</p><br> -->