<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Data</title>
</head>
<body class="m-5">
    <h3 class="font-bold">Student Data</h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>No</th><th>Student Name</th><th>Born Date</th>
    <th>Address</th><th>Gender</th>
    <th>Username</th><th>Class</th><th>Option</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "connect.php";
$qry_siswa=mysqli_query($conn,"select * from siswa join kelas on kelas.id_kelas=siswa.id_kelas");
            $no=0;
            while($data_siswa=mysqli_fetch_array($qry_siswa)){
            $no++;?>
            <tr>              
                <td><?=$no?></td><td><?=$data_siswa['nama_siswa']?></td> <td><?=$data_siswa['tanggal_lahir']?></td> <td><?=$data_siswa['alamat']?></td><td><?=$data_siswa['gender']?></td> <td><?=$data_siswa['username']?></td> <td><?=$data_siswa['nama_kelas']?></td> <td><a href="change_data.php?id_siswa=<?=$data_siswa['id_siswa']?>" class="btn btn-success">Change</a> | <a href="how_delete_data.php?id_siswa=<?=$data_siswa['id_siswa']?>" onclick="return confirm('Are you sure delete this data?')" class="btn btn-danger">Delete</a></td>
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
</body>
</html>
