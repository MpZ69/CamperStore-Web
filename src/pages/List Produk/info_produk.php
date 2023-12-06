<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $nama = $_GET['nama'];
        echo "<title>$nama</title>";
    ?>
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="info_produk.css">
</head>
<body>
    <div class="navigation_bar">    
        <script src="../navbar.js"></script>
        <script>
            document.querySelector('.navigation_bar').innerHTML = getNavBar();
        </script>
    </div>  
    <div style="height: 75px;"></div>
    <center>
        <div class="content">
            <form action="beli_produk.php" method="post"> <!-- Tambahkan form element dan method POST -->
                <table>
                    <tr>
                        <td style="padding-right: 25px;">    
                            <?php
                                $imagePath = $_GET['imagePath'];
                                echo "<img class=\"product_image\" src=\"$imagePath\" alt=\"\">";
                            ?>
                        </td>
                        <td class="info">
                            <?php
                                $nama = $_GET['nama'];
                                $harga = $_GET['harga'];
                                $description = $_GET['description'];

                                echo "<div class=\"nama\">$nama</div>";
                                echo "<div class=\"harga\">IDR $harga</div>";
                                echo "<div style=\"padding-bottom: 20px\"> </div>";
                                echo "<div class=\"deskripsi_judul\"> Deskripsi </div>"; 
                                echo "<div class=\"deskripsi\">" . nl2br($description) . "</div>";
                            ?>
                            <input type="hidden" name="nama" value="<?php echo $nama; ?>">
                            <input type="hidden" name="harga" value="<?php echo $harga; ?>">
                            <input type="hidden" name="deskripsi" value="<?php echo $description; ?>">
                            <input type="hidden" name="imagePath" value="<?php echo $imagePath; ?>">

                            <div class="tombol_beli">
                                <button type="submit" class="tombol-keren">Beli Sekarang</button>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </center>
</body>
</html>
