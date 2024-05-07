<?php 
    include "header.php";
?>
<body class="bg-light">
<h2 class="font-bold mt-5">List Book on Cart</h2>
<table class="table table-hover striped">
    <thead>
        <tr>
            <th>No</th><th>Book Name</th><th>Total</th><th>Option</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach (@$_SESSION['cart'] as $key_produk => $val_produk): ?>
            <tr>
                <td><?=($key_produk+1)?></td><td><?=$val_produk['nama_buku']?></td><td><?=$val_produk['qty']?></td><td><a href="delete_cart.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<a href="checkout.php" class="btn btn-primary">Check Out</a>
</body>
<?php 
    include "footer.php";
?>
