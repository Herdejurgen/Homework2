<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homework 1 Webpage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  
  <body>
    <?php require_once(“header.php”); ?> 
    <div class="container-fluid">
              
      <div class="position-absolute top start">
        <h1>
          Jack Herdejurgen, about me!
        </h1>
        <h3>          
          This website is all about me, visit a page to get started!
        </h3>
        <div class="text-center">
          <img src="data:image/jpeg;base64,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" class="rounded">
        </div>
      </div>      

    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
    
