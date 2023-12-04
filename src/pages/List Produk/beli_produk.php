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
        <!-- nav bar -->
        <div class="navigation_bar">
        <nav>
            <label class="logo">
                <img style="padding-top:10px;" height="70px" src="../../logo.png" alt="">
            </label>
            <ul>
                <li><a class="nav_button" href="../Home">Home</a></li>
                <li><a class="nav_button" href="../List%20Produk">Produk</a></li>
                <li><a class="nav_button" href="">Tentang</a></li>
            </ul>
        </nav>
    </div>
    <!-- nav bar -->

    <div style="height: 100px;"></div>
    <center>
    <div style="width: 80%;">
        <table>
            <tr>
                <td style="vertica-align: center;">
                    <?php
                        $imagePath = $_POST['imagePath'];
                        echo "<img height=\"400px\" src=\"$imagePath\" alt=\"\">";
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
        </table>
    </div>
    </center>
</body>
</html>
