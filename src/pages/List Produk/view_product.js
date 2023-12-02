function getViewProduct(imagePath, nama, harga, description){
    return `
    <td>
        <a href="">
            <div class="product">
                <div class="product_image">
                    <img height="350px" src="${imagePath}" alt="">
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
