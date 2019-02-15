// ADD NEW QUOTE

$(document).ready(function () {
    $("#btnSaveQuote").on('click', function (e) {
        e.preventDefault();

        var tbQuoteText = document.getElementById("tbQuoteText").value;
        var tbQuoteAuthor = document.getElementById("tbQuoteAuthor").value;
        var ddlQuoteCategory = document.getElementById("ddlQuoteCategory").value;

        var e = document.getElementById("ddlQuoteCategory");
        var tbQuoteCategory = e.options[e.selectedIndex].value;

        $.ajax({
            method: "POST",
            url: "php/admin-add-quote.php",
            // dataType: "json",
            data: {
                btnSaveQuote: true,
                quoteText: tbQuoteText,
                quoteAuthor: tbQuoteAuthor,
                quoteCategory: tbQuoteCategory
            },
            success: function (podaci) {
                if (podaci == 'Quote added') {
                    $("#tbQuoteText, #tbQuoteAuthor").val("");
                    $('#ddlQuoteCategory').val('0');

                    alert("Quote successfully added!");
                }
                else {
                    alert(podaci);
                }
            },
            error: function (xhr, statusTxt, error) {
                var status = xhr.status;
                switch (status) {
                    case 500:
                        alert("Server error. Quote cannot be added at the moment");
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
