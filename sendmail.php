<?php
if(isset($_POST['mail'])){
    $header="MIME-Version: 1.0\r\n";
    $header.='From:"Jespens-brite.com"<support@jepsens.com>'."\n";
    $header.='Content-Type:text/html; charset="uft-8"'."\n";
    $header.='Content-Transfer-Encoding: 8bit';
                                
    $message='Salut ça va?';
                                
    mail("rasamizafybryan98@gmail.com", "Salut tout le monde !", $message, $header);
}

 ?>

 <form action="" method='POST'>
    <input type="submit" value='envoyer mail' name='mail'>
 </form>