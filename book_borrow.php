<?php 
    include "header.php";
    include "connect.php";
    $qry_detail_buku=mysqli_query($conn,"select * from buku where id_buku = '".$_GET['id_buku']."'");
    $dt_buku=mysqli_fetch_array($qry_detail_buku);
?>
<head>
    <title>Borrow Book</title>
</head>
<body class="bg-light">
<h2 class="font-bold mt-5">Borrow Book</h2>
<div class="row">
    <div class="col-md-4">
        <img src="<?=$dt_buku['foto_buku']?>" class="card-img-top my-5">
    </div>
    <div class="col-md-8">
        <form action="how_cart.php?id_buku=<?=$dt_buku['id_buku']?>" method="post">
            <table class="table table-hover table-striped my-5">
                <thead>
                    <tr>
                        <td>Book Name</td><td><?=$dt_buku['nama_buku']?></td>
                    </tr>
                    <tr>
                        <td>Description</td><td><?=$dt_buku['deskripsi']?></td>
                    </tr>
                    <tr>
                        <td>Total Book Borrowed</td><td><input type="number" name="jumlah_pinjam" value="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="Borrow"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>
</body>
<?php 
    include "footer.php";
?>
