<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3 class="title">Van Lang University Student Management</h3>
        <a href="create.php" class="submit">Thêm sinh viên</a>
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>TT</th>
                        <th>Họ và tên</th>
                        <th>Giới tính</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- <tr>
                        <td>1</td>
                        <td>Nguyễn Bá Thành</td>
                        <td>Thành</td>
                        <td>thanh.207ct55174@vanlanguni.vn</td>
                        <td>0973722819</td>
                        <td>
                            <a href="" class="btn primary">Sửa</a>
                            <a href="" class="btn danger" style="margin-right:0;">Xóa</a>
                        </td>
                    </tr> -->
                    <?php
                    include("connect.php");
                    $sql= "SELECT * FROM students";
                    $result = $conn ->query($sql);
                    if($result->num_rows>0){
                        while($row = $result->fetch_assoc()){
                            echo "
                                <tr>
                                    <td>$row[id]</td>
                                    <td>$row[hovaten]</td>
                                    <td>$row[gioitinh]</td>
                                    <td>$row[email]</td>
                                    <td>$row[mobile]</td>
                                    <td>
                                        <a href='edit.php?id=$row[id]' class='btn primary'>Sửa</a>
                                        <a href='delete.php?id=$row[id]' class='btn danger' style='margin-right:0;'>Xóa</a>
                                    </td>
                                </tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>