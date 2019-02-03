$(document).ready(function () {
    $("#contactBtn").click(function (evt) {
        evt.preventDefault();

        console.log("Contact form button works");

        var arrayOk = [];
        var arrayNotOk = [];

        var flag = true;

        var firstName = document.querySelector("#contactFirstName").value;
        var reFirstLastName = /^[A-Z][a-z]{2,14}(\s[A-Z][a-z]{2,14})*$/;

        if (!reFirstLastName.test(firstName)) {
            document.querySelector("#contactFirstName").style.border = "1px solid red";
            arrayNotOk.push("First name is not ok");
            flag = false;
        } else {
            document.querySelector("#contactFirstName").style.border = "1px solid #ccc";
        }

        var lastName = document.querySelector("#contactLastName").value;

        if (!reFirstLastName.test(lastName)) {
            document.querySelector("#contactLastName").style.border = "1px solid red";
            arrayNotOk.push("Last name is not ok");
            flag = false;
        } else {
            document.querySelector("#contactLastName").style.border = "1px solid #ccc";
        }

        var email = document.querySelector("#contactEmail").value;
        var reEmail = /^[A-Za-z-_.]{2,15}@[A-Za-z._-]{2,10}\.[a-z]{2,5}$/;

        if (!reEmail.test(email)) {
            document.querySelector("#contactEmail").style.border = "1px solid red";
            arrayNotOk.push("Email is not ok");
            flag = false;
        } else {
            document.querySelector("#contactEmail").style.border = "1px solid #ccc";
        }

        var subject = document.querySelector("#contactSubject").value;
        var reSubject = /^[A-Za-z0-9\s]{2,50}$/;

        if (!reSubject.test(subject)) {
            document.querySelector("#contactSubject").style.border = "1px solid red";
            arrayNotOk.push("Subject is not ok");
            flag = false;
        } else {
            document.querySelector("#contactSubject").style.border = "1px solid #ccc";
        }

        var message = document.querySelector("#contactMessage").value;
        var reMessage = /^[A-Za-z0-9\s\.,?!]{2,}$/;

        if (!reMessage.test(message)) {
            document.querySelector("#contactMessage").style.border = "1px solid red";
            arrayNotOk.push("Message is not ok");
            flag = false;
        } else {
            document.querySelector("#contactMessage").style.border = "1px solid #ccc";
        }

        if (!flag) {
            return flag;
        }



        $.ajax({
            method: "POST",
            url: "php/contact_validation.php",
            // dataType: "json",
            data: {
                contactBtn: true,
                contactFirstName: firstName,
                contactLastName: lastName,
                contactEmail: email,
                contactSubject: subject,
                contactMessage: message
            },
            success: function (podaci) {

                if (podaci) {
                    alert("You will now be redirected.");
                    window.location = "index.php?page=contact-form-submitted";
                }
                //$('#contactForm').children('input').val('');
                //$('.contact-input').val(''); - dodaj klasu u sve inpute
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

