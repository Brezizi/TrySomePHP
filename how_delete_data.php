<?php 
    if($_GET['id_siswa']){
        include "connect.php";
        $qry_hapus=mysqli_query($conn,"delete from siswa where id_siswa='".$_GET['id_siswa']."'");
        if($qry_hapus){
            echo "<script>alert('Success Delete Data');location.href='output_data.php';</script>";
        } else {
            echo "<script>alert('Failed Delete Data');location.href='output_data.php';</script>";
        }
    }
?>

