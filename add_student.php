<?php

session_start();
    
        $connection = mysqli_connect("localhost","root","");
        $db= mysqli_select_db($connection,"clgmg");      
    
        $query= " insert into tblstudent values('','$_POST[email]','$_POST[password]','$_POST[name]','$_POST[fname]','$_POST[branch]',$_POST[rollno],'$_POST[sem]','$_POST[gender]','$_POST[dob]')";
        echo $query;
        $query_run = mysqli_query($connection,$query);
     ?>
<script type="text/javascript"> 
  alert("added successfully");
  window.location.href ="dashboard.php";
</script>



