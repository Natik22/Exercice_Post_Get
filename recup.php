<?php


$email = $_GET["email"];
$name = $_GET["name"];
$lastname = $_GET["lastname"];

if (!empty($name) && ($lastname) && ($email)) {

    echo "Vous avez remplie les champs <br>";

}else {

    echo "erreur de saisie dans les champs <br>";
}




// afficher les champs saisie:

echo "Bonjour $name $lastname. <br> Votre email est $email. <br> Merci pour votre inscription. <br> Bonne journe";