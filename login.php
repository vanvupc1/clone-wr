<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="./assets/css/login.css">
</head>

<?php
require_once("lib/connection.php");
if (isset($_POST["submit"])) {
    // lấy thông tin người dùng
    $username = $_POST["username"];
    $password = $_POST["password"];
    //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
    //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
    $username = strip_tags($username);
    $username = addslashes($username);
    $password = strip_tags($password);
    $password = addslashes($password);
    if ($username == "" || $password =="") {
        echo '
            <script type="text/javascript">

            $(document).ready(function(){

                swal({
        
                type: "warning",
                title: "Username or Password is empty",
                showConfirmButton:true,
                confirmButtonText:"OK"
                    })
            });

            </script>';
    }else{
        $sql = "select * from taikhoan where TenDangNhap = '$username' and MatKhau = '$password' ";
        $query = mysqli_query($conn,$sql);
        $num_rows = mysqli_num_rows($query);
        if ($num_rows==0) {
            echo '
            <script type="text/javascript">

            $(document).ready(function(){

                swal({
        
                type: "warning",
                title: "Username or Password incorect",
                showConfirmButton:true,
                confirmButtonText:"OK"
                    })
            });

            </script>';
        }else{
            //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
            $_SESSION['username'] = $username;
            // Thực thi hành động sau khi lưu thông tin vào session
            // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
            header('Location: index.php');
        }
    }
}
// echo "fail";
// echo '

// ';
 ?>
 <div class="wrapper">
    <div class="container-login">
        <div class="wrap">
            <div class="login-pic">
                <img src="./assets/img/team.jpg" alt="">
            </div>
            <div class="login-form">
                <div class="login-form-title">
                    <b> Please Sign In</b>
                </div>
                <form action="login.php" method="post">
    
                    <div class="login-input validate-input">
                        <input class="input"  type="text"  name="username"placeholder="Username">
                        
                        <div class="focus-input"></div>
                        <div class="symbol-input">
                            <i class='bx bx-user'></i>
                        </div>
                        
                    </div>
                    <div class="login-input validate-input">
                        <input  class="input" name="password"  placeholder="Password"type="password">
                        <div toggle="#password-field" class="bx bx-hide fa-fw field-icon click-eye">
                            
                        </div>
                        <div class="focus-input"></div>
                        <div class="symbol-input">
                            <i class='bx bx-key'></i>
                        </div>
                    </div>
                    <div class="container-login-form-btn">
                            <input type="submit" 
                            name="submit"value="Đăng nhập" id="submit"  />
                    </div>
                </form>
            </div>
        </div>
        
    </div>
 </div>
 
<body>
    
</body>
</html>