<?php
if($_POST){
    $nama_buku=$_POST['nama_buku'];
    $deskripsi=$_POST['deskripsi'];
    $foto_buku=$_POST['foto_buku'];
    if (empty($nama_buku)){
        echo "<script>alert('Book Name Cannot Empty');location.href='add_book.php';</script>";
    } else if (empty($foto_buku)){
        echo "<script>alert('Image Link Cannot Empty');location.href='add_book.php';</script>";
    } else {
        include "connect.php";
        $insert=mysqli_query($conn,"insert into buku (nama_buku, deskripsi, foto_buku) value ('".$nama_buku."','".$deskripsi."','".$foto_buku."')");
        if($insert){
            echo "<script>alert('Success Add Book');location.href='add_book.php';</script>";
        } else {
            echo "<script>alert('Failed Add Book');location.href='add_book.php';</script>";
        }
    }
}
?>