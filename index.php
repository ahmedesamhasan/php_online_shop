<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>online shopping</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <center>
    <div class="main">
      <h2>products</h2>
      <form action="insert.php" method="post" enctype="multipart/form-data">
        <h2>online website</h2>
        <img src="https://www.clickpost.ai/hubfs/online-shopping-websites-in-us-united-states-of-america.png"
          alt="logo">
        <input type="text" name="name" placeholder=" name" id="name" required> <br>
        <input type="text" name="price" placeholder=" price" id="price" required> <br>
        <input type="file" id="image" name="image" style="display: none;" accept="image/* required"> <br>
        <label for="image">Select image</label><br>
        <button type="submit" name="upload" id="submit">submit</button><br>
        <a href="products.php">view all products</a>


      </form>
    </div>
    <p>by AHMED</p>
  </center>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>