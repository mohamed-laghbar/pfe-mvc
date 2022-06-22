<div class="mt-5 container-md">
    <h1 class="p-3 ">Orders List:</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Client Name</th>
      <th scope="col">Adress</th>
      <th scope="col">Product Name</th>
      <th scope="col">Quantity</th>
      <th scope="col"> Price</th>
      <th scope="col"> Order Time</th>
    </tr>
  </thead>
  <tbody>
<?php foreach($orders as $value) {?>
    <tr>
    <td><?= $value['name'] ?></td>
    <td><?= $value['adress'] ?></td>
    <td><?= $value['title'] ?></td>
    <td><?= $value['quantity'] ?></td>
    <td><?= $value['price'] ?></td>
    <td><?= $value['order_time'] ?></td>
     
    </tr>
<?php }?>

  </tbody>
</table>
</div>