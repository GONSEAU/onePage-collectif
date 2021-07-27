<?php
if (isset ($_POST['valider'])){
        $logo=$_POST['item_logo'];
        $item_1=$_POST['item_1'];
        $item_2=$_POST['item_2'];
        $item_3=$_POST['item_3'];
        $item_4=$_POST['item_4'];  
        $title=$_POST['title'];
        $calendly=$_POST['calendly'];

        require_once '../../../sql/Sql.php';
        $sql = new Sql;
        $navBar = $sql->setNav($logo,$item_1,$item_2,$item_3,$item_4,$title,$calendly);
        
 }
 

 require_once '../../index.php';
?> 