<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <link rel="icon" href="http://subhajit.epizy.com/secret/images/favicon.png">
      <title>Welcome to Secret Code Generator</title>
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  
    <div class="jumbotron">
  <div class="container">
  <center><h1>Hello, Welcome to Secret Code Generator <span class="badge badge-secondary">New</span></h1><center>
 
  <p class="lead">The new Web-App that can generate secret codes and decode them as well. </p>
  <hr class="my-4">
  <p class="lead">Go to the <kbd>Code_Generator</kbd> segment to generate code or the <kbd>Decode</kbd> segment to decode the code.</p>
  
</div>
</div>

<!-- top end-->


<div class="container">
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><kbd>Code_Generator</kbd></h5>
        
        <form method="post" action="code.php">
        <div class="form-group">
        <p class="card-text">Type the message below.</p>
        <input class="form-control" name="query" type="text" placeholder="Type message here">
        </div>
        <center><button type="submit" name="submit" class="btn btn-primary">Submit</button></center>
        </form>

      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><kbd>Decoder</kbd></h5>
        
        <form method="post" action="decode.php">
        <div class="form-group">
        <p class="card-text">Type the code below.</p>
        <input class="form-control" name="query" type="text" placeholder="Type secret code here">
        </div>
        <center><button type="submit" name="submit" class="btn btn-primary">Submit</button></center>
        </form>
      
      </div>
    </div>
  </div>
</div>
</div>


<br><br>
<!--footer-->

<center><div class="jumbotron">

<center><p>It uses random compression algorithms for new and unique code generation.</p>
  <p class="display-4">Designed with ❤️ by Subhajit Mondal</p>
  </center>

 </div> </center>
  </body>
</html>