<html>
    <head>
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body class="bg-light">
    <?php 
        include "header.php";
    ?>
    <h2 class="text-center my-5 mx-auto text-bg-light">Welcome to <?=$_SESSION['nama_siswa']?> Online Library</h2>
    <?php
        include "footer.php";
    ?>
    </body>
