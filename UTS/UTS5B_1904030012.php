<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Esai</title>
</head>
    <body>
        <h1>Muhamad Briyan Latuconsina</h1>
        <h1>1904030012</h1>
        <h2>Web Programing 5B</h2>
        <h2>Jawaban UTS Esai</h2>
        <hr>
        <h2>Perbedaan Variabel dengan Array di PHP</h2>
        <p>Array dapat menyimpan lebih dari 1 nilai dengan nama yang sama, sedangkan variabel biasa hanya dapat menampung 1 data saja</p>
        <p>Array dapat diakses berdasarkan indexnya, sedangkan variabel langsung diakses lewat nama variabelnya</p>
       <hr>
    <?php
       $biodata = [
        "ID" => "Brayens", 
        "nama" => "Muhamad Briyan Latuconsina", 
        "umur" => 20,
        "ttl" => "Tangerang, 02-05-2001", 
        "alamat" => "Perum Dasana Indah Bonang",
        "hobi" => "Nonton Film",
        "Makanan Fav" => "Nasi Goreng",
        "Film Fav" => "Interstellar",
       ];
        echo "<h2>Biodata (Array Asosiatif/Map Array)</h2>";
        echo "<p>ID: ".$biodata["ID"]."</br>";
        echo "<p>Nama: ".$biodata["nama"]."</br>";
        echo "<p>Umur: ".$biodata["umur"]."</br>";
        echo "<p>TTL: ".$biodata["ttl"]."</br>";
        echo "<p>Alamat: ".$biodata["alamat"]."</br>";
        echo "<p>Hobi: ".$biodata["hobi"]."</br>";
        echo "<p>Makanan Favorit: ".$biodata["Makanan Fav"]."</br>";
        echo "<p>Film Favort: ".$biodata["Film Fav"]."</br>";
       ?>
       <hr>
       <h2>Biodata Teman-temanku (Array Multidimensi)</h2>
       <?php
       $sahabats = [
        [
            "Nama" => "Rikas",
            "Umur" => "20 Tahun"
        ],
        [
           "Nama" => "Adinda",
           "Umur" => "19 Tahun"
       ],
       [
           "Nama" => "Dimas",
           "Umur" => "20 Tahun"
       ],
       [
           "Nama" => "Rachel",
           "Umur" => "20 Tahun"
       ],

    ];
    foreach ($sahabats as $sahabats) {
        echo "<h2>".$sahabats["Nama"]."</h2>";
        echo "<p>".$sahabats["Umur"]."</p>";
    }
     ?>
     <hr>
     <h2>Sintak Array</h2>
     <?php
         $binatang = ["Kucing","Berang berang","Gajah","Harimau"];
         var_dump($binatang);
         echo "<br>";
         echo "$binatang[1]";
         echo "<br>";

         // menambahkan value
         echo "<br>";
         $binatang[] = "Jerapah";
         var_dump($binatang);
         echo "<br>";
     
         // menghapus salah satu value
         echo "<br>";
         unset($binatang[0]);
         var_dump($binatang);
         echo "<br>";
     
         //menghitung total array
         echo "<br>";
         var_dump(count($binatang));
     ?>
    </body>
</html>