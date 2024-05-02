<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/output.css">
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
    </style>
</head>
<body class="bg-blue-500">
<div class="container">
    <?php
    /*Modul 2 Tugas 1*/
    $dataProduk = array(
        //nama produk, merk, harga, status stok
        array("Galaxy S21", "Samsung", 19000000, true),
        array("Galaxy A71", "Samsung", 6999000, false),
        array("iPhone 12 Pro Max", "Apple", 20999000, true),
        array("iPhone 12 Mini", "Apple", 10999000, false),
        array("Xperia 1 II", "Sony", 6499000, true),
    );

    foreach ($dataProduk as $produk) {
        echo '<div class="w-64 m-5 p-5 bg-white text-black rounded-xl shadow-xl hover:bg-red-600 hover:text-white hover:transition delay-5s group">';
        
        //Merk
        echo '<h3 class="font-bold text-2xl">'.$produk[1].'</h3>';
    
        //Model
        echo '<p>'.$produk[0].'</p>'.'<br>';
    
        //Price
        echo '<p class="text-2xl">Rp'.number_format($produk[2], 0, ',', '.').'</p>'.'<br>';
    
        //Stock & Button
        if ($produk[3]) {
            echo '<p class="text-green-600 group-hover:text-white font-bold group-hover:transition delay-7s">Stok tersedia</p>' . '<br>';
            echo '<button class="py-2 px-5 rounded-md font-bold bg-white text-white group-hover:bg-black group-hover:text-white group-hover:transition delay-5s"><a href="https://www.instagram.com/zizzfr_?igsh=bnN6MzJtaGFkcjBi" target="_blank">Order Now</a></button>';
        } else {
            echo '<p class="text-red-600 group-hover:text-black font-bold group-hover:transition delay-7s">Stok habis</p>' . '<br>';
            echo '<button class="hidden">Order Now</button>';
        }
        echo '</div>';
    }
    ?>
    </div>
</body>
</html>