
<?php
session_start();
    if (isset($_POST['login']))
    {
        $connection = mysqli_connect("localhost","root","");
        $db= mysqli_select_db($connection,"clgmg");
        if(isset($_POST['login'])){
            $uname=$_POST['email'];
            $password=$_POST['password'];
            $query="SELECT *FROM adminlogin WHERE email='$uname' and password='$password'";
            $query_run = mysqli_query($connection,$query);
            $row = mysqli_num_rows($query_run);{
                if($row == 1){
                    echo "login succesfully";
                    $_SESSION['email']= $uname;
                    header('location:dashboard.php');
                }
                else{
                    echo "login failed";
                    header('location:adminlogin.php');
                }
            }
        }
    }
?>
<!DOCTYPE html>
<head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Login</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="style.css" media="screen" >  
        <script type="text/javascript" src ="bootstrap-4.4.1/js/bootstrap.min.js"></script>       
</head>
<body>
<form class="box" action=" " method="post">
                 <h1> ADMIN LOGIN</h1>
               <input type="text"  placeholder="EMAIL" name="email" required >
               <input type="password" placeholder="PASSWORD" name="password" required>
               <input type="submit"  name="login" placeholder="LOGIN" >
        </form>
     </body>
    
</html>
