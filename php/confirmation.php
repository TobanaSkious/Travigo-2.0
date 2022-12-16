<?php
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $Password=$_POST['password'];
   if(empty($username) )
    {
        echo "<script>alert('username required');</script>"; 
        echo "<script>window.location.href = 'login.php'</script>";
    }
    if(empty($Password))
    {
    echo "<script>alert('password required');</script>"; 
    echo "<script>window.location.href = 'login.php'</script>";    
    }
    $sql = "SELECT * FROM users WHERE email='$mail' AND password='$password' ";

}
?>