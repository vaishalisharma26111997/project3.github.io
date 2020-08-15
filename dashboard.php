     
     <?php
session_start();
    
        $connection = mysqli_connect("localhost","root","");
        $db= mysqli_select_db($connection,"clgmg");  
           
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>dashboard</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="style.css" media="screen" >  
   
    </head>

<header>
<div class="head homeHeader"> 
        <div class="container">
    <a href="#" class="logo">Admin</a> 
    <div class="menu">
      <a href="logout.php">LOGOUT</a>
       </div>
      </div>
    </div>
</header>
</html>
<div class= "wrapper">
        <form class="sidebar" action=" " method="post">
        <ul>      
              <li> <input type="submit" name="add_student" value="Add student" ></li>
              <li> <input type="submit"  name="delete_student" value="Delete student" ></li>
              <li><input type="submit"  name="search_student"  value="Search student"></li>
              <li> <input type="submit"  name="edit_student" value="Edit student" ></li>
        </ul>
        </form>
    </div>
<div class= "right_side">
    <div class ="demo">
        <?php
        if(isset($_POST['search_student']))
        {
            ?>
            <center>
                <form action="" method="post">
                    ENTER ROLL NO:
                    <input type="text" name="roll_no">
                    <input type="submit" name="search_by_roll_search" value="Search">
            </center>
            <?php
        }
        if(isset($_POST['search_by_roll_search']))
        {
            $query="SELECT * FROM tblstudent WHERE rollno ='$_POST[roll_no]'";
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

<?php
        if(isset($_POST['edit_student']))
        {
            ?>
            <center>
                <form action="" method="post">
                    ENTER ROLL NO:
                    <input type="text" name="roll_no">
                    <input type="submit" name="search_by_roll_edit" value="Search">
            </center>
            <?php
        }
        if(isset($_POST['search_by_roll_edit']))
        {
            $query="SELECT * FROM tblstudent WHERE rollno ='$_POST[roll_no]'";
            $query_run = mysqli_query($connection,$query);
           while($row = mysqli_fetch_assoc($query_run)){
               ?><center>
                 <form  action = "admin_edit.php" method="post">
               <table>
                   <tr>
                       <td><b>Roll NO:</b> </td>
                       <td> <input type="text" name="rollno" value ="<?php echo $row['rollno'] ;?>"></td>
                    </tr>
                    <tr>
                       <td><b>NAME:</b> </td>
                       <td> <input type="text" name="name" value ="<?php echo $row['name'];?>"></td>
                    </tr>
                    <tr>
                       <td><b>FATHER'S NAME:</b> </td>
                       <td> <input type="text" name="fname" value ="<?php echo $row['fname'];?>"></td>
                    </tr>
                    <tr>
                    
                    <tr>
                       <td><b>EMAIL:</b> </td>
                       <td> <input type="text" name="email" value ="<?php echo $row['email'];?>"></td>
                    </tr>
                    <tr>
                       <td><b>BRANCH:</b> </td>
                       <td> <input type="text" name="branch" value ="<?php echo $row['branch'];?>"></td>
                    </tr>
                    <tr>
                       <td><b>SEMESTER:</b> </td>
                       <td> <input type="text" name="sem" value ="<?php echo $row['sem'];?>"></td>
                    </tr>
                    <tr>
                       <td><b>GENDER:</b> </td>
                       <td> <input type="text" name="gender" value ="<?php echo $row['gender'];?>"></td>
                    </tr>
                    <tr>
                       <td><b>DOB:</b> </td>
                       <td> <input type="text" name="dob" value ="<?php echo $row['dob'];?>"></td>
                    </tr><br>
                    <tr>
                        <td></td>
                        <td><input type="submit" name = "Edit" value="Save"></td>
                    </tr>
               </table>
              </div>
           </form>
            </center>

               <?php
           }
        }
        ?>
      <?php
      if(isset($_POST['add_student'])){ 
          ?>
        <center>FILL THE DETAILS
        <form action="add_student.php" method="post">
          <div class="table"> <table>
                <tr>
                    <td><b>ROLL NO:</b></td>
                   <td> <input type="text" name="rollno" required></td>
                </tr>
                <tr>
                    <td><b>NAME:</b></td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <td><b>FATHER'S NAME:</b></td>
                    <td><input type="text" name="fname" required></td>
                </tr>
                <tr>
                    <td><b>EMAIL:<b></td>
                    <td><input type="text" name="email" required></td>
                </tr>
                <tr>
                       <td><b>PASSWORD:</b> </td>
                       <td> <input type="text" name="password" required></td>
                    </tr>
                <tr>
                    <td><b>BRANCH:</b></td>
                   <td> <input type="text" name="branch" required></td>
                </tr>
                <tr>
                    <td><b>SEMESTER:</b></td>
                  <td>  <input type="text" name="sem" required></td>
                </tr>
                <tr>
                    <td><b>GENDER:</b></td>
                    <td><input type="text" name="gender" required></td>
                </tr>
                <tr>
                    <td><b>DOB:</b></td>
                    <td><input type="text" name="dob" required></td>
                </tr>
               <tr>
                   <td></td>
                   <td><input type="submit" name="add" value="add">
               </tr>
            </table>
          
        </form>
      </center>
        <?php
      }
      ?>
      <?php
        if(isset($_POST['delete_student']))
        {
            ?>
            <center>
                <h4>enter roll no to delete the student</h4>
                <form  class="search" action="delete_student.php" method="post">
                    ENTER ROLL NO:
                    <input type="text" name="roll_no">
                    <input type="submit" name="search_by_roll_delete" value="delete">
            </center>
            <?php
        }
        ?>
   </div>
</div>
<footer class="footer homefooter">
  © 2020 Personal Resume. All rights reserved | Design by VAISHALI SHARMA
</footer>
        
    </body>
</html>