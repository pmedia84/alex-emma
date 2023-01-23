<?php
//email settings for contact forms
//Settings for all form scripts
/// Define who the emails get sent to from forms filled out
$email_to = "";

$host = ""; /// Hostname
$username = ""; ///Username
$pass = ""; /// Password
$from = $username; ///Email

$fromname = ""; /// Username and how you want your name to be displayed on emails
$emailheaderlogo = "";//logo url for inserting into the top of email bodies

//Contact details: Phone number, email address etc
$contactnum ="";
$emailaddress = "";
$facebookurl = "";

//load database for wedding information
    //look for a wedding setup in the db, if not then direct to the setup page
    $wedding_query = ('SELECT wedding_name FROM wedding LIMIT 1');
    $wedding_result = $db->query($wedding_query);

    $wedding = $db->prepare($wedding_query);
    $wedding->execute();

    $wedding->bind_result($wedding_name);
    $wedding->fetch();
    $wedding->close();
