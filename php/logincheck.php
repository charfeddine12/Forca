<?php
include('connexion.php');

$x=$_POST['username'];
$y=$_POST['password'];
$reponse = $bdd->query('SELECT login,mdp,type FROM `utilisateur` WHERE `login` = "'.$x.'" AND `mdp` = "'.$y.'"' );
$donnees = $reponse->fetch();
if(!empty($donnees)){
    session_start ();
    $_SESSION['login']=$x;
    header ('location: ../acceuil.php');
}
else
{
    ?>
    <script>
        window.alert('mot de passe incorrect');
        window.location="../connecter.php"
    </script>
<?php



}
?>