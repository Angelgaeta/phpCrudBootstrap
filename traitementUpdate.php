
function updateStagiaire($id){
$update = 'UPDATE t_stagiaire SET nomStagiaire=:nom, prenomStagiaire=:prenom, dateNaisStagiaire=:naissance,civiliteStagiaire=:civilite, adressStagiaire=:adresse, idVille=:idville, mailStagiaire=:mail,idformation=:idformation WHERE idStagiaire= $id';
}

<?php
require_once 'DBConnect.php';

$id = htmlentities($_POST['idStagiaire'], ENT_QUOTES);
$nom = htmlentities($_POST['nom'], ENT_QUOTES);
$prenom = htmlentities($_POST['prenom'], ENT_QUOTES);
$naissance = htmlentities($_POST['naissance'], ENT_QUOTES);
$civilite = htmlentities($_POST['civilite'], ENT_QUOTES);
$adresse = htmlentities($_POST['adresse'], ENT_QUOTES);
$ville = htmlentities($_POST['ville'], ENT_QUOTES);
$mail = htmlentities($_POST['mail'], ENT_QUOTES);
$formation = htmlentities($_POST['formation'], ENT_QUOTES);


/* Exécute une requête préparée en liant des variables et valeurs */
$sql = "UPDATE t_stagiaire SET nomStagiaire=:nom, prenomStagiaire=:prenom, dateNaisStagiaire=:naissance,civiliteStagiaire=:civilite, adressStagiaire=:adresse, idVille=:idville, mailStagiaire=:mail,idformation=:idformation WHERE idStagiaire= $id";
$stmt = $dbh->prepare($sql);

function updateStagiaire($id){
$update = "UPDATE t_stagiaire SET nomStagiaire=:nom, prenomStagiaire=:prenom, dateNaisStagiaire=:naissance,civiliteStagiaire=:civilite, adressStagiaire=:adresse, idVille=:idville, mailStagiaire=:mail,idformation=:idformation WHERE idStagiaire= $id";}

/* PDOStatement::bindValue() va remplacer telle étiquette par telle valeur.
PDOStatement::bindParam() va remplacer telle étiquette par telle variable, dont la valeur pourra être modifiée avec le temps par PHP pour exécuter plusieurs fois une même requête préparée et avoir des résultats différents à chaque fois. */
$stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
$stmt->bindParam(':prenom', $prenom, PDO::PARAM_STR);
$stmt->bindParam(':naissance', $naissance, PDO::PARAM_STR);
$stmt->bindParam(':civilite', $civilite, PDO::PARAM_STR);
$stmt->bindParam(':adresse', $adresse, PDO::PARAM_STR);
$stmt->bindParam(':idville', $ville, PDO::PARAM_INT);
$stmt->bindParam(':mail', $mail, PDO::PARAM_STR);
$stmt->bindParam(':idformation', $formation, PDO::PARAM_INT);

$stmt->execute();

header('Location: list.php');
exit();

?>