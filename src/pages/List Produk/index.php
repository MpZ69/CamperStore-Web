<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CamperStore - List Produk</title>
    <link rel="stylesheet" href="index.css">
    <script src="list_produk.js"></script>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <div class="navigation_bar">
        <script src="../navbar.js"></script>
        <script>
            document.querySelector('.navigation_bar').innerHTML = getNavBar();
        </script>
    </div>  

    <center>
    <div class="content">
        <div class="list_sepatu">
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
                    <td class="product1x1" style="padding-right: 50px;padding-top: 20px">
                        <script>
                            document.querySelector(".product1x1").innerHTML = getViewProduct(
                                "data/sepatu/hipzo-sepatu-gunung-kerja/hipzo-sepatung-gunung-kerja.jpg",
                                "Sepatu Pria Hiking Casual Hipzo Sepatu Gunung Kerja Riding Terbaru - Navy 41",
                                135000,
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
                    <td class="product1x2" style="padding-right: 50px;padding-top: 20px">
                        <script>
                            document.querySelector(".product1x2").innerHTML = getViewProduct(
                                "data/sepatu/kanky-kitadake-gunung-casual/kanky-story-kitadake-gunung-casual-sportstyle.jpg",
                                "Kanky Story Kitadake - Sepatu Gunung Casual SportStyle Pria - Green L. Green, 39",
                                388800,
                                `Kanky sportstyle is the new line from Sepatu Kanky that bring the outdoor looks but still great for daily use

                                Coming with fresh ideas that bring you an outdoor shoes concept with a little touch of casual sports style, you can feel the balance living in the newest silhouette from Kanky sportstyle

                                Made from high quality materials to support durability & flexibility of the shoes

                                Specifications

                                * Genuine leather suede on upper details
                                * High quality mesh with great air flow system
                                * Midsole phylon
                                * 100% Rubber outsole
                                * Eva Foam Insole
                                * Cementing construction to attach the outsole and midsole to the upper body
                                * Titan buckle lace
                                * 3M webbing`
                            );
                        </script>
                    </td>
                    <td class="product1x3" style="padding-right: 50px;padding-top: 20px">
                        <script>
                            document.querySelector(".product1x3").innerHTML = getViewProduct(
                                "data/sepatu/lavio-elektra-sepatu-hiking/lavio-elektra-sepatu-hiking.jpg",
                                "Lavio Elektra Sepatu Riding Sepatu Proyek Sepatu Hiking Sepatu Safety - Cream 39",
                                229000,
                                `Lavio Boots model terbaru dan terlaris, sepatu yang cocok untuk anda yang senang dengan fashion update terbaru. Gambar diatas adalah Gambar Asli Dari Kita, dijamin real Picture, garansi kembali jika tidak sesuai.

                                Brand : Lavio
                                Finishing : Bagus, Rapih, Kuat dan Nyaman dipakai
                                Material UP : Leather PU+Suede
                                Material SOLE : Rubber
                                Front : Terdapat Ujung Besi didepannya
                                Ukuran Tersedia : 39-43
                                Ukuran Jumbo 44-48 PO / Inden 6  hari
                                Jahit Keililing`
                            );
                        </script>
                    </td>
                </tr>
                <tr>
                    <td class="product1x4" style="padding-right: 50px;padding-top: 20px">
                        <script>
                            document.querySelector(".product1x4").innerHTML = getViewProduct(
                                "data/sepatu/leedo-sepatu-gunung-MH103/leedo-sepatu-gunung-MH103.png",
                                "Leedoo Sepatu Hiking Pria Casual Mendaki Sepatu Gunung Outdoor MH103",
                                129000,
                                `Sepatu sangat ringan dipakai sepatu dengan kualitas bagus dan kokoh, sepatu Hiking ini sepatu yg dipacking dengan box denagan kualitas unggulan dibuat menggunakan bahan lembut yang mengikuti lekuk kaki tidak keras sangat elegan dan cocok buat teman teman memberikan kesan modis casual dan trendy sangat berkualitas.

                                SPESIFIKASI PRODUK :
                                Bahan : PU + Jala
                                Warna : Hitam dan Abu-abu
                                Fitur : Anti Slip Sol Rubbernya membuatnya tidak licin
                                Cocok Digunakan Untuk : Kuliah, Kerja, Traveling, Hiking, Touring
                                Cocok Digunakan Dicuaca : Musim Hujan & Panas`
                            );
                        </script>
                    </td>

                    <td class="product1x5" style="padding-right: 50px;padding-top: 20px">
                        <script>
                            document.querySelector(".product1x5").innerHTML = getViewProduct(
                                "data/sepatu/leedo-sepatu-gunung-MH208/leedo-sepatu-gunung-MH208.jpg",
                                "Leedoo Sepatu Hiking Anti Air Sepatu Olahraga Sepatu Gunung MH208 - Abu-abu 39",
                                499000,
                                `Leedoo Sepatu Hiking Anti Air Sepatu Olahraga Sepatu Gunung MH208

                                BONUS : FREE BOX & KAOS KAKI
                                Sepatu ini di lengkapi alas yang sangat nyaman, desain yang elegan. sangat cocok digunakan di berbagai medan baik di medan berbatu, medan lantai, ataupun medan lumpur. Karena desain bahan menyesuaikan penggunaan

                                Material : Rubber, PU Leather
                                Warna : Abu-abu dan Hitam
                                Ready Size
                                40=25cm
                                41=25.5cm
                                42=26cm
                                43=26.5cm
                                44=27cm`
                            );
                        </script>
                    </td>
                </tr>
            </table>
        </div>
        
        <div class="list_tas">
            <table>
                <!-- TAS GUNUNG - 2 -->
                <tr>
                    <td>
                        <div class="category">
                            Tas Gunung
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="product2x1" style="padding-right: 75px;padding-top: 20px">
                        <script>
                            document.querySelector(".product2x1").innerHTML = getViewProduct(
                                "data/tas/carrier-nature-hike-70l/carrier-nature-hike-70l.jpg",
                                "Carrier Naturehike 70L Tas Gunung Keril Hiking Kerir Outdoor Pendaki - Brown",
                                1146000,
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
                    <td class="product2x2" style="padding-right: 75px;padding-top: 20px">
                        <script>
                            document.querySelector(".product2x2").innerHTML = getViewProduct(
                                "data/tas/eiger-rhinos-45-ng-carrier/eiger-rhinos-45-ng-carrier.webp",
                                "Eiger Rhinos 45 NG Carrier - Gacor Kang Edition",
                                1139050,
                                `
                                Rhinos 45 NG adalah carrier yang dirancang untuk kegiatan hiking selama 1-3 hari. Ransel berkapasitas 45 Liter ini dilengkapi dengan fitur backsystem Fit Light yang dapat memberikan kenyamanan dan meminimalisir panas pada punggung Anda. Tas ini memiliki kompartemen utama untuk menyimpan dan menjangkau peralatan Anda dengan leluasa. Terdapat saku samping untuk menyimpan botol minum dan saku hipbelt untuk memudahkan penyimpanan barang bawaan yang sering diakses. Fitur tambahan lainnya yang mendukung kegiatan hiking Anda, diantaranya fitur tali dada, pengikat trekking pole, dan tali kompresi, dan lubang hydration system. Terdapat pula rain cover untuk memastikan barang bawaan Anda terlindungi saat hujan.

                                Dimension: 30 x 25 x 67 cm (Vol 45L)
                                Material:
                                Polyester 600D
                                Polyester 200D Recycled Lining

                                Fitur:
                                * Teknologi backsystem Fit Light.
                                * Kompartemen utama.
                                * Kompartemen depan.
                                * Saku tutup atas.
                                * Dua saku samping.
                                * Tali kompresi samping.
                                * Saku hipbelt.
                                * Pengikat trekking pole.
                                * Rain cover.`
                            );
                        </script>
                    </td>
                    <td class="product2x3" style="padding-right: 75px;padding-top: 20px">
                        <script>
                            document.querySelector(".product2x3").innerHTML = getViewProduct(
                                "data/tas/eiger-z-safeguard-laptop-sleeve-2f/tas-laptop-z-safeguard-laptop-sleeve-2f.webp",
                                "Eiger Z-Safeguard Laptop Sleefe 2F",
                                279000,
                                `
                                Z-Safeguard Laptop Sleeve 2F adalah tas yang didesain ramping dan praktis digunakan untuk menyimpan laptop Anda tetap rapi, mudah diakses, dan aman saat berkegiatan sehari-hari. Kompartemen utama tas ini dapat memuat laptop 15”. Saku-saku di bagian depan dapat memuat gadget seperti kabel power charger laptop, mouse, ballpoint, ponsel, harddisk, powerbank, kabel-kabel, dll.

                                Dimension: 28 x 8 x 42,5 cm

                                Fitur:
                                * Kompartemen utama yang dapat memuat laptop 15”.
                                * Tiga saku di bagian depan untuk membawa perlengkapan gadget seperti kabel power charger laptop, ponsel, harddisk, powerbank, kabel-kabel, dll.
                                * Webbing loop dengan reflektif aksen.`
                            );
                        </script>
                    </td>
                </tr>
                <tr>
                    <td class="product2x4" style="padding-right: 75px;padding-top: 20px">
                        <script>
                            document.querySelector(".product2x4").innerHTML = getViewProduct(
                                "data/tas/techdoo-tas-ransel-40L-TR109/techdoo-tas-ransel-40L-TR109.jpg",
                                "Techdoo Tas Ransel Gunung 40L Backpack Anti Air Hiking Camping TR109 - Biru",
                                108000,
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
                </tr>
            </table>
        </div>

        <div class="list_tenda">
            <table>
                <!-- TAS GUNUNG - 2 -->
                <tr>
                    <td>
                        <div class="category">
                            Tenda
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="product3x1" style="padding-right: 75px;padding-top: 20px">
                        <script>
                            document.querySelector(".product3x1").innerHTML = getViewProduct(
                                "data/tenda/alltrek-onyx-camping-4orang/alltrek-onyx-camping-4orang.jpg",
                                "ALLTREK Tenda Camping ONYX Glamping Outdoor Double Layer 4 Orang - Cream ONYX",
                                1750000,
                                `ALLTREK Tenda Camping Glamping Outdoor 2 Layer

                                Deskripsi:
                                CODE : ONYX
                                Tipe : Onyx Vidalido
                                No Model : YU020
                                Bahan Kain: Polyester 190T
                                Ukuran: 210 CM x240 CM x 200 CM
                                Ukuran MX PRO : 300 CM X 450 CM X 240 CM
                                Ukuran Tas: 62x16cm
                                Ukuran Tas MX PRO : 22 CM X 67 CM
                                Outer Layer: Waterproof PU 3000mm
                                Inner Layer: Waterproof PU 2000mm
                                Berat: 5kg
                                Kapasitas: 4 Orang

                                Isi Paket:
                                1x Tas Penyimpanan
                                1x Inner Layer
                                1x Outer Layer
                                1x Tiang Utama
                                1x Tiang Pintu
                                8x Tali Angin
                                7x Pasak

                                Informasi Produk:

                                - Instalasi Dapat Dilakukan Dengan Cepat
                                - Banyak Titik Ventilasi Konveksi Udara
                                - Kain Tahan UV
                                - Multifungsi Serbaguna
                                - Jarak Ruang Yang Besar

                                Tenda camping multifungsi, yang menyediakan space guest room didepan tendanya saat tenda sudah diinstalasi. Digunakan untuk kegiatan outdoor Anda bersama teman/pasangan Anda.`
                            );
                        </script>
                    </td>
                    <td class="product3x2" style="padding-right: 75px;padding-top: 20px">
                        <script>
                            document.querySelector(".product3x2").innerHTML = getViewProduct(
                                "data/tenda/naturhike-tent-village-13/naturhike-tent-village-13.png",
                                "Tenda Camping Naturehike Tent Village 13 CNH22ZP004 5-8P - Tenda",
                                3100000,
                                `
                                Tenda Glamping double layer untuk 5-8 orang yang memiliki model seperti rumah kecil dan sangat mudah didirikan dengan frame otomatis. Bahan anti air, windproof dan memiliki sirkulasi udara yang baik. Memiliki 2 kamar tidur dan 1 living room untuk berkumpul bersama dengan design jendela yang besar sehingga sinar matahari dapat masuk dan sirkulasi udara yang baik

                                Merek: Naturehike
                                Model no: CNH22ZP004
                                Kategori: Tenda
                                Warna: Coklat
                                Material :
                                *Flysheet: 210D Polyester Oxford Coated Silver
                                *Jendela: Polyester Breathable mesh (jaring dalam)
                                *Tiang (Frame): Aluminium Alloy
                                *Aksesoris: Steel (Pasak), dan nylon (tali tenda)
                                Ukuran:
                                *395 x 270 x 183cm (terbuka)
                                *110 x 25 x 30cm (Dikemas)
                                Kapasitas: 5-8 orang
                                Berat: 22kg (sudah termasuk aksesoris dan storage bag) / …kg (Keseluruhan Dengan Dus)
                                Isi Paket:
                                *1x Inner tent
                                *1x Outer tent
                                *1 Set Rangka Tenda
                                *3x Hall Pole
                                *31x Pasak + Pouch
                                *3x Tali Tenda (Sisa nya terikat pada tenda)
                                *1x Curtain
                                *2x Strap
                                *1x Tas Penyimpanan

                                Fitur Produk :
                                *Windproof dan Waterproof index PU 1500MM – 2000MM
                                *Classic Cabin style dengan sirkulasi udara yang sangat baik
                                *Sangat mudah, cepat dan praktis didirikan dengan frame otomatis
                                *Terdapat 3 pole untuk teras yang kokoh
                                *Jendela pada semua sisi tenda, memudahkan sinar matahari dan angin sejuk masuk ke dalam tenda
                                *Terdapat pouch jaring dalam kamar tidur untuk menyimpan benda berharga
                                *Hook untuk menggantung lampu
                                *Terdapat atmosphere lamp strip
                                *Cocok untuk camping & piknik keluarga 5-8 orang`
                            );
                        </script>
                    </td>
                    <td class="product3x3" style="padding-right: 75px;padding-top: 20px">
                        <script>
                            document.querySelector(".product3x3").innerHTML = getViewProduct(
                                "data/tenda/tenda-camping-lipat-otomatis/tenda-camping-lipat-otomatis.png",
                                "Tenda Camping Lipat Otomatis 3-4 Orang Waterproof Double Layer",
                                599000,
                                `
                                Material : Polyester Fabric
                                Dimensi : Sekitar: 210 x 200 x 135 cm
                                Dimensi Terlipat: 72 x 16 x 16 cm
                                Kapasitas: 3-4 Orang

                                Isi paket :
                                1 x Tenda Camping Lipat Otomatis 3-4 Orang Waterproof Double Layer - ZK50
                                1 Set Pasak dan Tali

                                Tenda kemah ini memiliki desain yang sempurna untuk kegiatan outdoor Anda. Dengan menggunakan tenda kemah ini, Anda tidak akan merasa kedinginan dan kepanasan saat berada di dalam tenda karena menggunakan bahan polyester fabric sehingga bisa menginsulasi panas saat cuaca dingin. Memiliki fitur proteksi anti UV yang sangat mutakhir dan didesain double layer agar menjaga Anda dari terpaan suhu dingin ketika berkemah di dataran tinggi.


                                ~Proteksi Anti UV
                                Terbuat dari bahan polyester fabric sehingga dapat memblok panas sinar UV secara optimal dan maksimal. Anda dapat berteduh dengan aman di dalam tenda ketika matahari bersinar sangat menyengat.

                                ~Double Layer
                                Tenda dapat ditutup full ataupun hanya layer dalam yang berbentuk jaring sesuai dengan keinginan Anda, ditutup full untuk keamanan dan ditutup sebagian untuk udara segar namun tetap bebas nyamuk.

                                ~Kerangka Fleksibel dan Dapat Dilipat
                                Setiap kerangka dari tenda ini sangat fleksibelsehingga tidak mudah patah walaupun tertindih dan jatuh. Didesain secara kokoh dankuat untuk menahanterpaan angin.Tendaini ringan dan mudah dilipat, tidak menghabiskan banyak tempat ketika dibawa.

                                ~Bahan Berkualitas
                                Bahannya terbuat dari Polyester fabric berkualitas yang tahan air membuat tenda camping ini tak akan bocor atau robek meski diguyur hujan berangin. Anda pun dapat menikmati waktu istirahat dengan nyaman saat hujan.`
                            );
                        </script>
                    </td>
                </tr>
                <tr>
                    <td class="product2x4" style="padding-right: 75px;padding-top: 20px">
                        <script>
                            document.querySelector(".product2x4").innerHTML = getViewProduct(
                                "data/tas/techdoo-tas-ransel-40L-TR109/techdoo-tas-ransel-40L-TR109.jpg",
                                "Techdoo Tas Ransel Gunung 40L Backpack Anti Air Hiking Camping TR109 - Biru",
                                108000,
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
                </tr>
            </table>
        </div>
    </div>
    </center>
</body>
</html>
