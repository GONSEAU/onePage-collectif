<?php
session_start();
if( isset($_POST['userName']) && isset($_POST['password']) ){
    if(empty($_POST['userName']) || empty($_POST['password'])){
        echo "Veuillez remplir tous les champs";
    }else {
        require_once '../../sql/Sql.php';
        $sql = new Sql;
        $user = $sql->getAdmin(htmlspecialchars( $_POST['userName']));
        if(empty($user)) {
            echo "Erreur dans l'identifiant ou le mot de passe";
        }else{   
            if( password_verify($_POST['password'],$user['password'])){ 
                $_SESSION['user'] = $_POST['userName'];
                header('Location: ../index.php');
            }
            else{ 
                echo "Erreur dans l'identifiant ou le mot de passe";
            }
        } 
    }
}