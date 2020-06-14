<?php
  include "database.php";
  
  ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assiststyle.css" class="css">
    <link rel="stylesheet" href="assistant.css" class="css">
    <title>Assesment</title>
  </head>
  <body style="background-color:floralwhite">
   
    <div class="header">
      <h1>Assessment</h1>  
    </div>
   
    <div class="col-md-8 m-auto d-block ">
    <form action="check.php" method="post">
<?php
  for($i=1;$i<11;$i++){
$sqlget="select * from questions  where question_number=$i";
$sqldata= mysqli_query($db,$sqlget) or die("error getting");
while($rows=mysqli_fetch_array($sqldata)){
   ?>
  <?php
  $a=". ";
?>
  <div class="card" style="background-color:floralwhite">
      <h4 class="card-header"><?php  echo $rows['question_number'];
      echo $a.$rows['text'];?></h4>
          
          
          <?php
            $sqlget="select * from choices where question_number=$i";
            $sqldata= mysqli_query($db,$sqlget) or die("error getting");
            while($rows=mysqli_fetch_array($sqldata)){
               ?>
               <div class="card-body">
                  <input type="radio" name="quizcheck[<?php echo $rows['question_number'];?>]" value="<?php echo $rows['iscorrect'];?>">
                  <?php echo $rows['text']?>
               </div>
              
        

 
          <?php 
            }
            }
            } 
          ?>
          <input type="submit" name="submit" value="submit" class="btn btn-success m-auto d-block;">

          


 </form>
 </div>
 </div>

 <script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>


 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>