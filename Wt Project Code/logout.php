<?php
session_start();
if(isset($_SESSION['user_id']))
{
    session_destroy();
    echo "You are logged-out";
    
    header('Refresh: 2; URL=home.php');
}
else{
    echo "<script>location.href='home.php'</script>";
}
?>