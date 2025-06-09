    <section class="top-page">
        <nav class="nav-bar">
            <ul>
                <li><a class="no-style" href="<?= ROOT ?>accueil">Accueil</a></li>
                <li><a class="no-style" href="<?= ROOT ?>nos_smartphone">Nos Smartphones</a></li>
                <li><a class="no-style" href="<?= ROOT ?>contact">Nous contacter</a></li>
                <?php if(empty($_SESSION)): ?>
                <li><a class="no-style" href="<?= ROOT ?>compte/connexion">Connexion</a></li>
                <li><a class="no-style" href="<?= ROOT ?>compte/inscription">Inscription</a></li>
                <?php else : ?>
                <li><a class="no-style" href="<?= ROOT ?>panier">Mon Panier</a></li>
                <li><a class="no-style" href="<?= ROOT ?>monespace">Mon Espace</a></li>
                <li><a class="no-style" href="<?= ROOT ?>compte/logout">Deconnexion</a></li>
                <?php endif ?>
            </ul>
            <ul>
                <li><a class="no-style" href="<?= ROOT ?>listeProduit">Apple</a></li>
                <li><a class="no-style" href="<?= ROOT ?>listeProduit">Samsung</a></li>
                <li><a class="no-style" href="<?= ROOT ?>listeProduit">Xiaomi</a></li>
                <li><a class="no-style" href="<?= ROOT ?>listeProduit">Huawei</a></li>
            </ul>
        </nav>
    </section>