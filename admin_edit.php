<?php

session_start();
    
        $connection = mysqli_connect("localhost","root","");
        $db= mysqli_select_db($connection,"clgmg");      
        $query= " update tblstudent set name ='$_POST[name]',fname ='$_POST[fname]',email ='$_POST[email]',branch='$_POST[branch]',sem ='$_POST[sem]',dob='$_POST[dob]' WHERE rollno = $_POST[rollno]";
        $query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript"> 
  alert("edit successfully");
  window.location.href ="dashboard.php";
</script>