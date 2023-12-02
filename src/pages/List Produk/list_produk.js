function getViewProduct(imagePath, nama, harga, description) {
    // Menggunakan encodeURIComponent untuk mengonversi nilai menjadi URL-safe
    const encodedImagePath = encodeURIComponent(imagePath);
    const encodedNama = encodeURIComponent(nama);
    const encodedHarga = encodeURIComponent(harga);
    const encodedDescription = encodeURIComponent(description);

    // Membuat URL untuk xxx.php dengan parameter yang dienkripsi
    const url = `info_produk.php?imagePath=${encodedImagePath}&nama=${encodedNama}&harga=${encodedHarga}&description=${encodedDescription}`;

    // Mengembalikan HTML dengan tautan yang mengarah ke xxx.php dengan parameter
    return `
    <td>
        <a href="${url}">
            <div class="product">
                <div class="product_image">
                    <img height="250px" src="${imagePath}" alt="">
                </div>
                <div class="product_title">
                    ${nama}
                </div>
                <div class="product_price">
                    IDR ${harga}
                </div>
            </div>
        </a>
    </td>`;
}