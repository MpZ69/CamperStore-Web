<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $nama = $_POST['nama']; // Ubah dari $_GET menjadi $_POST
        echo "<title>$nama</title>";
    ?>
    <link rel="stylesheet" href="beli_produk.css">
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <div class="navigation_bar">
        <script src="../navbar.js"></script>
        <script>
            document.querySelector('.navigation_bar').innerHTML = getNavBar();
        </script>
    </div>  

    <div style="height: 100px;"></div>
    <center>
    <div style="width: 80%;">
        <table>
            <tr>
                <td style="vertica-align: center;">
                    <?php
                        $imagePath = $_POST['imagePath'];
                        echo "<img height=\"200px\" src=\"$imagePath\" alt=\"\">";
                    ?>
                </td>
                <td style="vertical-align: top;">
                    <div class="product_info">
                        <div class="nama">
                            <?php
                                $nama = $_POST['nama'];
                                echo "$nama"
                            ?>
                        </div>
                        <div class="harga">
                            <?php
                                $harga = $_POST['harga'];
                                echo "IDR $harga";
                            ?>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan=2 style="padding-top:20px;">
                    <div class="form-container">
                        <div class="form-title">
                            Alamat & Pembayaran
                        </div>

                        <form action="proses_pembelian.php" method="post">
                            <label class = "input_title" for="nama_user">Nama:</label>
                            <input class="input_form" type="text" id="nama_user" name="nama_user" required>

                            <label class = "input_title" for="alamat">Alamat:</label>
                            <input class="input_form" type="text" id="alamat" name="alamat" required>

                            <label class = "input_title" for="no_telp">No. Telp:</label>
                            <input class="input_form" type="text" id="no_telp" name="no_telp" required>

                            <label class = "input_title" for="email">Email:</label>
                            <input class="input_form" type="text" id="email" name="email" required>
                           
                            <input type="hidden" name="nama" value="<?php echo $_POST['nama']; ?>">
                            <input type="hidden" name="harga" value="<?php echo $_POST['harga']; ?>">
                            <input type="hidden" name="deskripsi" value="<?php echo $_POST['deskripsi']; ?>">
                            <input type="hidden" name="imagePath" value="<?php echo $_POST['imagePath']; ?>">


                            <label class = "input_title" for="jumlah_pcs"> Jumlah (PCS)</label>
                            <input class="input_form" type="number" name="jumlah_pcs" id="jumlah_pcs">

                            <label class = "input_title" for="metode_pembayaran">Metode Pembayaran:</label>
                            <select id="metode_pembayaran" name="metode_pembayaran" required>
                                <option value="transfer_bank">Cash On Delivery (COD)</option>
                            </select>

                            <button type="submit">Pesan Sekarang</button>
                        </form>
                    </div>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>
