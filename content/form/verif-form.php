
<?php
// verification du remplissage des champs du formulaire
if ((!empty($_POST['firstname'])) 
 && (!empty($_POST['name']))
 && (!empty($_POST['email'])) 
 && (!empty($_POST['message']))) {
    
    $securEmail = htmlspecialchars( stripslashes( nl2br( $_POST['email'] ) ) );
    if (filter_var($securEmail, FILTER_VALIDATE_EMAIL)) {

        $securFirstname = htmlspecialchars( stripslashes( $_POST['firstname'] ) ) ;
        $securName = htmlspecialchars( stripslashes( $_POST['name'] ) ) ;
        $securMessage = htmlspecialchars( stripslashes( $_POST['message'] ) ) ; 

        $to      = 'robin.gonseau@gmail.com';
        $subject = $securName . ' prise de contacte project-barber';
        $message =  $securMessage;
        $headers = array(
            'From' => $securEmail,
            'Reply-To' => $securEmail,
            'X-Mailer' => 'PHP/' . phpversion()
            );
         (mail($to, $subject, $message, $headers)) ;
            echo 'success';
    } else {
            echo "Failed:mail";
    }
} 
?>
