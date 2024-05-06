<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
    <link rel="stylesheet" href="css/output.css">
</head>
<body>
    <?php
    /*Modul 2 Latihan 2*/
    $siswa = array(
        ['nama' => 'Ahmad Habibi', 'kelas' => 'X', 'jurusan' => 'RPL'], 
        ['nama' => 'Zainul Abidin', 'kelas' => 'XII', 'jurusan' => 'RPL'], 
        ['nama' => 'Firdaus', 'kelas' => 'XI', 'jurusan' => 'TKJ'], 
        ['nama' => 'Achmad Ilham', 'kelas' => 'X', 'jurusan' => 'TKJ'], 
   );

   foreach ($siswa as $key => $value) {
       //Nama
       echo '<p>'.$value['nama'].'</p>';

       //Kelas
       echo '<p>'.$value['kelas'].'</p>';

       //Jurusan
       echo '<p>'.$value['jurusan'].'</p>';
       echo '<br>';
   }
    ?>
</body>
</html>