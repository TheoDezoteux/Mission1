<!-- Division pour le sommaire -->
<nav class="menuLeft">
    <ul class="menu-ul">
        <li class="menu-item"><a href="index.php">retour</a></li>

        <li class="menu-item">
            <p><?php echo $_SESSION['TypeCPT'] ?> </p><br>
            <?php echo $_SESSION['prenom'] . "  " . $_SESSION['nom'] ?>
        </li>

        <li class="menu-item">
            <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes
                fiches de frais</a>
        </li>
        <li class="menu-item">
            <a href="index.php?uc=cumulefrais&action=cumulefrais" title="Consultation du cumule des frais">
                 Etat de tout les frais par mois</a>
        </li>
        <li class="menu-item">
            <a href="index.php?uc=fraisVisiteur&action=fraisVisiteur" title="Consultation du cumule des frais">
            Etat de tout les frais par visiteurs</a>
        </li>
        <li class="menu-item">
            <a href="index.php?uc=cumulefrais&action=cumuletous" title="Consultation du cumule des frais">
                 Etat de tout les frais</a>
        </li>
        <li class="menu-item">
            <a href="index.php?uc=cumulefrais&action=cumulevisiteur" title="Consultation du cumule des frais">
                 Etat de Visiteur</a>
        </li>
            <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
        </li>
    </ul>
</nav>
<section class="content">


