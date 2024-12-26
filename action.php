<?php
    session_start();
    include "template/koneksi.php";

    if(isset($_POST['aksi'])) {
        $aksi = $_POST['aksi'];

        if($aksi == 'login') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = mysqli_query($conn, "
                SELECT * FROM tb_user
                WHERE username = '".$username."' AND
                      password = MD5('".$password."')
            ");
            if(mysqli_num_rows($sql) == '1') {
                $data = mysqli_fetch_array($sql);

                $_SESSION['id_user'] = $data['id_user'];
                $_SESSION['username'] = $data['username'];
                $_SESSION['nama_user'] = $data['nama_user'];

                header("Location: index.php");
            } else {
                header("Location: login.php?error_login=1");
            }
        }
    }
?>