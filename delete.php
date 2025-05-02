<?php
include_once 'config.php';
$id = $_GET['id'];
$delete = "DELETE FROM products WHERE id = $id";
$result = mysqli_query($conn, query: $delete);
if ($result) {
  header('location:products.php');
}