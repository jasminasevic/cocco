$(document).ready(function () {
    $("#btnSubmit").click(function () {

        var arrayOk = [];
        var arrayNotOk = [];

        var firstName = document.querySelector("#regFirstName").value;
        var reName = /^[A-Z][a-z]{2,14}(\s[A-Z][a-z]{2,14})*$/;
        var flag = true;

        if (!reName.test(firstName)) {
            document.querySelector("#regFirstName").style.border = "1px solid red";
            $("#regFirstName")
                .prev("span")
                .show();
            arrayNotOk.push("First name is not ok");
            flag = false;
        } else {
            document.querySelector("#regFirstName").style.border = "1px solid #ccc";
            $("#regFirstName")
                .prev("span")
                .hide();
        }

        var lastName = document.querySelector("#regLastName").value;
        if (!reName.test(lastName)) {
            document.querySelector("#regLastName").style.border = "1px solid red";
            $("#regLastName")
                .prev("span")
                .show();
            arrayNotOk.push("Last name is not ok");
            flag = false;
        } else {
            document.querySelector("#regLastName").style.border = "1px solid #ccc";
            $("#regLastName")
                .prev("span")
                .hide();
        }

        var email = document.querySelector("#regEmail").value;
        var reEmail = /^[A-Za-z-_.]{2,15}@[A-Za-z._-]{2,10}\.[a-z]{2,5}$/;
        if (!reEmail.test(email)) {
            document.querySelector("#regEmail").style.border = "1px solid red";
            $("#regEmail")
                .prev("span")
                .show();
            arrayNotOk.push("Email is not ok");
            flag = false;
        } else {
            document.querySelector("#regEmail").style.border = "1px solid #ccc";
            $("#regEmail")
                .prev("span")
                .hide();
        }

        var pass = document.querySelector("#regPass").value;
        var rePassword = /^[\S]{2,50}$/;
        if (!rePassword.test(pass)) {
            document.querySelector("#regPass").style.border = "1px solid red";
            $("#regPass")
                .prev("span")
                .show();
            arrayNotOk.push("Password is not ok");
            flag = false;
        } else {
            document.querySelector("#regPass").style.border = "1px solid #ccc";
            $("#regPass")
                .prev("span")
                .hide();
        }

        if (!flag) {
            return flag;
        }

        $.ajax({
            method: "POST",
            url: "php/user_registration.php",
            // dataType: "json",
            data: {
                btnSubmit: true,
                regFirstName: firstName,
                regLastName: lastName,
                regEmail: email,
                regPass: pass
            },
            success: function (podaci) {
                alert(podaci);
                //      $('#signUpForm').children('input').val('');
                $('.register-input').val('');
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