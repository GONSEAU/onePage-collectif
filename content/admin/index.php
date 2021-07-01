<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

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

?> 

<div class="container">
    <div class="row">
        <div class="col-md-6">   
            <div class="card-body">
                <form action="index.php" class=" " method="post" id="meta-form">
                    <div class="form-group ">
                        <label for="logo">Logo </label>
                        <input type="text" class="form-control" id="logo" name="item_logo">
                    </div>
                    <div class="form-group ">
                        <label for="item_1">lien nav 1 </label>
                        <input type="text" class="form-control" id="item_nav" name="item_1">
                    </div>
                    <div class="form-group ">
                        <label for="item_2">lien nav 2</label>
                        <input type="text" class="form-control" id="item_nav" name="item_2">
                    </div>
                    <div class="form-group ">
                        <label for="item_3">lien nav 3</label>
                        <input type="text" class="form-control" id="item_nav" name="item_3">
                    </div>
                    <div class="form-group">
                        <label for="item_4">lien nav 4 </label>
                        <input type="text" class="form-control" id="item_nav" name="item_4">
                    </div>
                    <div class="form-group">
                        <label for="title">title </label>
                        <input type="text" class="form-control" id="title"  name="title">
                    </div>
                    <div class="form-group">
                        <label for="calendly"> calendly </label>
                        <input type="text" class="form-control" id="calendly" name="calendly" >
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-success btn-submit" id="submit_form_nav" name="valider">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


</body>
</html>
