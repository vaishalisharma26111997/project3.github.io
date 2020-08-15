
<?php

session_start();
    
        $connection = mysqli_connect("localhost","root","");
        $db= mysqli_select_db($connection,"clgmg");      
        $query= "delete from tblstudent where rollno = '$_POST[rollno]'";
        $query;
        echo($query);
        $query_run = mysqli_query($connection,$query);
     ?>
<script type="text/javascript"> 
  alert("delete successfully");
  //window.location.href ="dashboard.php";
</script>




