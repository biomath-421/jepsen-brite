<?php

include("./Config/config.inc.php");   // configuration

include("./Vue/header.inc.php");

try
{
    $dbh = new PDO($dbdsn, $dbusername, $dbpassword);    // appel à la BD

    if(isset($_REQUEST["section"]))
    {
          //  case "accueil":
                if(isset($_REQUEST["section"]))
                {
                    include("Modele/accueil.inc.php"); // requete qui reprends ts ce qu'il y a ds la vue accueil, tableau des 5 futures events
                    include("Vue/accueil.inc.php");     // renvoi vers sa propre page "accueil"
                }


// Faire jusqu'à cette ligne => faut définir les différentes vues pour la suite


    }	// 1er if

    elseif(isset($_REQUEST["event"]))
    {
        switch($_REQUEST["section_event"])
        {
            case "list_events":		// Catalogue des events
                if(isset($_REQUEST["a_modif_event"])  AND isset($_REQUEST["id"]))   // Modifier un event suivant son ID
                {
                    if(isset($_REQUEST["submit"]))
                    {
                        include('Modele/mod_event/update_modif_event.inc.php'); //echo "ok";				 /////////
                        include('Vue/vue_event/ajouter_confirmation.inc.php');
                    }
                    else
                    {
                        include('Vue/vue_event/event_modif.inc.php');
                    }
                }
                elseif(isset($_REQUEST["a_sup_event"])  AND isset($_REQUEST["id"]))   // Supprimer un event suivant son ID
                {
                    if(isset($_REQUEST["submit"]))
                    {
                        include('Modele/mod_event/update_sup_event.inc.php');
                        include('Vue/vue_event/ajouter_confirmation.inc.php');
                    }
                    else
                    {
                        include('Vue/vue_event/event_supprim.inc.php');		//////
                    }
                }
                elseif(isset($_REQUEST["id"]))					// Fiche d'un event
                {
                    include("Modele/mod_event/rech_fich_event.inc.php");
                    include("Vue/vue_event/fiche_event.inc.php");
                }
                else			// Catalogue des events
                {
                    include("Modele/mod_event/list_event.inc.php");
                    include("Vue/vue_event/liste_event.inc.php");
                }
                break;
            case "insert_event":						// Enregistrez un event
                if(isset($_REQUEST["submit"]))
                {
                    include('Modele/mod_event/insert_event.inc.php');				 /////////
                    include('Vue/vue_event/ajouter_confirmation.inc.php');
                }
                else
                {
                    include('Vue/vue_art/artiste_form.inc.php');
                }
                break;
            case "search_event":						// Recherchez un event
                if(isset($_REQUEST["submit"]))
                {
                    include("Modele/mod_event/search_event.inc.php");
                    include("Vue/vue_event/liste_event.inc.php");
                }
                else
                {
                    include("Vue/vue_event/recherche_event_form.inc.php");
                }
                break;
        }
    }  // ferme le elseif

    elseif(isset($_REQUEST["section_user"]))	  // INTRANET
    {
        switch($_REQUEST["section_user"])
        {
            case "control_fan":
                if(isset($_REQUEST["submit"]))
                {
                    include("session/session.inc.php");
                }
                else
                {
                    include("Vue/Vue_user/accueil_user.inc.php");
                }
                break;
            case "insert_fan":
                {
                    header('Location: session/formulaire.php');
                }
                break;
        }
    }

    else
    {
        include("Vue/accueil.inc.php");     // renvoi vers sa propre page "accueil"
    }






}  // ferme le try
catch(PDOException $e)
{
    echo $e->getMessage();
}

include("./Vue/footer.inc.php");


?>