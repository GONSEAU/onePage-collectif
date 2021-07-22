<?php
session_start();
if(!isset($_SESSION['user'])){
require_once 'form/loginForm.php';
}else{


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/adminPanelStyle.css">

</head>

<body>

<div>
    <button class="btn btn-outline-success btn-submit" ><a href="form/loginForm.php" target="_blanck" >Logout</a></button>
    <button class="btn btn-outline-success btn-submit" ><a href="form/logout.php" target="_blanck" >Add user</a></button>
</div>

<h1 class="text-center">Panel Admin</h1>

 <?php
if (isset ($_POST['valider'])){
        $logo=$_POST['item_logo'];
        $item_1=$_POST['item_1'];
        $item_2=$_POST['item_2'];
        $item_3=$_POST['item_3'];
        $item_4=$_POST['item_4'];  
        $title=$_POST['title'];
        $calendly=$_POST['calendly'];

        require_once '../sql/Sql.php';
        $sql = new Sql;
        $navBar = $sql->setNav($logo,$item_1,$item_2,$item_3,$item_4,$title,$calendly);
        
 }
 
 require_once '../sql/Sql.php';
 $sql = new Sql;
 $navBar = $sql->getNav();

?> 

<div class="container">
    <h2>Barre de navigation</h2>
    <form action="index.php" class="" method="post" id="meta-form">
        <div class="form-group ">
            <label for="logo">Logo </label>
            <input type="text" class="form-control" id="logo" name="item_logo" value="<?= ( !empty($navBar) ) ? $navBar['item_logo'] : '' ?>">
        </div>
        <div class="form-group ">
            <label for="item_1">lien nav 1 </label>
            <input type="text" class="form-control" id="item_nav" name="item_1" value="<?= ( !empty($navBar) ) ? $navBar['item_1'] : '' ?>">
        </div>
        <div class="form-group ">
            <label for="item_2">lien nav 2</label>
            <input type="text" class="form-control" id="item_nav" name="item_2" value="<?= ( !empty($navBar) ) ? $navBar['item_2'] : '' ?>">
        </div>
        <div class="form-group ">
            <label for="item_3">lien nav 3</label>
            <input type="text" class="form-control" id="item_nav" name="item_3" value="<?= ( !empty($navBar) ) ? $navBar['item_3'] : '' ?>">
        </div>
        <div class="form-group">
            <label for="item_4">lien nav 4 </label>
            <input type="text" class="form-control" id="item_nav" name="item_4" value="<?= ( !empty($navBar) ) ? $navBar['item_4'] : '' ?>">
        </div>
        <div class="form-group">
            <label for="title">title </label>
            <input type="text" class="form-control" id="title"  name="title" value="<?= ( !empty($navBar) ) ? $navBar['title'] : '' ?>">
        </div>
        <div class="form-group">
            <label for="calendly"> calendly </label>
            <input type="text" class="form-control" id="calendly" name="calendly" >
        </div>
        <div class="form-group">
            <br>
            <button type="submit" class="btn btn-outline-success btn-submit" id="submit_form_nav" name="valider">Envoyer</button>
            <button class="btn btn-outline-success btn-submit" ><a href="../index.php" target="_blanck" >Preview</a></button>
        </div>
    </form>   
</div>


<?php
if (isset ($_POST['valider'])){
        $logo=$_POST['item_logo'];
        $item_1=$_POST['item_1'];
        $item_2=$_POST['item_2'];
        $item_3=$_POST['item_3'];
        $item_4=$_POST['item_4'];  
        $title=$_POST['title'];
        $calendly=$_POST['calendly'];

        require_once '../sql/Sql.php';
        $sql = new Sql;
        $navBar = $sql->setNav($logo,$item_1,$item_2,$item_3,$item_4,$title,$calendly);
        
 }
 
 require_once '../sql/Sql.php';
 $sql = new Sql;
 $navBar = $sql->getNav();

?> 
<div class="container">
    <h2>Section 1</h2>
    <form action="index.php" class="" method="post" id="meta-form">
        <div class="form-group ">
            <label for="logo">Logo </label>
            <input type="text" class="form-control" id="logo" name="item_logo" value="<?= ( !empty($navBar) ) ? $navBar['item_logo'] : '' ?>">
        </div>
        <div class="form-group ">
            <label for="item_1">lien nav 1 </label>
            <input type="text" class="form-control" id="item_nav" name="item_1" value="<?= ( !empty($navBar) ) ? $navBar['item_1'] : '' ?>">
        </div>
        <div class="form-group ">
            <label for="item_2">lien nav 2</label>
            <input type="text" class="form-control" id="item_nav" name="item_2" value="<?= ( !empty($navBar) ) ? $navBar['item_2'] : '' ?>">
        </div>
        <div class="form-group ">
            <label for="item_3">lien nav 3</label>
            <input type="text" class="form-control" id="item_nav" name="item_3" value="<?= ( !empty($navBar) ) ? $navBar['item_3'] : '' ?>">
        </div>
        <div class="form-group">
            <label for="item_4">lien nav 4 </label>
            <input type="text" class="form-control" id="item_nav" name="item_4" value="<?= ( !empty($navBar) ) ? $navBar['item_4'] : '' ?>">
        </div>
        <div class="form-group">
            <label for="title">title </label>
            <input type="text" class="form-control" id="title"  name="title" value="<?= ( !empty($navBar) ) ? $navBar['title'] : '' ?>">
        </div>
        <div class="form-group">
            <label for="calendly"> calendly </label>
            <input type="text" class="form-control" id="calendly" name="calendly" >
        </div>
        <div class="form-group">
            <br>
            <button type="submit" class="btn btn-outline-success btn-submit" id="submit_form_nav" name="valider">Envoyer</button>
            <button class="btn btn-outline-success btn-submit" ><a href="../index.php" target="_blanck" >Preview</a></button>
        </div>
    </form>   
</div>


</body>
</html>
<?php } ?>