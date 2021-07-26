<!-- <form action="verifLoginForm.php" method="post">
  <div class="mb-3">
    <label for="" class="form-label">Username</label>
    <input type="text" class="form-control" id="userAdmin" aria-describedby="user" name='userName'>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href=""></a>
</form> -->



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- Link BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


  <!-- CSS -->
  <link rel="stylesheet" href="../assets/css/loginStyle.css">

</head>

<body class="small-form">
  <div class=" login-box ">
    <div class=" login-title">
      ADMIN PANEL
    </div>
    <div class="login-form ">
      <form action="verifForm/verifLoginForm.php" method="post">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Username" name='userName'>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <div class="login-button">
          <button type="submit" class="btn btn-outline-primary">LOGIN</button>
        </div>
        <div class="login-text">
          <p><?php echo (isset($error) && !empty($error) ? $error : ''); ?></p>
        </div>
      </form>
    </div>
    <div class="col-lg-3 col-md-2"></div>
</body>

</html>