case 'valideConnexion':
{
    $login = $_REQUEST['login'];
    $mdp = $_REQUEST['mdp'];
    /** @var PdoGsb $pdo */
    $infosUtilisateur = $pdo->getInfosVisiteur($login, $mdp);

    if (!is_array($infosUtilisateur)) {
        ajouterErreur("Login ou mot de passe incorrect");
        include("views/v_erreurs.php");
        include("views/v_connexion.php");
    } else {
        $id = $infosUtilisateur['id'];
        $nom = $infosUtilisateur['nom'];
        $prenom = $infosUtilisateur['prenom'];
        $estComptable = $infosUtilisateur['estcomptable'];

        if ($estComptable == 1) {
            // User is a comptable
            connecterComptable($id, $nom, $prenom);
            include 'views/v_comptable.php';
        } else {
            // User is a visiteur
            connecter($id, $nom, $prenom);
            include 'views/v_sommaire.php';
            include 'views/v_accueil.php';
        }
    }
    break;
}
