function getProdukUrl(filePath, imagePath, nama, harga, description){
    const encodedImagePath = encodeURIComponent(imagePath);
    const encodedNama = encodeURIComponent(nama);
    const encodedHarga = encodeURIComponent(harga);
    const encodedDescription = encodeURIComponent(description);
    return `${filePath}?imagePath=${encodedImagePath}&nama=${encodedNama}&harga=${encodedHarga}&description=${encodedDescription}`;
}

function getViewProduct(imagePath, nama, harga, description) {
    // Mengembalikan HTML dengan tautan yang mengarah ke xxx.php dengan parameter
    return `
    <td>
        <a href="${getProdukUrl('info_produk.php', imagePath, nama, harga, description)}">
            <div class="product">
                <div class="product_image">
                    <img height="450px" src="${imagePath}" alt="">
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