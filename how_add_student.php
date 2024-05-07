<?php
if($_POST){
    $nama_siswa=$_POST['nama_siswa'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
    $username=$_POST['username'];
    $password= $_POST['password'];
    $id_kelas=$_POST['id_kelas'];
    if(empty($nama_siswa)){
        echo "<script>alert('Student Name Cannot Empty');location.href='add_student.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('Username Cannot Empty');location.href='add_student.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('Password Cannot Empty');location.href='add_student.php';</script>";
    } else {
        include "connect.php";
        $insert=mysqli_query($conn,"insert into siswa (nama_siswa,tanggal_lahir, gender, alamat, username, password, id_kelas) value ('".$nama_siswa."','".$tanggal_lahir."','".$gender."','".$alamat."','".$username."','".md5($password)."','".$id_kelas."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Success Add Student');location.href='add_student.php';</script>";
        } else {
            echo "<script>alert('Failed Add Student');location.href='add_student.php';</script>";
        }
    }
}
?>
