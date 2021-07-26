<?php
session_start();
if(!isset($_SESSION['user'])){
header('Location:form/loginForm.php');
}else{

    require_once '../sql/Sql.php';
    $sql = new Sql;
    $navBar = $sql->getNav();
    $Apropos =  $sql->getSectionApropos();
    $teamCard = $sql->getSectionTeam();


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
    <button class="btn btn-outline-success btn-submit" ><a href="form/logout.php" target="_blanck" >Logout</a></button>
    <button class="btn btn-outline-success btn-submit" ><a href="form/newUserForm.php" target="_blanck" >Add user</a></button>
</div>

<h1 class="text-center">Panel Admin</h1>


<!-- form navBar -->
<div class="container">
    <h2>Barre de navigation</h2>
    <form action="form/verifForm/verifNave.php" class="" method="post" id="meta-form">
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
        </div>
    </form>   
    <button class="btn btn-outline-success btn-submit" ><a href="../index.php" target="_blanck" >Preview</a></button>
</div>


<!-- form section a propos -->
<div class="container">
    <h2>Section à propo</h2>
    <form action="form/verifForm/verifApropo.php" class="" method="post" id="meta-form">
        <div class="form-group ">
            <label for="logo">Titre </label>
            <input type="text" class="form-control" id="title" name="title" value="<?= ( !empty($Apropos) ) ? $Apropos['title'] : '' ?>">
        </div>
        <div class="form-group ">
            <label for="item_1">première image </label>
            <input type="text" class="form-control" id="first_image" name="first_image" value="<?= ( !empty($Apropos) ) ? $Apropos['first_image'] : '' ?>">
        </div>
        <div class="form-group ">
            <label for="item_2">premier text</label>
            <input type="text" class="form-control" id="first_text" name="first_text" value="<?= ( !empty($Apropos) ) ? $Apropos['first_text'] : '' ?>">
        </div>
        <div class="form-group ">
            <label for="item_3">deuxieme image</label>
            <input type="text" class="form-control" id="second_image" name="second_image" value="<?= ( !empty($Apropos) ) ? $Apropos['second_image'] : '' ?>">
        </div>
        <div class="form-group">
            <label for="item_4">deuxieme text </label>
            <input type="text" class="form-control" id="second_text" name="second_text" value="<?= ( !empty($Apropos) ) ? $Apropos['second_text'] : '' ?>">
        </div>
        <div class="form-group">
            <label for="title">titre premier paragraphe </label>
            <input type="text" class="form-control" id="title_text_1"  name="title_text_1" value="<?= ( !empty($Apropos) ) ? $Apropos['title_text_1'] : '' ?>">
        </div>
        <div class="form-group">
            <label for="title">titre deuxieme paragraphe</label>
            <input type="text" class="form-control" id="title_text_2"  name="title_text_2" value="<?= ( !empty($Apropos) ) ? $Apropos['title_text_2'] : '' ?>">
        </div>

        <div class="form-group">
            <br>
            <button type="submit" class="btn btn-outline-success btn-submit" id="submit_form_apropos" name="valider">Envoyer</button>   
        </div>
    </form>   
    <button class="btn btn-outline-success btn-submit" ><a href="../index.php" target="_blanck" >Preview</a></button>
</div>

<!-- form section Team -->
<div class="container">
    <h2>Section team</h2>
    <form action="form/verifForm/verifTeam.php" class="" method="post" id="meta-form">
        <div class="form-group ">
            <label for="logo">Titre </label>
            <input type="text" class="form-control" id="title" name="title" value="<?= ( !empty($teamCard) ) ? $teamCard['photo_member'] : '' ?>">
        </div>
        <div class="form-group ">
            <label for="item_1">première image </label>
            <input type="text" class="form-control" id="first_image" name="first_image" value="<?= ( !empty($teamCard) ) ? $teamCard['name_member'] : '' ?>">
        </div>
        <div class="form-group ">
            <label for="item_2">premier text</label>
            <input type="text" class="form-control" id="first_text" name="first_text" value="<?= ( !empty($teamCard) ) ? $teamCard['text_member'] : '' ?>">
        </div>
        <div class="form-group ">
            <label for="item_3">deuxieme image</label>
            <input type="text" class="form-control" id="second_image" name="second_image" value="<?= ( !empty($teamCard) ) ? $teamCard['facebook_member'] : '' ?>">
        </div>
        <div class="form-group">
            <label for="item_4">deuxieme text </label>
            <input type="text" class="form-control" id="second_text" name="second_text" value="<?= ( !empty($teamCard) ) ? $teamCard['twitter_member'] : '' ?>">
        </div>
        <div class="form-group">
            <label for="title">titre premier paragraphe </label>
            <input type="text" class="form-control" id="title_text_1"  name="title_text_1" value="<?= ( !empty($teamCard) ) ? $teamCard['insta_member'] : '' ?>">
        </div>
        <div class="form-group">
            <br>
            <button type="submit" class="btn btn-outline-success btn-submit" id="submit_form_team" name="valider">Envoyer</button>   
        </div>
    </form>   
    <button class="btn btn-outline-success btn-submit" ><a href="../index.php" target="_blanck" >Preview</a></button>
</div>


</body>
</html>
<?php } ?>