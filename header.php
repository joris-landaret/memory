<header>
    <div>
        <img src="img/demon.jpg" alt="">
        <h1>Memory</h1>
    </div>

    <div class="liste">
        <ul>
            <li><a href="http://memory/">Accueil</a></li>
            <?php if (!empty($_SESSION['login'])) : ?>
                <li><a href="http://memory/profil.php">Profil</a></li>
                <li><a href="http://memory/deconnexion.php">Se déconnecter</a></li>
                <li><a href="http://memory/board.php">Memory</a></li>
            <?php else : ?>
                <li><a href="http://memory/connexion.php">Connexion</a></li>
                <li><a href="http://memory/inscription.php">Inscription</a></li>
            <?php endif; ?>
            <li><a href="http://memory/score">Tableau des scores</a></li>
        </ul>
    </div>

</header>