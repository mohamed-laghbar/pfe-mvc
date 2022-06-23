<div class="container-sm">
<form method="POST" enctype="multipart/form-data" >
<div class="form-outline mb-2">
    <label class="form-label" for="">Product Name:</label>
  <input type="text" name="title" value="<?php if(isset($data['title'])){ echo $data['title'] ;} ?>" class="shadow-none form-control form-control-lg" />
  <div class="text-danger fs-6" id="errorNom"></div>
</div>

<div class="form-outline mb-2">
    <label class="form-label" for="">Product Description:</label>
  <textarea type="text" cols="10" rows="3"  name="description"  class="shadow-none form-control form-control-lg" ><?php if(isset($data['description'])){ echo $data['description']; }?></textarea>
  <div class="text-danger fs-6" id="errorEmail"></div>
</div>


<div class="form-outline mb-2">
    <label class="form-label" for="">Price in $:</label>
  <input type="text" name="price" value="<?php if(isset($data['price'])){ echo $data['price']; } ?>" id="address" class="shadow-none form-control form-control-lg" />
  <div class="text-danger fs-6" id="errorAddress"></div>
</div>



<div class="form-outline mb-2">
    <label class="form-label" for="">image:</label>
    <input type="file" name="image"  class="shadow-none form-control form-control-lg" />
    <div class="text-danger fs-6" id="errorPhone"></div>
  </div>




  <input type="submit" name="insert"  class="btn btn-primary btn-block btn-lg gradient-custom-4 " value="Save">
  <a href="http://localhost:8080/products_espace" class="btn btn-danger btn-block btn-lg gradient-custom-4" >Back To Products</a>



</form>

</div>