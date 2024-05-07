<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Add Class</title>
</head>
<body class="m-5">
    <h3 class="font-bold">Add Class</h3>
    <form action="how_add_class.php" method="post">
        Class Name :
        <input type="text" name="nama_kelas" value="" class="form-control">
        Group : 
        <input type="number" name="kelompok" value="" class="form-control">
        <input type="submit" name="simpan" value="Add Class" class="btn btn-primary">
    </form>
</body>
</html>
