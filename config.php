<?php
$conn = mysqli_connect('localhost', 'root', '', 'online_products');
if (!$conn) {
  echo "not connected" . mysqli_connect_error();
}
