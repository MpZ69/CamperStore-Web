<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Pembelian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 60%;
        }

        h2 {
            color: #4caf50;
        }

        p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .confirmation-details {
            border: 1px solid #ddd;
            padding: 10px;
            margin-top: 20px;
            text-align: left;
        }

        .confirmation-details label {
            font-weight: bold;
            display: inline-block;
            width: 150px;
        }

        .confirmation-details p {
            display: inline-block;
        }
    </style>
    <link rel="stylesheet" href="proses_pembelian.css">    
</head>
<body>

    <div class="container">
        <h2>Pembelian Berhasil!</h2>
        <p>Terima kasih telah melakukan pembelian. Berikut adalah detail pembelian Anda:</p>

        <div class="confirmation-details">
            <label>Nama:</label>
            <p><?php echo htmlspecialchars($_POST['nama_user']); ?></p><br>

            <label>Alamat:</label>
            <p><?php echo htmlspecialchars($_POST['alamat']); ?></p><br>

            <label>No. Telp:</label>
            <p><?php echo htmlspecialchars($_POST['no_telp']); ?></p><br>

            <label>Email:</label>
            <p><?php echo htmlspecialchars($_POST['email']); ?></p><br>

            <label>Jumlah (PCS):</label>
            <p><?php echo htmlspecialchars($_POST['jumlah_pcs']); ?></p><br>

            <label>Metode Pembayaran:</label>
            <p><?php echo htmlspecialchars($_POST['metode_pembayaran']); ?></p><br>

            <label>Nama Produk:</label>
            <p><?php echo htmlspecialchars($_POST['nama']); ?></p><br>

            <label>Harga:</label>
            <p><?php echo htmlspecialchars($_POST['harga'] * $_POST['jumlah_pcs']); ?></p><br>

            <label>Deskripsi Produk:</label>
            <p><?php echo htmlspecialchars($_POST['deskripsi']); ?></p><br>

            <div >
                <a href="../List%20Produk">
                    <button class="buttonKembali" type="button">Kembali</button>
                </a>
            </div>
        </div>
    </div>

</body>
</html>
