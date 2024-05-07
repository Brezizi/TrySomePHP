<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Add Book</title>
</head>
<body class="m-5">
    <h3 class="font-bold">Add Book</h3>
    <form action="how_add_book.php" method="post">
        Book Name :
        <input type="text" name="nama_buku" value="" class="form-control">
        Description : 
        <input type="text" name="deskripsi" value="" class="form-control">
        Image Link :
        <input type="text" name="foto_buku" value="" class="form-control">
        <input type="submit" name="simpan" value="Add Book" class="btn btn-primary">
    </form>
</body>
</html>
