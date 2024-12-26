<?php
session_start();
if (!isset($_SESSION['id_user'])) {
    header("Location: login.php");
}
// tambah koneksi disini
include "template/koneksi.php";

// tambah notif jika hapus berhasil
$notif_hapuscart = false;
if (isset($_GET['remove_cart'])) {
    if($_GET['remove_cart'] == '1'){
        $notif_hapuscart = true;
    }
}

$menu_parent = "trx";
$menu_child = "";

$title = "Sistem Informasi - Transaksi";

include "template/header.php";
include "template/sidebar.php";
?>

<!-- Isikan judul page disini -->
<div class="content-wrapper">
    <section class="content-header">
        <h1>Halaman Transaksi</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level 1</a></li>
            <li class="active">Level 2</li>
        </ol>
    </section>

    <section class="content container-fluid">
        <!-- START DISINI-->
        <?php
        if($notif_hapuscart) { ?>
            <div class="alert alert-danger">
                Berhasil menghapus keranjang belanja!
            </div>
        <?php
        }
        ?>
        <?php
        // $cart = $_SESSION['cart'];  // cek array
        $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array(); // set array awal jika data masih kosong agar tidak error
        echo "<h3>Barang yang ada di keranjang belanja:</h3>";
        foreach ($cart as $id_barang) {
            $sql = mysqli_query($conn, "SELECT * FROM tb_barang WHERE id_barang = " . intval($id_barang));
            if ($sql && $barang = mysqli_fetch_array($sql)) {
                ?>
                <div class="col-md-2">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <?php echo htmlspecialchars($barang['nama_barang'], ENT_QUOTES, 'UTF-8'); ?>
                        </div>
                        <div class="box-body">
                            <div>
                                <img src="assets/img/<?php echo htmlspecialchars($barang['gambar'], ENT_QUOTES, 'UTF-8'); ?>" height="100" alt="<?php echo htmlspecialchars($barang['nama_barang'], ENT_QUOTES, 'UTF-8'); ?>">
                            </div>
                            <div>
                                Rp <?php echo number_format($barang['harga'], 0, ',', '.'); ?>
                            </div>
                        </div>
                        <div class="box-footer">
                            <a href="cart.php?remove_id=<?php echo urlencode($barang['id_barang']); ?>" class="btn btn-danger btn-flat">
                                <i class="fa fa-trash"></i> Remove
                            </a>
                        </div>
                    </div>
                </div>
                <?php
            } else {
                echo "<p>Item with ID $id_barang not found.</p>";
            }
        }
        ?>
        <!-- SELESAI DISINI -->
    </section>
</div>

<?php
include "template/footer.php";
?>