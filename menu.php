
<?php require('header.php')?>


<!DOCTYPE html>
<html>
<head>
<title>Menu</title>

 <!--Bootstrap-->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"crossorigin="anonymous"></script>


  <!-- fontawesome -->
<link href="fontawesome-free-6.4.0-web/css/all.css" rel="stylesheet">

</head>

<body class="d-flex flex-column h-100">
  
<h1>Our Menu..</h1>

<i class="fa fa-cart-plus fa-4x" aria-hidden="true"></i>

<h2 id="add"></h2>
<div>

  <h2>cart</h2>

  
</div>

<table class="table table-striped table-hover text-center">
<thead>
<th>Dish</th>
<th>Price</th>
<th>Order</th>
</thead>
<tbody id="tbody">
</tbody>

<tfoot>
</tfoot>
</table>

<a href="review_order.html" type="button" class="btn btn-danger">Review order</a>
</body>



</html>
<?php require('footer.php')?>