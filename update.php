<?php
include_once 'config.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM products WHERE id = $id";
  $result = mysqli_query($conn, $query);
  $product = mysqli_fetch_assoc($result);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>update</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <center>
    <div class="main">
      <h2>update products</h2>
      <form action="up.php" method="post" enctype="multipart/form-data">
        <h2>online website</h2>
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        <input type="text" name="old_image" value="<?= htmlspecialchars($product['image']) ?>" required>
        <input type="text" name="price" value="<?= htmlspecialchars($product['price']) ?>" required>
        <input type="file" name="image">
        <button type="submit" name="update">update</button>
      </form>
    </div>
    <p>by AHMED</p>
  </center>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>