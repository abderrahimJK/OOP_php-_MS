<?php


// Null coalescing operator
$action  = $_GET['action'] ?? $_POST['action']  ?? 'show';

if($action == 'show'){

    include 'view/contact-us.html';
}else  if($action == 'submit'){
    //validate the form
    include 'view/contact-us.thanks.html';
    //store data
    //send email

}

