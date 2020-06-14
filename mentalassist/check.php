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
    <title>Result</title>
  </head>
  <body  style="background-color:rgb(255,250,240)";>
    <div class="header">
        <h1>Results</h1>
    </div>
    
   
<?php
 
if(isset($_POST['submit'])){
    if(!empty($_POST['quizcheck'])){

        $count=count($_POST['quizcheck']);
        echo"<strong><p align=center>You have selected $count out of 10 questions</p></strong><br>";
    }else{
        header('location:questions.php');
    }
}

    
    
    $sum=0;
    $selected=$_POST['quizcheck'];
    
    foreach($selected  as $value){
       $sum=$sum+$value;
    }
    echo " your total score is <strong>$sum</strong> <br>";
    if($sum>=80){
        echo"<strong><h2>RESULT:HAPPY</h2></strong>";
        echo"<span style='font-size:100px;'>&#128515;</span>";
        echo"<p>Your results indicate that you have none</p>";
        echo"<p>If you notice that your symptoms aren't improving, you may want to bring them up with someone you trust.</p>";
        echo"<p>This screen is not meant to be a diagnosis, or the elimination of a diagnosis.  A trained medical or mental health professional can help clarify issues and diagnose depression.</p>";
        echo"<p>If you feel like your feelings, thoughts, or behaviors get worse, screen again. </p>";
    }elseif($sum>=60){
        echo"<strong><h2>RESULT:MILD DEPRESSION</h2></strong>";
        echo" <span style='font-size:100px;'>&#128530;</span>";
        echo"<p>Your results indicate that you may be experiencing some symptoms of mild depression. While your symptoms are not likely having a major impact on your life, it is important to monitor them.</p>";
        echo"<p>These results do not mean that you have depression, but it may be time to start a conversation with someone you trust</p>";
        echo"<p>This screen is not meant to be a diagnosis. Diagnosis and care of mental health conditions can be difficult. Having symptoms of depression is different than having depression. In addition, symptoms of depression can be caused by other mental health conditions, such as bipolar disorder, or other health problems, like a thyroid disorder. A trained professional, such as a doctor or a mental health provider, can make this determination and finding the right support can help you feel more like you again.</p>";
        echo"<p>The depression symptoms you are experiencing may also indicate a different type of mental health problem related to bipolar disorder. We recommend you also take the screen for bipolar disorder to find out if your symptoms may be more similar to those experienced by people with bipolar disorder.  People who struggle with bipolar disorder experience mood swings from extreme elation, energy, or agitation to low depressive symptoms.</p>";
    }elseif($sum>=40){
        echo"<strong><h2>RESULT:MODERATE DEPRESSION</h2></strong>";
        echo"<span style='font-size:100px;'>&#128528;</span>";
        echo"<p>Your results indicate that you may be experiencing symptoms of moderate depression. Based on your answers, living with these symptoms could be causing difficulty managing relationships and even the tasks of everyday life.</p>";
        echo"<p>These results do not mean that you have depression, but it may be time to start a conversation with someone you trust</p>";
        echo"<p>This screen is not meant to be a diagnosis. Diagnosis and care of mental health conditions can be difficult. Having symptoms of depression is different than having depression. In addition, symptoms of depression can be caused by other mental health conditions, such as bipolar disorder, or other health problems, like a thyroid disorder. A trained professional, such as a doctor or a mental health provider, can make this determination and finding the right support can help you feel more like you again.</p>";
        echo"<p>The depression symptoms you are experiencing may also indicate a different type of mental health problem related to bipolar disorder. We recommend you also take the screen for bipolar disorder to find out if your symptoms may be more similar to those experienced by people with bipolar disorder.  People who struggle with bipolar disorder experience mood swings from extreme elation, energy, or agitation to low depressive symptoms</p>";
    }elseif($sum<=39){
        echo"<strong><h2>RESULT:SEVERE DEPRESSION</h2></strong>";
        echo"<span style='font-size:100px;'>&#128532;</span>";
        echo"<p>Your results indicate that you may be experiencing symptoms of moderately severe depression. Based on your answers, living with these symptoms is causing difficulty managing relationships and even the tasks of everyday life.</p>";
        echo"<p>These results do not mean that you have depression, but it may be time to start a conversation with someone you trust</p>";
        echo"<p>This screen is not meant to be a diagnosis. Diagnosis and care of mental health conditions can be difficult. Having symptoms of depression is different than having depression. In addition, symptoms of depression can be caused by other mental health conditions, such as bipolar disorder, or other health problems, like a thyroid disorder. A trained professional, such as a doctor or a mental health provider, can make this determination and finding the right support can help you feel more like you again.</p>";
        echo"<p>The depression symptoms you are experiencing may also indicate a different type of mental health problem related to bipolar disorder. We recommend you also take the screen for bipolar disorder to find out if your symptoms may be more similar to those experienced by people with bipolar disorder.  People who struggle with bipolar disorder experience mood swings from extreme elation, energy, or agitation to low depressive symptoms.</p>";
        echo"<p><strong>Your response to this question indicates you may be at risk for harming yourself or someone else. Are you in crisis? Please call 911 or the National Suicide Prevention Hotline at 1-800-273-TALK or go immediately to the nearest emergency room.</strong></p>";
    }
    ?>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>