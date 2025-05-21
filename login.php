<?php
session_start();
include 'koneksi.php';
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username='$username'AND password='$password'";
    $result = mysqli_query($koneksi, $sql);

    if ($result -> num_rows > 0) {
        $data = mysqli_fetch_assoc($result);

        if($data['role'] == 'user'){
            header('location:index.php');
        }
        else if ($data['role'] == 'admin'){
           header('location: admin.php');
        }
        else{
            header('location: superadmin.php');
        }


    }else{
        echo 'LOGIN GAGAL';
    }
}
  
?>


<!DOCTYPE <html>
<htm0 lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <div class="box">
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="login" value="Login">
        
        </form>
    </div>
</body>
</html>


