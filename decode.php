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
  <center>
  
      
      
   <?php
      
      
    if(isset($_POST['submit'])){
    
    $qw = $_POST['query'];
    
    
 $con = mysqli_connect("","","");
mysqli_select_db($con,"");



$insert_query = "select message from main where code='$qw'";

$res=mysqli_query($con, $insert_query);
 $arr=mysqli_fetch_array($res);     
        $aa=$arr['message'];
        
if (mysqli_num_rows($res) > 0) {
    
        echo "<h5><kbd>The Message is :</kbd></h5>";
        echo "<p class=\"display-4\">$aa</p>";
    
} else {
    echo " <p class=\"display-4\">Sorry, No Message Found</p> ";
}

        

    }
 
          
    ?>
      

  </center>
  </div>
  </div>

  </body>
</html>