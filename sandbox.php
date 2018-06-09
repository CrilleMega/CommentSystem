<!doctype html>
<html>
<head>
    <title>Sandbox - Kommentarer/XSS</title>
    <link rel="icon" href="https://modworkshop.net/mydownloads/previews/preview_4860_1480052522_ec1499ec3e2fca85aad67e65493955aa.png">
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
    
<?php include "database.php";?>
    <body>
        <main>
        <form action="comment.php" method="post">
            <p style="margin-left: 20px;">Namn: </p>
            <input name="namn" type="name">
            <p style="margin-left: 20px;">Kommentar: </p>
            <textarea name="comment"></textarea>
            <button type="submit">Submit a comment</button>
        </form>
    <?php
for ($x = 0; $x <= ($Amount-1); $x++) 
    {
    echo
    "<div class=\"comment\">
    <span class=\"idnum\">$ID[$x]</span>
    <span >$Content[$x]</span>
    </div>"; 
    }
?></main>
    </body>
</html>
