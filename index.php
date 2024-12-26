<?php
session_start();
if (!isset($_SESSION['id_user'])) {
    header("Location: login.php");
}

$notif_cart = false;
if (isset($_GET['add_cart'])) {
    if($_GET['add_cart'] == '1'){
        $notif_cart = true;
    }
}

include "template/koneksi.php";

$menu_parent = "home";
$menu_child = "";

$title = "Sistem Informasi";

include "template/header.php";
include "template/sidebar.php";
?>

<!-- Isikan judul page disini -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>Judul Halaman</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level 1</a></li>
            <li class="active">Level 2</li>
        </ol>
    </section>

    <section class="content container-fluid">
        <!-- START DISINI-->
        <?php
        if($notif_cart) { ?>
            <div class="alert alert-success">
                Berhasil menambahkan ke keranjang belanja!
            </div>
        <?php
        }
        ?>
        <div class="row">
            <?php
            $sql = mysqli_query($conn, "SELECT * FROM tb_barang");
            while($row = mysqli_fetch_array($sql)){ ?>
                <div class="col-md-2">
                <div class="box box-primary">
                    <div class="box-header with-border"><?php echo $row['nama_barang'] ?></div>
                    <div class="box-body">
                        <div><img src="assets/img/<?php echo $row['gambar'] ?>" height="100"></div>
                        <div>Rp <?php echo number_format($row['harga'],0,',','.') ?></div>
                        </div>
                    <div class="box-footer">
                        <a href="cart.php?id=<?php echo $row['id_barang']; ?>" class="btn btn-success btn-flat">
                            <i class="fa fa-cart-plus"></i> Add to Cart
                        </a>
                    </div>
                </div>
                </div>
            <?php
            }
            ?>
        </div>
        <!-- SELESAI DISINI -->
    </section>
</div>

<?php
include "template/footer.php";
?>