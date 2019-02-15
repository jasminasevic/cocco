<?php

session_start();
include "php/connection.php";

$page="";
if(isset($_GET['page'])){
    $page = $_GET['page'];
}

include "views/head.php";

include "php/menu_builder.php";
include "php/admin-add-user.php";

include "views/nav.php";

switch($page){
    case "main":
        include "views/main.php";
        break;
    case "blog_listing":
        include "views/blog_listing.php";
        break;
    case "single_blog":
        include "views/single_blog.php";
        break;
    case "about_author":
        include "views/about_author.php";
        break;
    case "about_us":
        include "views/about_us.php";
        break;
    case "contact":
        include "views/contact.php";
        break;
    case "author":
        include "views/author.php";
        break;
    case "login":
        include "views/login.php";
        break;
    case "admin":
        include "views/admin.php";
        break;
    case "admin-post":
        include "views/admin-post.php";
        break;
    case "admin-quote":
        include "views/admin-quote.php";
        break;
    case "admin-user":
        include "views/admin-user.php";
        break;
    case "poll":
        include "views/poll.php";
        break;
    case "contact-form-submitted":
        include "views/contact-form-submitted.php";
        break;
    default:
        include "views/main.php";
        break;

}
include "views/footer.php";
