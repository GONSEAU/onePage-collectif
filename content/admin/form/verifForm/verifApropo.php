<?php
if (isset ($_POST['valider'])){
        $title=$_POST['title'];
        $first_image=$_POST['first_image'];
        $first_text=$_POST['first_text'];
        $second_image=$_POST['second_image'];
        $second_text=$_POST['second_text'];  
        $title_text_1=$_POST['title_text_1'];
        $title_text_2=$_POST['title_text_2'];

        require_once '../../../sql/Sql.php';
        $sql = new Sql;
        $Apropos = $sql->setSectionApropos($title,$first_image,$first_text,$second_image,$second_text,$title_text_1,$title_text_2);
        
 }
 
 require_once '../../../sql/Sql.php';
 $sql = new Sql;
 $Apropos = $sql->getSectionApropos();

 header('Location: ../../index.php');
?> 