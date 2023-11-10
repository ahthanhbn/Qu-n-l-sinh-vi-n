<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sinh viên</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include("connect.php");
        if(isset($_POST['submit'])){
            $fullname = $_POST['fullname'];
            $gioitinh = $_POST['gioitinh'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];

            $sql = "INSERT INTO students(hovaten,gioitinh,email,mobile)
            VALUES('$fullname', '$gioitinh','$email','$mobile')";
            $result = $conn->query($sql);
            if(!$result){
                die("Loi Ket noi: " .$conn->connect_errno);

            }
            header("location: ../index.php");
            exit;
        }
    ?>
    <div class="container">
        <h3 class="title">Thêm mới sinh viên
            <form action="" method="post">
                <div>
                    <label for="fullname">Họ và tên</label>
                    <input type="text" name="fullname" id="">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="">
                </div>
                <div>
                    <label for="gioitinh">Giới tính</label>
                    <input type="text" name="gioitinh" id="">
                </div>
                <div>
                    <label for="mobile">Điện thoại</label>
                    <input type="text" name="mobile" id="">
                </div>
                <input type="submit" name="submit" id="" value="Thêm mới">
                <a href="index.php">
                    <input type="button" value="Hủy" class="cancel" name="" id="">
                </a>
            </form>
        </h3>
    </div>
</body>
</html>