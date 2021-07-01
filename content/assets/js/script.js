$(document).ready(function () { 

// navBar
$(window).scroll(function () {
    if ($(window).scrollTop() >= 150) {
        $('.navbar').addClass("navbar-scroll");
    } else {
        $('.navbar').removeClass("navbar-scroll");
    }
});

// // envoie Ajax Form
// $('#meta-form').submit(function (event) {
//     event.preventDefault();
//     var metaForm = $(this);
//     var formData = {
//         firstname: $("#firstname_").val(),
//         name: $("#name_").val(),
//         email: $("#email_").val(),
//         message: $("#message_").val()
//     };


//     $.ajax({
//         type: "POST",
//         url: "../form/verif-form.php",
//         data: formData,
//         success: function (data) {
//             console.log($("#firstname_").val());              
//                 // $('.ajax-return-meta').empty();
//                 // $('.ajax-return-meta').append(data);
//                 // $("#getCodeModal").modal("show");
//                 // $("#getCode").html(data).show();
//         }
//     });

// });


        // je capte l'event click sur le btn du form
    $("#submit").click(function (event) {
        // je block l'action par default du formulair (rafraichissement de la page)
        event.preventDefault();
        // jutilise la methode post d'ajax
        $.post(
            // j'envoie les paramétre a cette url qui est mon fichier de verification
            '../form/verif-form.php',
            //les paramétre en question 
            {
                // je récupere la valeur des inputs que je fait passer à verif-form.php
                firstname: $("#firstname_").val(),  
                name: $("#name_").val(),
                email: $("#email_").val(),
                message: $("#message_").val()
            },
            // recupére les données à la sortie de mon verif-form
            function(data){
                
            //  message dans la page HTML
                console.log(data);
                if(data.includes("Success")){
                    $("#submit").attr("disabled","disabled");
                    $("#infoForm").html("<small class='successForm'>Le formulaire a bien été envoyé !</small>");
                } else if(data.includes("Failed:mail")) {
                    $("#infoForm").html("<small class='failedForm'>l'email est invalide</small>")
                } else {                   
                     $("#infoForm").html("<small class='failedForm'>Tous les champs doivent étre remplis</p>");
                }
         
            },
            'text'
         );
        
    });

});