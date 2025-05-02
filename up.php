<?php
include_once 'config.php';
if (isset($_POST['upload'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  #======image process
  $image = $_FILES['image'];
  $image_name = $_FILES['image']['name'];
  $image_location = $_FILES['image']['tmp_name'];
  $image_up = 'images/' . $image_name;
  if (move_uploaded_file($image_location, $image_up)) {
    $insert = "UPDATE products SET (name,price,image) VALUES('$name','$price','$image_up') WHERE id = $id";
    echo " <script>alert('updated')</script>";
  } else {
    echo " <script>alert('not inserted')</script>";
  }
  $result = mysqli_query($conn, query: $insert);
  if ($result) {
    header('location:index.php');
  }
}