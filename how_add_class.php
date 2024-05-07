<?php
if($_POST){
    $nama_kelas=$_POST['nama_kelas'];
    $kelompok=$_POST['kelompok'];
    if(empty($nama_kelas)){
        echo "<script>alert('Class Name Cannot Empty');location.href='add_class.php';</script>";

    } elseif(empty($kelompok)){
        echo "<script>alert('Group Cannot Empty');location.href='add_class.php';</script>";
    } else {
        include "connect.php";
        $insert=mysqli_query($conn,"insert into kelas (nama_kelas, kelompok) value ('".$nama_kelas."','".$kelompok."')");
        if($insert){
            echo "<script>alert('Success Add Class');location.href='add_class.php';</script>";
        } else {
            echo "<script>alert('Failed Add Class');location.href='add_class.php';</script>";
        }
    }
}
?>
