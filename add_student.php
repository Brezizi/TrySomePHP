<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Add Student</title>
</head>
<body class="m-5">
    <h3 class="font-bold">Add Student</h3>
    <form action="how_add_student.php" method="post">
        Student Name :
        <input type="text" name="nama_siswa" value="" class="form-control">
        Born Date : 
        <input type="date" name="tanggal_lahir" value="" class="form-control">
        Gender : 
        <select name="gender" class="form-control">
            <option></option>
            <option value="L">Boy</option>
            <option value="P">Girl</option>
        </select>
        Address : 
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        Class :
        <select name="id_kelas" class="form-control">
            <option></option>
            <?php 
            include "connect.php";
            $qry_kelas=mysqli_query($conn,"select * from kelas");
            while($data_kelas=mysqli_fetch_array($qry_kelas)){
                echo '<option value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].'</option>';    
            }
            ?>
        </select>
        Username : 
        <input type="text" name="username" value="" class="form-control">
        Password : 
        <input type="password" name="password" value="" class="form-control">
        <input type="submit" name="simpan" value="Submit" class="btn btn-primary">
    </form>
</body>
</html>
