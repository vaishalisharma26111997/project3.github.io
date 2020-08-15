
  
     <?php
session_start();
    
        $connection = mysqli_connect("localhost","root","");
        $db= mysqli_select_db($connection,"clgmg");  
           
?>
<!DOCTYPE html>
<head>
         
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>student login</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="style.css" media="screen" >  
</head>
<body>
<form class="box" action=" " method="post">
                 <h1> STUDENT LOGIN</h1>
               <input type="text"  placeholder="ROLLNO" name="rollno" required >
               <input type="submit"  name="login" placeholder="LOGIN" >
               <?php
        
        if(isset($_POST['login']))
        {
            $query="SELECT * FROM tblstudent WHERE rollno ='$_POST[rollno]'";
            $query_run = mysqli_query($connection,$query);
           while($row = mysqli_fetch_assoc($query_run)){
               ?><center>
              
             <table>
                   <tr>
                       <td><b>Roll NO:</b> </td>
                       <td> <input type="text" value ="<?php echo $row['rollno'];?>"disabled></td>
                    </tr>
                    <tr>
                       <td><b>NAME:</b> </td>
                       <td> <input type="text" value ="<?php echo $row['name'];?>"disabled></td>
                    </tr>
                    <tr>
                       <td><b>FATHER'S NAME:</b> </td>
                       <td> <input type="text" value ="<?php echo $row['fname'];?>"disabled></td>
                    </tr>
                    <tr>
                       <td><b>EMAIL:</b> </td>
                       <td> <input type="text" value ="<?php echo $row['email'];?>"disabled></td>
                    </tr>
                    <tr>
                       <td><b>BRANCH:</b> </td>
                       <td> <input type="text" value ="<?php echo $row['branch'];?>"disabled></td>
                    </tr>
                    <tr>
                       <td><b>SEMESTRER:</b> </td>
                       <td> <input type="text" value ="<?php echo $row['sem'];?>"disabled></td>
                    </tr>
                    <tr>
                       <td><b>GENDER:</b> </td>
                       <td> <input type="text" value ="<?php echo $row['gender'];?>"disabled></td>
                    </tr>
                    <tr>
                       <td><b>DOB:</b> </td>
                       <td> <input type="text" value ="<?php echo $row['dob'];?>"disabled></td>
                    </tr>
               </table>
           </form>
            </center>

               <?php
           }
        }
        ?>

        </form>
     </body>

     </body>
     
    
    

</html>
