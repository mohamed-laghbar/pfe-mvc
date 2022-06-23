
<div class="mt-5 container-md">
    <h1 class="p-3 ">List Of Products:</h1>
    <a href="http://localhost:8080/product_edit" class="btn btn-primary btn-block btn-lg gradient-custom-4  ">Add New Product</a>
<table class="table">
  <thead>
    <tr>
    <th >Image</th>

      <th >Product Name</th>
      <th>Product Description</th>
      <th >Price</th>
      <th >edit</th>
      <th ></th>

    </tr>
  </thead>
  <tbody>
<?php foreach($packages as $value) {?>
    <tr>
    <td> <img class=""
          src="./assets/img/<?php echo $value['image']; ?>"
          height="150" alt=""></td>
    <td><?= $value['title'] ?></td>
    <td><?= $value['description'] ?></td>
    <td><?= $value['price'] ?>$</td>
    <form action="" method="POST">

        <input type="hidden" name="id" value="<?= $value['id'] ?>" id="">
        <input type="hidden" name="title" value="<?= $value['title'] ?>" id="">
        <input type="hidden" name="description" value="<?= $value['description'] ?>" id="">
        <input type="hidden" name="price" value="<?= $value['price'] ?>" id="">
    <td><input type="submit" name="edit" value="Edit" class="btn btn-primary"></td>
    <td><input type="submit" name="delete" value="Delete" class="btn btn-danger"></td>
    
    </form>
    </tr>
    
<?php }?>

  </tbody>
</table>


</div>
