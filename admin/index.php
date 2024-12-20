<?php
    require('common/config.php');
    require('common/essentials.php');

    session_start();
    session_regenerate_id(true);
    if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
        redirect('dashboard.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Login | MTC Hotel</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- External Links -->
    <?php include "common/links.php" ?>

    <!-- Local Styling -->
    <style>
        .login-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 320px;
        }
    </style>
</head>
<body class="bg-warning">

    <div class="login-form text-center bg-white rounded shadow overflow-hidden">
        <form method="POST">
            <h4 class="bg-dark text-white py-3">ADMIN LOGIN</h4>
            <div class="p-4">
                <div class="mb-3">
                    <input name="admin_username" type="text" class="form-control shadow-none text-center" placeholder="Username" required>
                </div>
                <div class="mb-4">
                    <input name="admin_password" type="password" class="form-control shadow-none text-center" placeholder="Password" required>
                </div>
                <button name="login" type="submit" class="btn text-white custom-bg shadow-none">LOGIN</button>
            </div>
        </form>
    </div>

    <?php
        if (isset($_POST['login'])){
            $frm_data = filteration($_POST);

            $query = "SELECT * FROM admin_logs WHERE admin_username=? AND admin_password=?";
            $values = [$frm_data['admin_username'], $frm_data['admin_password']];
            $datatypes = "ss";

            $res = select($query, $values, "ss");
            if($res->num_rows==1){
                $row = mysqli_fetch_assoc($res);
                $_SESSION['adminLogin'] = true;
                $_SESSION['adminId'] = $row['id'];
                redirect('dashboard.php');
            } else {
                alert('error', 'INTRUDER! - Wrong Credentials!');
            }
        }
    ?>
    
    <?php include "common/scripts.php" ?>
</body>
</html>