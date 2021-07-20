<?php
if( isset($_POST['userName']) && isset($_POST['password']) && isset($_POST['confirmPassword']) ){
    if(empty($_POST['userName']) || empty($_POST['password']) || empty($_POST['confirmPassword'])){
        $error= "Veuillez remplir tous les champs";
        require 'newUserForm';
    }else {
        require_once '../../sql/Sql.php';
        $sql = new Sql;
        $user = $sql->getAdmin(htmlspecialchars( $_POST['userName']));
        if(!empty($user)) {
            $error= "Cet utilisateur existe déja ";
            require 'newUserForm.php';
        }else{   
            if( $_POST['password'] == $_POST['confirmPassword']){                
                $sql->newAdmin(htmlspecialchars($_POST['userName']),password_hash(htmlspecialchars($_POST['password']), PASSWORD_BCRYPT ));
                header('Location: ../index.php');
            }
            else{ 
                $error= "Une erreur c'est produit lors de la creation de l'utilisateur";
                require 'newUserForm.php';

            }
        } 
    }
}

?>