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



    $("#submit").click(function (event) {
        event.preventDefault();
        $.post(
            '../form/verif-form.php',
            {
                firstname: $("#firstname_").val(),
                name: $("#name_").val(),
                email: $("#email_").val(),
                message: $("#message_").val()
            },
            function (data) {
                console.log(data);
                if (data.includes("Success")) {
                    $("#submit").attr("disabled", "disabled");
                    $("#infoForm").html("<small class='successForm'>Le formulaire a bien été envoyé !</small>");
                } else if (data.includes("Failed:mail")) {
                    $("#infoForm").html("<small class='failedForm'>l'email est invalide</small>")
                } else {
                    $("#infoForm").html("<small class='failedForm'>Tous les champs doivent étre remplis</p>");
                }
            },
            'text'
        );
    });

    $("#calendly-btn").click(
        function calendly() { Calendly.showPopupWidget('https://calendly.com/robin-gonseau/15min'); return false; });
        // with another system application, decomment here
        // window.onload = function() { Calendly.initBadgeWidget({ url: 'https://calendly.com/robin-gonseau/15min', text: 'Prendre rendez-vous', color: '#006bff', textColor: '#ffffff' }); };
});