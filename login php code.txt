<?php
    $iuser_id=$_POST['iuser_id'];
    $ipassword=$_POST['ipassword'];
    //to prevent sql injection
    $iuser_id=stripcslashes($iuser_id);
    $ipassword=stripcslashes($ipassword);
    session_start();
    //connect to server and db
    $conn=new mysqli('localhost','root','','project');
    if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
    }
    else{
        if(isset($_POST['submit']))
        {

            $uname = mysqli_real_escape_string($conn,$_POST['iuser_id']);
            $password = mysqli_real_escape_string($conn,$_POST['ipassword']);
        
            if ($uname != "" && $password != "")
            {
        
                $sql_query = "select count(*) as user_id from registration where user_id='".$uname."' and password='".$password."'";
                $result = mysqli_query($conn,$sql_query);
                $row = mysqli_fetch_array($result);
        
                $count = $row['user_id'];
        
                if($count > 0){
                    $_SESSION['user_id'] = $uname;
                    //header('Location: home.php');
                    echo "hello  " . $_SESSION['user_id'];
                    header('Refresh: 2; URL=home.php');
                }else
                {
                    echo "Invalid username or password try again";
                    header('Refresh: 2; URL=Form.html');

                }
                $conn->close();
            }
        
        }

    }








   

?>