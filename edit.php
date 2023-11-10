<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật sinh viên</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include("connect.php");
    $id = $_GET['id'];
    if($_SERVER['REQUEST_METHOD']=='GET'){
        if(!isset($_GET["id"])){
            header("location: index.php");
            exit;
        }

        $sql = "SELECT * FROM students WHERE id = '$id'";
        $result =  $conn ->query($sql);
        $row = $result -> fetch_assoc();
        if(!$row){
            header("location: index.php");
            exit;
        }
        $fullname = $row["hovaten"];
        $gioitinh = $row["gioitinh"];
        $email = $row["email"];
        $mobile = $row["mobile"];
    }else{
        $fullname = $_POST["fullname"];
        $gioitinh = $_POST["gioitinh"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];

        $sql =  "UPDATE students SET hovaten = '$fullname', gioitinh = '$gioitinh', email = '$email', mobile = '$mobile' WHERE id = '$id'";
        $result = $conn->query($sql);
        if(!$result){
            die("Loi ket noi: " .$conn->connect_errno);

        }

        header("location: ../index.php");
        exit;
    }
    ?>
    <div class="container">
        <h3 class="title">Thêm mới sinh viên
            <form action="" method="post">
                <div>
                    <label for="">Mã sinh viên</label>
                    <input type="text" name="id" id="id" disabled value="<?php echo $id; ?>">
                </div>

                <div>
                    <label for="fullname">Họ và tên</label>
                    <input type="text" name="fullname" id="" value="<?php echo $fullname; ?>">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="" value="<?php echo $email; ?>">
                </div>
                <div>
                    <label for="gioitinh">Giới tính</label>
                    <input type="text" name="gioitinh" id="" value="<?php echo $gioitinh; ?>">
                </div>
                <div>
                    <label for="mobile">Điện thoại</label>
                    <input type="text" name="mobile" id="" value="<?php echo $mobile; ?>">
                </div>
                <input type="submit" name="submit" id="" value="Cập nhật">
                <a href="index.php">
                    <input type="button" value="Hủy" class="cancel" name="" id="">
                </a>
            </form>
        </h3>
    </div>
</body>
</html>