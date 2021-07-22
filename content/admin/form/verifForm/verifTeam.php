<?php
if (isset ($_POST['valider'])){
        $photo_member=$_POST['photo_member'];
        $name_member=$_POST['item_1'];
        $text_member=$_POST['item_2'];
        $facebook_member=$_POST['item_3'];
        $twitter_member=$_POST['twitter_member'];  
        $insta_member=$_POST['insta_member'];

        require_once '../../../sql/Sql.php';
        $sql = new Sql;
        $navBar = $sql->setSectionTeam($photo_member,$name_member,$text_member,$facebook_member,$twitter_member,$title,$insta_member);
        
 }
 

 require_once '../../../sql/Sql.php';
?> 