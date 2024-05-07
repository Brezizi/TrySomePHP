<?php
if($_POST){
    $id_siswa=$_POST['id_siswa'];
    $nama_siswa=$_POST['nama_siswa'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $id_kelas=$_POST['id_kelas'];
    if(empty($nama_siswa)){
        echo "<script>alert('Student Name Cannot Empty');location.href='change_data.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('Username Cannot Empty');location.href='change_data.php';</script>";
    } else {
        include "connect.php";
        if(empty($password)){
            $update=mysqli_query($conn,"update siswa set nama_siswa='".$nama_siswa."',tanggal_lahir='".$tanggal_lahir."', gender='".$gender."', alamat='".$alamat."', username='".$username."', id_kelas='".$id_kelas."' where id_siswa = '".$id_siswa."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Success Update Data');location.href='output_data.php';</script>";
            } else {
                echo "<script>alert('Failed Update Data');location.href='change_data.php?id_siswa=".$id_siswa."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update siswa set nama_siswa='".$nama_siswa."',tanggal_lahir='".$tanggal_lahir."', gender='".$gender."', alamat='".$alamat."', username='".$username."', password='".md5($password)."', id_kelas='".$id_kelas."' where id_siswa = '".$id_siswa."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Success Update Data');location.href='output_data.php';</script>";
            } else {
                echo "<script>alert('Failed Update Data');location.href='change_data.php?id_siswa=".$id_siswa."';</script>";
            }
        }
        
    } 
}
?>
