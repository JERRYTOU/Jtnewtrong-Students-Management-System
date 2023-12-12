<?php

session_start();

if(isset($_SESSION['uid']))
{
    header('location:admin/admindash.php');
}
?>
<html lang="en_US">
    <head>
        <meta charset ="UTF-8">
        <title> Admin Login </title>
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


    </head>
    <body>
        <h1 align="center">Admin Login</h1><br>
        <form action="login.php" method="post">
            
            <table align="center">
                <tr>
                    <td>Username</td><td><input type="text" name="uname"></td>
                </tr>
                <tr>
                    <td>Password</td><td><input type="password" name="pass"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="login" value="Login"></td>
                </tr>
                
            </table>
            
        </form>
    </body>
</html>

<?php

include('dbcon.php');

if(isset($_POST['login'])){
    
    $username = mysqli_real_escape_string($con,$_POST['uname']);
    $password = mysqli_real_escape_string($con,$_POST['pass']);
    
    $qry = "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'";
    
    $run = mysqli_query ($con,$qry);
    
    $row = mysqli_num_rows($run);
    
    if($row>=1)
    {
        $data = mysqli_fetch_assoc($run);
        $id = $data['id'];
        
        
        
        $_SESSION['uid']=$id;
        
        header('location:admin/admindash.php');
        
    }
    else
    {
        ?>
        <script>
            alert('Username Or Password Dont match');
            window.open('login.php','_self')
</script>
        <?php
    }
}

?>