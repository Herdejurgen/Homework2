<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homework 2 Webpage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  
  <body>
    <?php include'header.php'; ?>
    <div class="container-fluid">
    <h2>These are the numbers you input:</h2>
    <h2> <?php echo $_GET["num1"]; ?></h2>
    <h2> <?php echo $_GET["num2"]; ?></h2>
    <h2> <?php echo $_GET["num3"]; ?></h2>
    <h2> <?php echo $_POST["rand1"]; ?></h2>
    <h2> <?php echo $_POST["rand2"]; ?></h2>
    <h2> <?php echo $_POST["rand3"]; ?></h2>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>