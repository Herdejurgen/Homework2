<!doctype html>
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
      <div class="row-2">      
      <?php        
        $v = rand(0,255);
        $w = rand(0,255);
        $x = rand(0,255);
        echo "<h2> Here, have a few random numbers: </h2>";
        echo "<h2>" . $v . "</h2>";
        echo "<h2>" . $w . "</h2>";
        echo "<h2>" . $x . "</h2>";
      ?>
      <h2>Send these numbers</h2>
      <form action="formresult.php" method="post">
      First number: <input type="text" name="rand1" value="<?php echo $v;?>">
      Second number: <input type="text" name="rand2" value="<?php echo $w;?>">
      Third number: <input type="text" name="rand3" value="<?php echo $x;?>">
      <input type="submit">
      </form>
      <h2>Or send your own:</h2>
      <form action="formresult.php" method="get">
      First number: <input type="text" name="num1">
      Second number: <input type="text" name="num2">
      Third number: <input type="text" name="num3">
      <input type="submit">
      </form>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
