<button class="btn btn-outline-success btn-submit" ><a href="../index.php" >Return to PanelAdmin</a></button>
<form action="verifForm/verifNewUserForm.php" method="post">
  <div class="mb-3">
    <label for="" class="form-label">Username</label>
    <input type="text" class="form-control" id="userName"  name='userName'>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Password</label>
    <input type="password" class="form-control" id="password"  name='password'>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">confirmPassword</label>
    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href=""></a>
</form>
<p><?php echo (isset($error) && !empty($error)? $error : '') ; ?></p>