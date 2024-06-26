<?php 
    include "header.php";
?>
<h2>History</h2>
<table class="table table-hover table-striped">
    <thead>
        <th>No</th><th>Date Borrow</th><th>Date to Back the Book</th><th>Book Name</th><th>Status</th><th>Option</th>
    </thead>
    <tbody>
        <?php 
        include "connect.php";
        $qry_histori=mysqli_query($conn,"select * from peminjaman order by id_peminjaman desc");
        $no=0;
        while($dt_histori=mysqli_fetch_array($qry_histori)){
            $no++;
            //menampilkan buku yang dipinjam
            $buku_dipinjam="<ol>";
            $qry_buku=mysqli_query($conn,"select * from  detail_peminjaman join buku on buku.id_buku=detail_peminjaman.id_buku where id_peminjaman = '".$dt_histori['id_peminjaman']."'");
            while($dt_buku=mysqli_fetch_array($qry_buku)){
                $buku_dipinjam.="<li>".$dt_buku['nama_buku']."</li>";
            }
            $buku_dipinjam.="</ol>";
            //menampilkan status sudah kembali atau belum
            $qry_cek_kembali=mysqli_query($conn,"select * from pengembalian_buku where id_peminjaman_buku = '".$dt_histori['id_peminjaman']."'");
            if(mysqli_num_rows($qry_cek_kembali)>0){
                $dt_kembali=mysqli_fetch_array($qry_cek_kembali);
                $denda="denda Rp. ".$dt_kembali['denda'];
                $status_kembali="<label class='alert alert-success'>Sudah kembali <br>".$denda."</label>";
                $button_kembali="";
            } else {
                $status_kembali="<label class='alert alert-danger'>kaishite nai</label>";
                $button_kembali="<a href='book_back.php?id=".$dt_histori['id_peminjaman_buku']."' class='btn btn-warning' onclick='return confirm(\"hello\")'>Kembalikan</a>";
            }
        ?>
            <tr>
                <td><?=$no?></td><td><?=$dt_histori['tanggal_pinjam']?></td><td><?=$dt_histori['tanggal_kembali']?></td><td><?=$buku_dipinjam?></td><td><?=$status_kembali?></td><td><?=$button_kembali?></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?php 
    include "footer.php";
?>
