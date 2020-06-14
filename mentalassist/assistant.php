<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assistant.css" class="css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Mental Health Assistant</title>
  </head>
  <body>
    <div style="background-color:DodgerBlue;"class="jumbotron">
        <h1 align="center"><span style="color: white;"><i class="fa fa-heartbeat" style="font-size:48px;color:red"></i><strong>Mental Health Assistant</strong></span></h1>
     </div>
     <button onclick="myFunction()"id="darkmode" class="darkmode"><span style="color: white;">Dark mode</span></button>
 
      <div class="container" id="border">
          <h2 align="center"  class="py-4 rounded textlight"><strong>About</strong></h2>
       <p>This website has been developed for the purpose to provide people with a tool to help them cultivate balance and wellbeing in their lives</p>
        <p>Using this is the first important step to understand more about yourself.The result will help build your awareness to understand where you're investing your time.This will also help you make adjustments to get more out of your life.Take the <strong>assesment test</strong> to know more about yourself.</p>
        <p>To take the assesment click <strong>Get started</strong> button given below.
      </div><br><br>
    <button type="button" class="btn btn-primary" id="start"><a href="questions.php"><span style="color: white;">Get Started</span></a></button>

    <script>
      function myFunction() {
         var element = document.body;
         element.classList.toggle("dark-mode");
      }
      </script>

      <script src="toogle.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>