<?php

    if ($_POST['submit']){

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $message = $_POST['message'];

    }

    // A terminé email du destinataire

$emailFrom = "$email";
$header = "MIME-Version: 1.0\r\n";
$header .= "From: <$emailFrom>" . "\r\n";
$header .= 'Content-Type:text/html; charset="uft-8"' . "\n";
$header .= 'Content-Transfer-Encoding: 8bit';
$messages = '
        <html>
            <body>
            
                <div align="center" style="background: black;padding: 9px;">
                        <img src="">
                    <div style="color:#fff;font-style:italic;">'.$nom.' '.$prenom.' veut : '.$message'  </div>
                  </div>
                <div>♥♥♥</div>
            </body>
        </html>'
        ;

    if (mail($email, "Message de votre site", $message, $header)){
        header('Location:index.html');
    }else{
        echo "gbish";
    }