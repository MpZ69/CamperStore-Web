<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $nama = $_GET['nama'];
        echo"<title>$nama</title>";
    ?>
    <link rel="stylesheet" href="info_produk.css">
</head>
<body>
    <center>
        <div class="content">
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
                        <div class="tombol_beli">
                            <button class="tombol-keren">Beli Sekarang</button>
                        </div>;
                    </td>
                </tr>
            </table>
        </div>
    </center>
</body>
</html>