<?php
if(isset($_POST['mail'])){
    $header="MIME-Version: 1.0\r\n";
    $header.='From:"Jespens-brite.com"<support@jepsens.com>'."\n";
    $header.='Content-Type:text/html; charset="uft-8"'."\n";
    $header.='Content-Transfer-Encoding: 8bit';
                                
    $message='
    <html>
        <body>
            <div align="center">
                Félicitation' . $pseudo . '<br />
                Bienvenue sur le site JEPSENS BRITE.
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fpagtour.info%2Fla-justice-europeenne-se-penche-sur-le-pouce-bleu%2F&psig=AOvVaw24WbFuewyeDCmh1udyzMv5&ust=1595683016967000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCJCQ08385eoCFQAAAAAdAAAAABAD"/>
            </div>
        </body>
    </html>
    ';
                                
    mail("rasamizafybryan98@gmail.com", "Salut tout le monde !", $message, $header);
}

 ?>

 <form action="" method='POST'>
    <input type="submit" value='envoyer mail' name='mail'>
 </form>