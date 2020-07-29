<?php
if(isset($_POST['mail'])){
    $to      = 'rasamizafybryan98@example.com';
    $subject = 'Inscription jepsens-brite';
    $message = 'Félicitation!! Vous êtes faite désormais partie de la grande famille des jepsens-brite!';
    $headers = 'From: jepsensbrite@support.com' . "\r\n" .
    'Reply-To: jepsensbrite@support.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
}

 ?>

 <form action="" method='POST'>
    <input type="submit" value='envoyer mail' name='mail'>
 </form>