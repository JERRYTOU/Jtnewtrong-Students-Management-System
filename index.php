<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

 


  
  
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    

    <div class=""> 

        <h1 align="center"> Welcome To Student Management System</h1>
        
      <div class="container">
        <form method="post" action="index.php" >
            <table class="table table-dark table-hover">
                <tr>
                    <td colspan="2" align="center">Student Information</td>
                </tr>
                <tr>
                    <td>Choose Standard</td>
                    <td>
                        <select class="dropdown" name="std">
                            <option value="1">1st</option>
                            <option value="2">2nd</option>
                            <option value="3">3rd</option>
                            <option value="4">4th</option>
                            <option value="5">5th</option>
                            <option value="6">6th</option>
                            <option value="7">7th</option>
                            <option value="8">8th</option>
                            <option value="9">9th</option>
                            <option value="10">10th</option>
                            <option value="11">11th</option>
                            <option value="12">12th</option>
                        </select>
                                   
                    </td>
                </tr>
                <tr>
                    <td>Enter Rollno</td>
                    <td><input type="text" name="rollno"</td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit" value="Show Info"></td>
                </tr>
            </table>
                                   
        </form>
            
        </div>

              


    </div>

    
    

</body>
</html>

<?php

if(isset($_POST['submit'])){
    
    $standard= $_POST['std'];
    $rollno = $_POST['rollno'];
    
    include('dbcon.php');
    include('function.php');
    
    showdetails($standard,$rollno);
    
    
    
    
    
    
}

?>
