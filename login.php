<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="m-5">
    <div class="row" style="margin-top:50px;">
    <div class="col-md"></div>
    <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px">
        <form action="how_login.php" method="post">
          <h3 align="center" class="font-bold">Login - Online Library</h3>
          Username:
          <input type="text" name="username" value="" class="form-control">
          password:
          <input type="password" name="password" class="form-control"><br>
          <center><input type="submit" name="login" class="btn btn-success" value="Login"></center>
      </form>
    </div>
    <div class="col-md"></div>
  </div>
</body>
</html>
