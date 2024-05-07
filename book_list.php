<?php 
    include "header.php";
?>
<head>
    <title>Book List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body class="bg-light">
<h2 class="font-bold m-3">Book List</h2>
<div class="row">
    <?php 
    include "connect.php";
    $qry_buku=mysqli_query($conn,"select * from buku");
    while($dt_buku=mysqli_fetch_array($qry_buku)){
        ?>
        <div class="col-md-3">
            <div class="card" >
              <img src="<?=$dt_buku['foto_buku']?>" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><?=$dt_buku['nama_buku']?></h5>
                <p class="card-text"><?=substr($dt_buku['deskripsi'], 0,20)?></p>
                <a href="book_borrow.php?id_buku=<?=$dt_buku['id_buku']?>" class="btn btn-primary">Borrow</a>
              </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
</body>
<?php 
    include "footer.php";
?>
