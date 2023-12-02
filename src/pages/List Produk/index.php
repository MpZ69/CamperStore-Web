<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CamperStore - List Produk</title>
    <link rel="stylesheet" href="index.css">
    <script src="list_produk.js"></script>
</head>
<body>
    <div class="navigation_bar">
        <script src="../../script/top_bar.js"></script>
        <script>
            document.querySelector(".navigation_bar").innerHTML = getTopBar("List Produk");
        </script>
    </div>

    <div class="content">
        <table>
            <!-- SEPATU GUNUNG - 1-->
            <tr>
                <td>
                    <div class="category">
                        Sepatu Gunung
                    </div>
                </td>
                
            </tr>
            <tr>
                <td class="product1x1" style="padding-right: 20px;">
                    <script>
                        document.querySelector(".product1x1").innerHTML = getViewProduct(
                            "data/sepatu/hipzo-sepatu-gunung-kerja/hipzo-sepatung-gunung-kerja.jpg",
                            "Sepatu Pria Hiking Casual Hipzo Sepatu Gunung Kerja Riding Terbaru - Navy 41",
                            "135.000",
                            `Hipzo Original Produk Kebanggaan anak bangsa dengan Kualitas International Model dan design Elegan dan Kekinian. Bahan Pilihan, Kualitas terjaga .

                            Spesifikasi Produk :
                            - Sepatu Hipzo M 032
                            - Ready Size 39.40.41.42.43
                            - Upper Webbing Tebal dan Kuat
                            - Insole Karet Sponge Lentur & Nyaman

                            Size Chart ;
                            39 = 24.5 cm
                            40 = 25 cm
                            41 = 26 cm
                            42 = 26.5 cm
                            43 = 27.5 cm`
                        );
                    </script>
                </td>
                <td class="product1x2">
                    <script>
                        document.querySelector(".product1x2").innerHTML = getViewProduct(
                            "data/sepatu/kanky-kitadake-gunung-casual/kanky-story-kitadake-gunung-casual-sportstyle.jpg",
                            "Kanky Story Kitadake - Sepatu Gunung Casual SportStyle Pria - Green L. Green, 39",
                            "388.800"
                        );
                    </script>
                </td>
            </tr>

            <!-- TAS GUNUNG - 2 -->
            <tr>
                <td>
                    <div class="category">
                        Tas Gunung
                    </div>
                </td>
            </tr>
            <tr>
                <td class="product2x1" style="padding-right: 20px;">
                    <script>
                        document.querySelector(".product2x1").innerHTML = getViewProduct(
                            "data/tas/carrier-nature-hike-70l/carrier-nature-hike-70l.jpg",
                            "Carrier Naturehike 70L Tas Gunung Keril Hiking Kerir Outdoor Pendaki - Brown",
                            "1.146.000",
                            `Hipzo Original Produk Kebanggaan anak bangsa dengan Kualitas International Model dan design Elegan dan Kekinian. Bahan Pilihan, Kualitas terjaga .
                            
                            Spesifikasi Produk :
                            - Sepatu Hipzo M 032
                            - Ready Size 39.40.41.42.43
                            - Upper Webbing Tebal dan Kuat
                            - Insole Karet Sponge Lentur & Nyaman
                            
                            Size Chart ;
                            39 = 24.5 cm
                            40 = 25 cm
                            41 = 26 cm
                            42 = 26.5 cm
                            43 = 27.5 cm`
                        );
                    </script>
                </td>
                <td class="product2x2" style="padding-right: 20px;">
                    <script>
                        document.querySelector(".product2x2").innerHTML = getViewProduct(
                            "data/tas/eiger-rhinos-45-ng-carrier/eiger-rhinos-45-ng-carrier.webp",
                            "Eiger Rhinos 45 NG Carrier - Gacor Kang Edition",
                            "1.139.050"
                        );
                    </script>
                </td>
            </tr>

        </table>
    </div>
</body>
</html>
