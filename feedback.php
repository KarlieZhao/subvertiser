<?php

if(isset($_POST['submit'])){
    $short = $_POST['short'];
    $long = $_POST['long'];

    $mailto = "contact@subvertiser.org";
    $headers = "From: Subvertiser";

    // mail($mailto, $short, $long, $headers);
    mail(
        $mailto,
        $short,
        $long
    );
    
    // header("Location: index.php?mailsend");
}