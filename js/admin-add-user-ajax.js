// // ADD NEW QUOTE

// $(document).ready(function () {
//     $("#btnSaveUser").on('click', function (e) {
//         e.preventDefault();

//         var firstName = document.getElementById("tbUserFirstName").value;
//         var lastName = document.getElementById("tbUserLastName").value;
//         var email = document.getElementById("tbUserEmail").value;
//         var pass = document.getElementById("tbUserPass").value;
//         var biography = document.getElementById("tbUserBiography").value;
//         var position = document.getElementById("tbUserPosition").value;

//         var active = document.getElementById("ddlActive");
//         var ddlActive = active.options[active.selectedIndex].value;

//         var vote = document.getElementById("ddlVote");
//         var ddlVote = vote.options[vote.selectedIndex].value;

//         var role = document.getElementById("ddlUserRole");
//         var ddlRole = role.options[role.selectedIndex].value;



//         $userImage = $_FILES['fUserImage'];

//         $fileName = $userImage['name'];
//         $fileType = $userImage['type'];
//         $fileSize = $userImage['size'];
//         $tmpPath = $userImage['tmp_name'];




//         var tbQuoteText = document.getElementById("tbQuoteText").value;
//         var tbQuoteAuthor = document.getElementById("tbQuoteAuthor").value;
//         var ddlQuoteCategory = document.getElementById("ddlQuoteCategory").value;

//         var e = document.getElementById("ddlQuoteCategory");
//         var tbQuoteCategory = e.options[e.selectedIndex].value;

//         $.ajax({
//             method: "POST",
//             url: "php/admin-add-quote.php",
//             // dataType: "json",
//             data: {
//                 btnSaveQuote: true,
//                 quoteText: tbQuoteText,
//                 quoteAuthor: tbQuoteAuthor,
//                 quoteCategory: tbQuoteCategory
//             },
//             success: function (podaci) {
//                 if (podaci == 'Quote added') {
//                     $("#tbQuoteText, #tbQuoteAuthor").val("");
//                     $('#ddlQuoteCategory').val('0');

//                     alert("Quote successfully added!");
//                 }
//                 else {
//                     alert(podaci);
//                 }
//             },
//             error: function (xhr, statusTxt, error) {
//                 var status = xhr.status;
//                 switch (status) {
//                     case 500:
//                         alert("Server error. Quote cannot be added at the moment");
//                         break;
//                     case 404:
//                         alert("Page can't be found");
//                         break;
//                     default:
//                         alert("Error: " + status + " - " + statusTxt);
//                         break;
//                 }
//             }
//         });
//     });
// });
