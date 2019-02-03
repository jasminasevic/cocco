// Poll vote - ajax

$(document).ready(function () {
    $(".btnSubmitVote").click(function (e) {
        var id = $(this).data("id");

        $.ajax({
            method: "POST",
            url: "php/poll-vote.php",
            //dataType: "json",
            data: {
                id: id
            },
            success: function (podaci) {
                if (!podaci) {
                    alert("You have already voted!");
                } else {
                    var $brojac = $(e.target)
                        .find(".badge")
                        .html();
                    $brojac = Number($brojac) + 1;
                    $(e.target)
                        .find(".badge")
                        .html($brojac);

                    alert("Thank you for your vote!");
                }
            },
            error: function (xhr, statusTxt, error) {
                alert(error);
                alert(statusTxt);

                var status = xhr.status;
                switch (status) {
                    case 500:
                        alert("Server error. Role can not be deleted at the moment");
                        break;
                    case 404:
                        alert("Page can't be found");
                        break;
                    default:
                        alert("Error: " + status + " - " + statusTxt);
                        break;
                }
            }
        });
    });
});
