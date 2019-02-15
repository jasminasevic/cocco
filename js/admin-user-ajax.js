$(document).ready(function () {
    $("#btnSaveUser").click(function (evt) {
        evt.preventDefault();

        // var firstName = querySelector('');

        $.ajax({
            method: "POST",
            url: "php/admin-add-user.php",
            // dataType: "json",
            data: {
                btnSaveUser: true,
                firstName: firstName,
                lastName: lastName,
                contactEmail: email,
                contactSubject: subject,
                contactMessage: message
            },
            success: function (podaci) {

                if (podaci) {
                    //$('#contact-form').hide();
                    //alert("You will now be redirected.");
                    window.location = "index.php?page=contact-form-submitted";
                }
            },
            error: function (xhr, statusTxt, error) {
                var status = xhr.status;
                switch (status) {
                    case 500:
                        alert("Greska na serveru. Trenutno nije moguce uneti korisnika.");
                        break;
                    case 404:
                        alert("Stranica nije pronadjena.");
                        break;
                    default:
                        alert("Greska: " + status + " - " + statusTxt);
                        break;
                }
            }
        });

    });
});

