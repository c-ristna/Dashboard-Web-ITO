<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">                      
                    <!-------------      image     ------------->
                    <img src="../assets/imgs/logo.png" alt="">
                </div>

                <div class="col-md-6 right">
                    
                    <div class="input-box">

                        <header>Login</header>
                        <div class="input-field">
                            <input type="text" class="input" id="email" required="" autocomplete="off">
                                <label for="email">Email Address</label> 
                            </div> 
                        <div class="input-field">
                            <input type="password" class="input" id="pass" required="">
                                <label for="pass">Password</label>
                        </div> 
                        <form action="../index.php" method="post">
                            <div class="input-field">
                                <input type="submit" class="submit" name="submit" value="Login">
                            </div>
</form>

                    </div> 
                </div>  
                <?php
                    include '../koneksi.php';
                    session_start();
                    
                    if (isset($_SESSION['username'])) {
                        header("Location: ../login/berhasil_login.php");
                        exit();
                    }
                    
                    if (isset($_SESSION['status_login'])) {
                        header("Location: ../login/berhasil_login.php");
                        exit();
                    }
                      
                    if (isset($_POST['submit'])) {
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                    
                        $sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
                        $result = mysqli_query($koneksi, $sql);
                    
                        if ($result->num_rows > 0) {
                            $row = mysqli_fetch_assoc($result);
                            $_SESSION['status_login'] = true;
                            $_SESSION['username'] = $row['username'];
                            header("Location: ../login/berhasil_login.php");
                            exit();
                        } else {
                            echo "<script>alert('Email atau password Anda salah. Silakan coba lagi!')</script>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>