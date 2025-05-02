<?php
include_once 'config.php';
$result = mysqli_query($conn, 'SELECT * FROM products');
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>products</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <center>
    <div class="container my-4">
      <h3 class="text-center mb-4">Products</h3>
      <div class="row">
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
          <div class="col-md-4 mb-4">
            <div class="card h-100">
              <img src="<?php echo htmlspecialchars($row['image'], ENT_QUOTES, 'UTF-8'); ?>" class="card-img-top"
                alt="<?php echo htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8'); ?>">
              <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8'); ?></h5>
                <p class="card-text">$<?php echo htmlspecialchars($row['price'], ENT_QUOTES, 'UTF-8'); ?></p>
              </div>
              <div class="card-footer d-flex justify-content-between">
                <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </center>
</body>

</html>
